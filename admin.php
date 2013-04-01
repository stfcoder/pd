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
$smarty->assign('title', 'Administration');

$menuBar = "<ul class=\"links\">";

$bodyContent = "<h1><a name=\"findme\">Find a Person</a></h1>";
$menuBar .= "<li><a href=\"#findme\">Find a Person</a></li>";
$bodyContent .= $smarty->fetch('find-person.tpl');
$bodyContent .= $smarty->fetch('section-break.tpl');

$bodyContent .= "<h1><a name=\"findip\">Find People by IP</a></h1>";
$menuBar .= "<li><a href=\"#findme\">Find People by IP</a></li>";
$bodyContent .= $smarty->fetch('find-ip.tpl');
$bodyContent .= $smarty->fetch('section-break.tpl');

$bodyContent .= "<h1><a name=\"addrec\">Add a Recommendation</a></h1>";
$menuBar .= "<li><a href=\"#addrec\">Add a Recommendation</a></li>";
$bodyContent .= $smarty->fetch('add-recommendation.tpl');
$bodyContent .= $smarty->fetch('section-break.tpl');

$bodyContent .= "<h1><a name=\"delrec\">Delete a Recommendation</a></h1>";
$menuBar .= "<li><a href=\"#delrec\">Delete a Recommendation</a></li>";
$stmt = $db->query("SELECT * FROM recommendations ORDER BY name");
$recselector = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$recselector .= '<option value="'.$row['id'].'">'.$row['name']." by ".$row['recommender']." for ".$row['position']."</option>";
}
$smarty->assign('recselector', $recselector);

$bodyContent .= $smarty->fetch('delete-recommendation.tpl');
$bodyContent .= $smarty->fetch('section-break.tpl');

$bodyContent .= "<h1><a name=\"updateprof\">Update Ship Profiles</a></h1>";
$menuBar .= "<li><a href=\"#updateprof\">Update Ship Profiles</a></li>";
$stmt = $db->query("SELECT * FROM shipprofiles ORDER BY shipname");
$shipselector = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$shipselector .= "<option value=\"".$row['shipname']."\">".$row['shipname']."</option>";
}
$smarty->assign('shipselector', $shipselector);
$smarty->assign('value', "Update Profile");
$smarty->assign('action', "update-profile.php");

$bodyContent .= $smarty->fetch('profile-select.tpl');
$bodyContent .= $smarty->fetch('section-break.tpl');

$bodyContent .= "<h1><a name=\"addprof\">Add Ship Profile</a></h1>";
$menuBar .= "<li><a href=\"#addprof\">Add Ship Profile</a></li>";
$smarty->assign('action', "add-profile.php");
$smarty->assign('value', "Add Profile");
$bodyContent .= $smarty->fetch('update-profile.tpl');

$bodyContent .= "<h1><a name=\"delprof\">Delete Ship Profile</a></h1>";
$menuBar .= "<li><a href=\"#delprof\">Delete Ship Profile</a></h1>";
$stmt = $db->query("SELECT * FROM shipprofiles ORDER BY shipname");
$shipselector = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$shipselector .= "<option value=\"".$row['shipname']."\">".$row['shipname']."</option>";
}
$smarty->assign('shipselector', $shipselector);
$smarty->assign('value', "Delete");
$smarty->assign('action', "delete-profile.php");

$bodyContent .= $smarty->fetch('profile-select.tpl');
$bodyContent .= $smarty->fetch('section-break.tpl');

$menuBar .= "</ul>";

$smarty->assign('menuBar', $menuBar);
$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');

?>
