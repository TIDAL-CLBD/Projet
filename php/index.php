<?php
echo("test php");
require_once('../libs/Smarty.class.php');
echo("test2");
$smarty= new Smarty();
echo("test3");
$smarty->assign('var1','test_var');
$smarty->debugging = true;

$smarty->setTemplateDir('../smarty/templates/');
$smarty->setCompileDir('../smarty/templates_c/');
$smarty->setConfigDir('../smarty/configs/');
$smarty->setCacheDir('../smarty/cache/');

$smarty->display('../html/index.tpl');