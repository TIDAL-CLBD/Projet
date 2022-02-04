<?php
require_once('init.php');
$smarty = init();

echo("index ok");
$smarty->assign('var1','test_var');
$smarty->display('../html/index.tpl');