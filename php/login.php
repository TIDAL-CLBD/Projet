<?php

include('user.php');
include('login.tpl');

// On détruit la session pour détruire les infos des utilisateurs précedemment connectés
session_destroy();

	// Sous WAMP (Windows)

	    //print_r($_POST);
if (isset($_POST['submit_login'])){
	$user = new User(NULL, NULL, $_POST['username'], $_POST['password'], NULL);
	$user->login();
	// header('Location: accueil.php');
}
	    
if(isset($_GET['erreur'])){
	$err = $_GET['erreur'];
	if($err==1 || $err==2){
	    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
	    }
}
?>
