<?php
session_start();

if ($_SESSION["access"] == "granted") {
}
	
else
	header("Location: login.php");

require_once('includes/header.php');

$smarty = new Smarty();

$smarty->template_dir = 'Smarty/templates';
$smarty->compile_dir = 'Smarty/templates_c';
$smarty->cache_dir = 'Smarty/cache';
$smarty->config_dir = 'Smarty/configs';

$smarty->assign('pdir', $pdir);
$smarty->assign('apdir', $apdir);
$smarty->assign('title', 'Deletion Confirmation');

// Process form
$form = new Input($_POST);

$deletedrec = $form->getInt("deletedrec");

$query = "DELETE FROM recommendations WHERE id = $deletedrec;";

$result = $db->query($query);

$bodyContent = "<p>The recommendation has successfully been deleted. <a href=\"admin.php\">Back to Admin Page</a></p>";

$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');
?>
