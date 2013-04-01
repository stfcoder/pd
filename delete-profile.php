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

$deletedprofile = $form->getString("shipname");

$query = "DELETE FROM shipprofiles WHERE shipname = '".$deletedprofile."';";

$result = $db->query($query);

$bodyContent = "<p>The ship profile for $deletedprofile has successfully been deleted. <a href=\"admin.php\">Back to Admin Page</a></p>";

$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');
?>
