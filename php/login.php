<?php
require_once('init.php');
require_once('log.php');
include('user.php');
include('../html/login.tpl');
include('index.php');

// On détruit la session pour détruire les infos des utilisateurs précedemment connectés
session_destroy();

if (isset($_POST['submit_login'])){
	$user = new User(NULL, NULL, $_POST['username'], $_POST['password'], NULL);
	$user->login();
	// header('Location: accueil.php');
}
	    
if(isset($_GET['erreur'])){
	$err = $_GET['erreur'];
	if($err==1 || $err==2){
	    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
		echo "<script>window.alert(\"Erreur, identifiants incorrects\");</script>";
    }
}
?>
