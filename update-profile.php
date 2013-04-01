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
$smarty->assign('title', 'Update Profile');

// Process form
$form = new Input($_POST);

$shipname = $form->getString("shipname","");

$query = "SELECT * FROM shipprofiles WHERE shipname='".$shipname."';";
$stmt = $db->query($query);
$row = $stmt->fetch();

$smarty->assign('action', "commit-update.php");
$smarty->assign('value', "Update Profile");
$smarty->assign('Update', array(	'shipname' => $row['shipname'],
									'fleet' => $row['fleet'],
									'co' => $row['co'],
									'email' => $row['email'],
									'postingspeed' => $row['postingspeed'],
									'newmembers' => $row['newmembers'],
									'vacancyxo' => $row['vacancyxo'],
									'vacancyce' => $row['vacancyce'],
									'vacancycmo' => $row['vacancycmo'],
									'vacancycos' => $row['vacancycos'],
									'vacancycso' => $row['vacancycso'],
									'vacancyeng' => $row['vacancyeng'],
									'vacancymed' => $row['vacancymed'],
									'vacancysci' => $row['vacancysci'],
									'vacancysec' => $row['vacancysec'],
									'vacancyother' => $row['vacancyother'],
									'description' => $row['description']));

$bodyContent .= $smarty->fetch('update-profile.tpl');
$bodyContent .= $smarty->fetch('section-break.tpl');
$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');

?>
