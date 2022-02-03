<?php
echo("test php");
require_once('../libs/Smarty.class.php');
echo("test2");
$smarty= new Smarty();
echo("test3");
$smarty->assign('var1','test_var');
$smarty->display('../html/index.tpl');