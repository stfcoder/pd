<?php
session_start();

if ($_SESSION["access"] == "granted") {
}
	
else
	header("Location: login.php");

require_once('includes/header.php');
require_once('includes/password.php');

$smarty = new Smarty();

$smarty->template_dir = 'Smarty/templates';
$smarty->compile_dir = 'Smarty/templates_c';
$smarty->cache_dir = 'Smarty/cache';
$smarty->config_dir = 'Smarty/configs';

$smarty->assign('pdir', $pdir);
$smarty->assign('apdir', $apdir);
$smarty->assign('title', 'Recommendation Confirmation');

$stop = false;

// Process form
if(isset($_GET['uid'])) {
  $form = new Input($_GET);
  $url = true;
}
else {
  $form = new Input($_POST);
  $url = false;

  $name =  mysql_real_escape_string($form->getString("name"));

  if (empty($name)) {
	$bodyContent = "<p>Error: You did not enter anything. <a href=\"admin.php\">Back to Find a Person</a></p>";
	$stop = true;
  }
}

if(!$stop) {
	//Dislike doing this, but we only need to connect to the database in this script.
	$link = mysql_connect("localhost", $webbuser, $webbpass);
	
	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("stfleet_webb");
	
	if (mysql_error()) echo mysql_error();

	if($url) {
		$query = "SELECT CONCAT(p.value, ' ', q.value) as fullname, u.uid, name, mail, created, access FROM `users` u LEFT JOIN `profile_values` p on p.uid = u.uid LEFT JOIN
`profile_values` q on q.uid = u.uid WHERE p.fid = 1 AND q.fid = 2 AND u.uid = ".$form->getInt('uid')." ORDER BY q.value, p.value;";
	}
	else {
		$query = "SELECT CONCAT(p.value, ' ', q.value) as fullname, u.uid, name, mail, created, access FROM `users` u LEFT JOIN `profile_values` p on p.uid = u.uid LEFT JOIN 
`profile_values` q on q.uid = u.uid WHERE p.fid = 1 AND q.fid = 2 AND (mail LIKE \"%$name%\" OR name LIKE \"%$name%\" OR CONCAT(p.value, ' ', q.value) LIKE \"%$name%\") ORDER BY 
q.value, p.value;";
	}

	$result = mysql_query($query);
	
	$bodyContent = "<p>".mysql_num_rows($result)." result(s) found.</p>";

	while($row = mysql_fetch_object($result)) {		
		$bodyContent .= "<p><strong>Fullname:</strong> $row->fullname<br /><strong>Username:</strong> <a href=\"/webb/user/$row->uid\">$row->name</a><br />
		<strong>Email: </strong> <a href=\"mailto:$row->mail\">$row->mail</a><br /><strong>Account Created: </strong>".date("j M Y", $row->created)."<br />
		<strong>Last Logged In: </strong>".date("j M Y", $row->access);

		$query2 = "SELECT hostname FROM watchdog WHERE uid = $row->uid GROUP BY hostname ORDER BY hostname";
		$result2 = mysql_query($query2);

		if(mysql_num_rows($result2)) {
			$bodyContent .= "<br /><strong>IP Addresses: </strong>";
		}

		while($row2 = mysql_fetch_object($result2)) {
			$bodyContent .= "<a href=\"find-ip.php?ip=$row2->hostname\">$row2->hostname</a>; ";
		}

		$query2 = "SELECT hostname, timestamp FROM watchdog WHERE type = 'user' AND message LIKE \"New user: <em>$row->name</em>%\"";
		$result2 = mysql_query($query2);

		while($row2 = mysql_fetch_object($result2)) {
			$bodyContent .= "<br />An application form was submitted for this account from <a href=\"find-ip.php?ip=$row2->hostname\">$row2->hostname</a> at ".date("j M Y 
H:i:s", $row2->timestamp);
		}

		$bodyContent .= "</p>";
	}

	$bodyContent .= "<a href=\"admin.php\">Back to Find a Person</a>";
	$bodyContent .= $smarty->fetch('section-break.tpl');
}

$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');
?>
