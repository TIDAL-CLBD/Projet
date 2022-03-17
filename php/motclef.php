<?php

require '../libs/Smarty.class.php';

$smarty = new Smarty();
try {
    $dbh = new PDO('pgsql:host=localhost;port=5432;dbname=acudb', 'pgtidal', 'tidal');
    } 
catch (PDOException $e) {
    echo $e->getCode() . ' ' . $e->getMessage();
    }


$sql = "SELECT * FROM public.patho"  ;
$sth = $dbh->prepare( $sql );
$sth->execute();
$patho = $sth->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM public.keywords"  ;
$sth = $dbh->prepare( $sql );
$sth->execute();
$keywords = $sth->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM public.symptpatho"  ;
$sth = $dbh->prepare( $sql );
$sth->execute();
$symptpatho = $sth->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM public.keysympt"  ;
$sth = $dbh->prepare( $sql );
$sth->execute();
$keysympt = $sth->fetchAll(PDO::FETCH_ASSOC);

$retour = NULL;
$data = NULL;

if (isset($_POST["appliquer"])){
    $data = $_POST["data"];
}


if (isset($data)) {
    foreach ($keywords as $motclef) { 
      
        if ($motclef["name"]== $data) {
            foreach ($keysympt as $idsympt) {  
            
                if ($idsympt["idk"] == $motclef["idk"]) {
                    foreach ($symptpatho as $sympt_patho) {

                        if ($sympt_patho["ids"] == $idsympt["ids"]) {
                            foreach ($patho as $pathologie){

                                if ($sympt_patho["idp"] == $pathologie["idp"]){
                                    $retour = $pathologie["desc"];
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    if (!isset($retour)) {
        $retour = "REESSAYER";
    }
}

$smarty->assign("retour", $retour);
$smarty->display('../html/recherche.tpl');
?>
