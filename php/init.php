<?php
require_once('../libs/Smarty.class.php');
function init()
{
    $smarty= new Smarty();
    $smarty->setTemplateDir('../smarty/templates/');
    $smarty->setCompileDir('../smarty/templates_c/');
    $smarty->setConfigDir('../smarty/configs/');
    $smarty->setCacheDir('../smarty/cache/');
    $smarty->debugging = false;
    return $smarty;
}