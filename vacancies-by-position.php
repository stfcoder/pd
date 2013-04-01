<?php

require_once('includes/header.php');

$query = $db->prepare("SELECT * FROM shipprofiles ORDER BY shipname ASC;");
$result =& $db->execute($query);

$smarty = new Smarty();

$smarty->template_dir = 'Smarty/templates';
$smarty->compile_dir = 'Smarty/templates_c';
$smarty->cache_dir = 'Smarty/cache';
$smarty->config_dir = 'Smarty/configs';

$smarty->assign('pdir', $pdir);
$smarty->assign('apdir', $apdir);
$smarty->assign('title', 'Vacancies By Position');

$XO = array();
$CE = array();
$CMO = array();
$COS = array();
$CSO = array();
$Eng = array();
$Med = array();
$Sci = array();
$Sec = array();
$Other = array();

while ($row = $result->fetchRow()) {
	if ($row['vacancyxo'] == 1) {
		array_push($XO, $row);
	}
	if ($row['vacancyce'] == 1) {
		array_push($CE, $row);
	}
	if ($row['vacancycmo'] == 1) {
		array_push($CMO, $row);
	}
	if ($row['vacancycos'] == 1) {
		array_push($COS, $row);
	}
	if ($row['vacancycso'] == 1) {
		array_push($CSO, $row);
	}
	if ($row['vacancyeng'] == 1) {
		array_push($Eng, $row);
	}
	if ($row['vacancymed'] == 1) {
		array_push($Med, $row);
	}
	if ($row['vacancysci'] == 1) {
		array_push($Sci, $row);
	}
	if ($row['vacancysec'] == 1) {
		array_push($Sec, $row);
	}
	if (! empty($row['vacancyother'])) {
		array_push($Other, $row);
	}
}

$menuBar = "<ul class=\"links\">";

if (! empty($XO)) {
	$bodyContent .= "<h1><a name=\"ExecutiveOfficer\">Executive Officer</a></h1>";
	$menuBar .= "<li><a href=\"#ExecutiveOfficer\">Executive Officer</a></li>";
	$bodyContent .= "<ul>";
	foreach ($XO as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet'].") </li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

$menuBar .= "</ul>";
$menuBar .= "<ul class=\"links\">";

if (! empty($CE)) {
	$bodyContent .= "<h1><a name=\"ChiefEngineer\">Chief Engineer</a></h1>";
	$menuBar .= "<li><a href=\"#ChiefEngineer\">Chief Engineer</a></li>";
	$bodyContent .= "<ul>";
	foreach ($CE as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet'].")</li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

if (! empty($CMO)) {
	$bodyContent .= "<h1><a name=\"ChiefMedicalOfficer\">Chief Medical Officer</a></h1>";
	$menuBar .= "<li><a href=\"#ChiefMedicalOfficer\">Chief Medical Officer</a></li>";
	$bodyContent .= "<ul>";
	foreach ($CMO as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet'].")</li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

if (! empty($COS)) {
	$bodyContent .= "<h1><a name=\"ChiefOfSecurity\">Chief of Security</a></h1>";
	$menuBar .= "<li><a href=\"#ChiefOfSecurity\">Chief of Security</a></li>";
	$bodyContent .= "<ul>";
	foreach ($COS as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet'].")</li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

if (! empty($CSO)) {
	$bodyContent .= "<h1><a name=\"ChiefScienceOfficer\">Chief Science Officer</a></h1>";
	$menuBar .= "<li><a href=\"#ChiefScienceOfficer\">Chief Science Officer</a></li>";
	$bodyContent .= "<ul>";
	foreach ($CSO as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet'].")</li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

$menuBar .= "</ul>";
$menuBar .= "<ul class=\"links\">";

if (! empty($Eng)) {
	$bodyContent .= "<h1><a name=\"Engineer\">Engineer</a></h1>";
	$menuBar .= "<li><a href=\"#Engineer\">Engineer</a></li>";
	$bodyContent .= "<ul>";
	foreach ($Eng as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet'].")</li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

if (! empty($Med)) {
	$bodyContent .= "<h1><a name=\"Doctor\">Doctor</a></h1>";
	$menuBar .= "<li><a href=\"#Doctor\">Doctor</a></li>";
	$bodyContent .= "<ul>";
	foreach ($Med as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet'].")</li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

if (! empty($Sci)) {
	$bodyContent .= "<h1><a name=\"Scientist\">Scientist</a></h1>";
	$menuBar .= "<li><a href=\"#Scientist\">Scientist</a></li>";
	$bodyContent .= "<ul>";
	foreach ($Sci as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet'].")</li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

if (! empty($Sec)) {
	$bodyContent .= "<h1><a name=\"SecurityOfficer\">Security Officer</a></h1>";
	$menuBar .= "<li><a href=\"#SecurityOfficer\">Security Officer</a></li>";
	$bodyContent .= "<ul>";
	foreach ($Sec as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet'].")</li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

$menuBar .= "</ul>";
$menuBar .= "<ul class=\"links\">";

if (! empty($Other)) {
	$bodyContent .= "<h1><a name=\"OtherVacancies\">Other Vacancies</a></h1>";
	$menuBar .= "<li><a href=\"#OtherVacancies\">Other Vacancies</a></li>";
	$bodyContent .= "<ul>";
	foreach ($Other as $key => $row) {
		$bodyContent .= "<li>".$row['shipname']." (Fleet ".$row['fleet']."): ".$row['vacancyother']."</li>";
	}
	$bodyContent .= "</ul>";
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

$menuBar .= "</ul>";
$smarty->assign('bodyContent', $bodyContent);
$smarty->assign('menuBar', $menuBar);
$smarty->display('master.tpl');

?>
