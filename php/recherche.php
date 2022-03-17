<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('init.php');
require_once('log.php');
$smarty = init();
$smarty->display('../html/recherche.tpl');