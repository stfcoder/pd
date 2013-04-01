<?php

require_once('includes/header.php');
require_once('includes/password.php');

$form = new Input($_POST);

$password = $form->getString("password","nopass");

if ($password == $pdpass) {
	session_start();
	$_SESSION["access"] = "granted";
	header("Location: admin.php");
}
else
	header("Location: index.php");

?>
