<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('init.php');
require_once('log.php');
$smarty = init();
$loggedIn = 1;
if(isset($_SESSION)){
    //utilisateur connecté pour l'affichage de la barre de recherche
    //(aussi vérifié dans le fetch.php)
    $loggedIn = 0;
  }
$smarty->display('../html/recherche.tpl');