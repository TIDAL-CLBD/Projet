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

$sql = "SELECT * FROM patho WHERE mer LIKE %".$data[0]."% AND [type] LIKE %".$data[1]."% AND [type] LIKE %".$data[2]."%";
$sth = $dbh->prepare( $sql );

/*
$sth->execute( array( ':value1' => $data[0] ) );
$sth->execute( array( ':value2' => $data[] ) );
$sth->execute( array( ':value3' => 'tfpc' ) );
*/

$val = $sth->fetchAll();

echo(json_encode($val));


//todo recup infos du js pour faire la requete
//SQL Inj?
//todo mise en page json

//dans le js: interpréter le json + adapter le css et le html en fct