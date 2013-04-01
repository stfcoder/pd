<?php

require_once('includes/header.php');

function debug($var) { print '<pre>' . print_r($var, 1) . "</pre>\n";}

$stmt = $db->query("SELECT * FROM shipprofiles ORDER BY fleet, shipname");

$set = array();

$smarty = new Smarty();

$smarty->template_dir = 'Smarty/templates';
$smarty->compile_dir = 'Smarty/templates_c';
$smarty->cache_dir = 'Smarty/cache';
$smarty->config_dir = 'Smarty/configs';

$smarty->assign('pdir', $pdir);
$smarty->assign('apdir', $apdir);
$smarty->assign('2apdir', $sapdir);
$smarty->assign('title', 'Ship Profiles');

while ($record = $stmt->fetch(PDO::FETCH_OBJ)) {
	$set[$record->fleet][] = $record;
}

$bodyContent = "";

$menuBar = "<ul class=\"links\">";

foreach ($set as $fleet => $records) {
	$bodyContent .= "<h1><a name=\"Fleet{$fleet}\">Fleet {$fleet}</a></h1>\n";
	$menuBar .= "<li><a href=\"#Fleet{$fleet}\">Fleet {$fleet}</a></li>";
	foreach ($records as $record) {
		$smarty->assign('Profile', array(	'shipname' => $record->shipname, 
											'co' => $record->co, 
											'email' => $record->email, 
											'postingspeed' => $record->postingspeed, 
											'newmembers' => $record->newmembers, 
											'vacancyxo' => $record->vacancyxo, 
											'vacancyce' => $record->vacancyce, 
											'vacancycmo' => $record->vacancycmo, 
											'vacancycos' => $record->vacancycos, 
											'vacancycso' => $record->vacancycso, 
											'vacancyeng' => $record->vacancyeng, 
											'vacancymed' => $record->vacancymed, 
											'vacancysci' => $record->vacancysci, 
											'vacancysec' => $record->vacancysec, 
											'vacancyother' => $record->vacancyother,
											'description' => $record->description));
		$bodyContent .= $smarty->fetch("ship-profiles.tpl");
	}
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

$menuBar .= "<li><a href=\"vacancies-by-position.php\">List Vacancies By Position</a></li>";
$menuBar .= "</ul>";
$smarty->assign('bodyContent', $bodyContent);
$smarty->assign('menuBar', $menuBar);
$smarty->display('master.tpl');

?>
