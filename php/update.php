<?php

include('user.php');
include('updatesign.tpl');

session_start();

$user = 'pgtidal';
$passwd = 'tidal';
$dsn = "pgsql:host=localhost;port=5432;dbname=acudb;";

$acudb  = new PDO($dsn,$user, $passwd);

if(isset($_POST['submit_update'])){
	$user = new User($_POST['lastname'], $_POST['firstname'], $_SESSION["username"], $_POST['password'], $_POST['birthday']);
	$user->update();
}
?>