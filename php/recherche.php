<?php
require_once('init.php');
require_once('log.php');
debug_to_console('aaaaaaaaaa');
$smarty = init();
$smarty->display('../html/recherche.tpl');