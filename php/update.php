<?php

include('user.php');
include('updatesign.tpl');

session_start();
// $acubd = new PDO('mysql:host=localhost;dbname=acubd;charset=utf8', 'root', '');

if(isset($_POST['submit_update'])){
	$user = new User($_POST['lastname'], $_POST['firstname'], $_SESSION["username"], $_POST['password'], $_POST['birthday']);
	$user->update();
}
?>