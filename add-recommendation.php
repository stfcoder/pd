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
$smarty->assign('title', 'Recommendation Confirmation');

// Process form
$form = new Input($_POST);

$name =  mysql_real_escape_string($form->getString("name"));
$email = mysql_real_escape_string(cleanEmail($form->getString("email")));
$position =  mysql_real_escape_string($form->getString("position"));
$recommendername = mysql_real_escape_string($form->getString("recommendername"));
$recommenderemail = mysql_real_escape_string(cleanEmail($form->getString("recommenderemail")));
$recommenderposition = mysql_real_escape_string($form->getString("recommenderposition"));
$comments = mysql_real_escape_string($form->getString("comments"));

if (empty($name) || empty($email) || empty($position) || empty($recommendername) || empty($recommenderemail) || empty($recommenderposition) || empty($comments)) {
	$bodyContent = "<p>Error: You did not fill in the add recommendation form completely. Please remember that ALL fields are required. <a href=\"admin.php\">Back to Add Recommendation</a></p>";
}

else {
	$date = date('Y-m-d');
	$query = "INSERT INTO recommendations (name, email, date, position, recommender, recommenderposition, recommenderemail, comments) VALUES ('$name','$email','$date','$position','$recommendername','$recommenderposition','$recommenderemail','$comments');";

	$caught = false;	

	try {
	  $result = $db->query($query);
	} catch (PDOException $e) {
		$bodyContent = "<p>An error has occurred: $result ; Please forward this to the IDept for evaluation and correction.</p>";
		$caught = true;
	}

	if(!$caught) {
		$bodyContent = "<p>The recommendation for $name by $recommendername has been added successfully. <a href=\"admin.php\">Back to Admin Page</a></p>";
	}

	$bodyContent .= $smarty->fetch('section-break.tpl');
}

$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');
?>
