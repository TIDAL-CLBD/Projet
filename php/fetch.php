<?php
$val=0;

//Connexion à la bdd

$user = 'pgtidal';
$passwd = 'tidal';
$dsn = "pgsql:host=localhost;port=5432;dbname=acudb;";
 
$dbh = new PDO($dsn,$user, $passwd);

//Requête sql

//$sql = "SELECT * FROM patho WHERE mer=:value;";
$sql = "SELECT * FROM patho WHERE mer=:value;";
$sth = $dbh->prepare( $sql );

$sth->execute( array( ':value' => 'P' ) );
 
$val = $sth->fetchAll();

echo(json_encode($val));


//todo recup infos du js pour faire la requete
//SQL Inj?
//todo mise en page json

//dans le js: interpréter le json + adapter le css et le html en fct