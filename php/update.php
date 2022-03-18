<?php
require_once('init.php');
include('user.php');
include('update.tpl');

session_start();

if(isset($_POST['submit_update'])){
	$user = new User($_POST['lastname'], $_POST['firstname'], $_SESSION["username"], $_POST['password'], $_POST['birthday']);
	$user->update();
}
?>