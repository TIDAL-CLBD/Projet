<?php
$val=0;
$json = file_get_contents('php://input');
$data = json_decode($json);

//Connexion à la bdd

$user = 'pgtidal';
$passwd = 'tidal';
$dsn = "pgsql:host=localhost;port=5432;dbname=acudb;";

$dbh = new PDO($dsn,$user, $passwd);
$sth;
//Requête sql
if($data[0] == 0){
    //Recherche par filtres
    $sql = 'SELECT patho.idp, patho.desc FROM patho WHERE mer LIKE :data1 AND type LIKE :data2 AND type LIKE :data3';

    $sth = $dbh->prepare($sql);

    $sth->bindValue(':data1', '%'.$data[2].'%', PDO::PARAM_STR);
    $sth->bindValue(':data2', '%'.$data[1].'%', PDO::PARAM_STR);
    $sth->bindValue(':data3', '%'.$data[3].'%', PDO::PARAM_STR);
}else{
    //Recherche par mot-clef dans la description

    //Vérification utilisateur connecté
    if(!isset($_SESSION)){
        //Désactivé car problèmes avec la connexion
        echo(1);
        return;
    }
    $sql = 'SELECT patho.idp, patho.desc FROM patho WHERE patho.desc LIKE :data1';

    $sth = $dbh->prepare($sql);

    $sth->bindValue(':data1', '%'.$data[1].'%', PDO::PARAM_STR);
}


$success = $sth->execute();

if (!$success) {
    echo "\nPDO::errorInfo():\n";
    print_r($sth->errorInfo());
}
$val = $sth->fetchAll();

// Seconde requête, description/symptomes 

$sql2 = 'SELECT symptpatho.idp, symptpatho.ids, symptome.desc 
 FROM symptpatho
 INNER JOIN symptome ON symptpatho.ids=symptome.ids';

$sth = $dbh->prepare($sql2);
$sth->execute();
$val2 = $sth->fetchAll();

usort($val2, function ($a, $b) {
    return $a['idp'] - $b['idp'];
}); //tri symptomes/patho par idp

$symptidp = [0 => ""]; // on va associer chaque idp à tous ses symptomes
$lastidp = 0;
foreach($val2 as $key=>$value){
    if($value["idp"] == $lastidp){
        $symptidp[$lastidp][]=$value["desc"];
    }else{
        $lastidp = $value["idp"];
        $symptidp[$lastidp]=[$value["desc"]];
    }
}
$ret = $val;
foreach ($val as $key=>$value) {
    $idp = $value[0]; //id de la patho en question
    $symptdesc = $symptidp[$idp]; //symptomes associés à cette patho
    $ret[$key][]=$symptdesc;
}

echo(json_encode($ret));
