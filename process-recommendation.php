<?php
require_once('includes/header.php');

$smarty = new Smarty();

$smarty->template_dir = 'Smarty/templates';
$smarty->compile_dir = 'Smarty/templates_c';
$smarty->cache_dir = 'Smarty/cache';
$smarty->config_dir = 'Smarty/configs';

$smarty->assign('pdir', $pdir);
$smarty->assign('apdir', $apdir);
$smarty->assign('title', 'Recommendation Confirmation');

// Process form
$form = new Input($_POST);

$name = mysql_escape_string($form->getString("name"));
$email = mysql_escape_string(cleanEmail($form->getString("email")));
$position = mysql_escape_string($form->getString("position"));
$recommendername = mysql_escape_string($form->getString("recommendername"));
$recommenderemail = mysql_escape_string(cleanEmail($form->getString("recommenderemail")));
$recommenderposition = mysql_escape_string($form->getString("recommenderposition"));
$comments = mysql_escape_string($form->getString("comments"));

if (empty($name) || empty($email) || empty($position) || empty($recommendername) || empty($recommenderemail) || empty($recommenderposition) || empty($comments)) {
	$bodyContent = "<p>Error: You did not fill in the add recommendation form completely. Please remember that ALL fields are required. <a href=\"add-recommendation.php\">Back to Add Recommendation</a></p>";
}

else {
	$date = date('Y-m-d');
	$query = "INSERT INTO recommendations VALUES ('$name','$email','$date','$position','$recommendername','$recommenderposition','$recommenderemail','$comments');";
	$result = $db->query($query);
	$bodyContent = "<p>The recommendation for $name by $recommendername has been added successfully.</p>";
	$bodyContent .= $smarty->fetch('section-break.tpl');
}

$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');
?>