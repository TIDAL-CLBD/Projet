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

$sql = 'SELECT patho.idp, patho.desc FROM patho WHERE patho.desc LIKE :data1';

$sth = $dbh->prepare($sql);

$sth->bindValue(':data1', '%'.$data[1].'%', PDO::PARAM_STR);

$success = $sth->execute();

$val = $sth->fetchAll();

echo(json_encode($val));
