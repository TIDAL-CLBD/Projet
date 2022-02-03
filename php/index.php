<?php
echo("test php");
require_once('/libs/Smarty.class.php');
$smarty= new Smarty();
$smarty->assign('var1','test_var');
$smarty->display('../html/index.tpl');