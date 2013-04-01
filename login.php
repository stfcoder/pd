<?php

require_once('includes/header.php');

$smarty = new Smarty();

$smarty->template_dir = 'Smarty/templates';
$smarty->compile_dir = 'Smarty/templates_c';
$smarty->cache_dir = 'Smarty/cache';
$smarty->config_dir = 'Smarty/configs';

$smarty->assign('pdir', $pdir);
$smarty->assign('apdir', $apdir);
$smarty->assign('2apdir', $sapdir);
$smarty->assign('title', 'Administration Login');

$bodyContent = $smarty->fetch('login.tpl');
$bodyContent .= $smarty->fetch('section-break.tpl');

$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');

?>
