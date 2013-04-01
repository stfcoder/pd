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
$smarty->assign('title', 'Update Profile Confirmation');

// Process form
$form = new Input($_POST);

$oldshipname = mysql_escape_string($form->getString("oldshipname"));
$shipname = mysql_escape_string($form->getString("shipname"));
$fleet = mysql_escape_string($form->getInt("fleet"));
$co = mysql_escape_string($form->getString("co"));
$email = mysql_escape_string(cleanEmail($form->getString("email")));
$postingspeed = mysql_escape_string($form->getString("postingspeed"));
$newmembers = mysql_escape_string($form->getString("newmembers"));
$vacancyxo = checkboxSet($_POST['vacancyxo']);
$vacancyce = checkboxSet($_POST['vacancyce']);
$vacancycmo = checkboxSet($_POST['vacancycmo']);
$vacancycos = checkboxSet($_POST['vacancycos']);
$vacancycso = checkboxSet($_POST['vacancycso']);
$vacancyeng = checkboxSet($_POST['vacancyeng']);
$vacancymed = checkboxSet($_POST['vacancymed']);
$vacancysci = checkboxSet($_POST['vacancysci']);
$vacancysec = checkboxSet($_POST['vacancysec']);
$vacancyother = mysql_escape_string($form->getString("vacancyother"));
$description = mysql_escape_string($form->getString("description"));

$query = "UPDATE shipprofiles SET shipname='$shipname', fleet='$fleet', co='$co', email='$email', postingspeed='$postingspeed', newmembers='$newmembers', vacancyxo=$vacancyxo, vacancyce=$vacancyce, vacancycmo=$vacancycmo, vacancycos=$vacancycos, vacancycso=$vacancycso, vacancyeng=$vacancyeng, vacancymed=$vacancymed, vacancysci=$vacancysci, vacancysec=$vacancysec, vacancyother='$vacancyother', description='$description' WHERE shipname='$oldshipname';";

$result = $db->query($query);

$bodyContent = "<p>The profile for the ship ".$shipname." has been updated successfully.</p><p><a href=\"admin.php\">Back to Admin Menu</a></p>";
$bodyContent .= $smarty->fetch('section-break.tpl');
$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');

?>