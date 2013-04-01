<?php

require_once('includes/header.php');

$stmt = $db->query("SELECT * FROM recommendations ORDER BY position, date DESC");

$smarty = new Smarty();

$smarty->template_dir = 'Smarty/templates';
$smarty->compile_dir = 'Smarty/templates_c';
$smarty->cache_dir = 'Smarty/cache';
$smarty->config_dir = 'Smarty/configs';

$smarty->assign('pdir', $pdir);
$smarty->assign('apdir', $apdir);
$smarty->assign('2apdir', $sapdir);
$smarty->assign('title', 'Recommendations');

$bodyContent = "";

while ($record = $stmt->fetch(PDO::FETCH_OBJ)) {
	$set[$record->position][] = $record;
}

$menuBar = "<ul class=\"links\">";

foreach ($set as $position => $records) {
	$bodyContent .= "<h1><a name=\"{$position}\">{$position} Recommendations</a></h1>\n";
	$menuBar .= "<li><a href=\"#{$position}\">{$position} Recommendations</a></li>";
	foreach ($records as $record) {
		$smarty->assign('Recommendation', array('name' => $record->name, 
							'email' => $record->email, 
							'date' => date('d F Y', strtotime($record->date)), 
							'recommender' => $record->recommender, 
							'recommenderemail' => $record->recommenderemail, 
							'recommenderposition' => $record->recommenderposition, 
							'comments' => $record->comments));
		$bodyContent .= $smarty->fetch("recommendation.tpl");
	}
	$bodyContent .= $smarty->fetch("section-break.tpl");
}

$menuBar .= "</ul>";

$smarty->assign("menuBar", $menuBar);

$smarty->assign("bodyContent", $bodyContent);
$smarty->display('master.tpl');

?>
