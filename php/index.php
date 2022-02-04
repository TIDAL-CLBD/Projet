<?php
require_once('init.php');
$smarty = init();

echo("index ok");
$smarty->assign('var1','test_var');
$smarty->debugging = true;

$smarty->setTemplateDir('../smarty/templates/');
$smarty->setCompileDir('../smarty/templates_c/');
$smarty->setConfigDir('../smarty/configs/');
$smarty->setCacheDir('../smarty/cache/');

$smarty->display('../html/index.tpl');