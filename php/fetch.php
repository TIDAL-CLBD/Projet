<?php
$val=0;
$json = file_get_contents('php://input');
$data = json_decode($json);
//Connexion à la bdd


$user = 'pgtidal';
$passwd = 'tidal';
$dsn = "pgsql:host=localhost;port=5432;dbname=acudb;";
 
$dbh = new PDO($dsn,$user, $passwd);

//Requête sql

$sql = 'SELECT * FROM patho WHERE mer LIKE :data1 AND type LIKE :data2 AND type LIKE :data3';

$sth = $dbh->prepare($sql);

$sth->bindValue(':data1', '%'.$data[1].'%', PDO::PARAM_STR);
$sth->bindValue(':data2', '%'.$data[2].'%', PDO::PARAM_STR);
$sth->bindValue(':data3', '%'.$data[3].'%', PDO::PARAM_STR);


$success = $sth->execute();
$val = $sth->fetchAll();

echo(json_encode($val));


//todo recup infos du js pour faire la requete
//todo mise en page json

//dans le js: interpréter le json + adapter le css et le html en fct