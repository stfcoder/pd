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

// Process form
if(isset($_GET['ip'])) {
	$form = new Input($_GET);
}
else {
	$form = new Input($_POST);
}

//Dislike doing this, but we only need to connect to the database in this script.
$link = mysql_connect("localhost", $webbuser, $webbpass);
	
if (!$link) {
    	die('Could not connect: ' . mysql_error());
}

$ip =  mysql_real_escape_string($form->getString("ip"));

if (empty($ip)) {
	$bodyContent = "<p>Error: You did not enter anything. <a href=\"admin.php\">Back to Find a Person</a></p>";
}

else {
	
	mysql_select_db("stfleet_webb");
	
	if (mysql_error()) echo mysql_error();

	$query = "SELECT hostname, CONCAT(p.value, ' ', q.value) as fullname, u.uid, name, mail, created, access, min(timestamp) as min, max(timestamp) as max FROM `watchdog` w LEFT JOIN 
`users` u ON w.uid = u.uid LEFT JOIN `profile_values` p on p.uid = u.uid LEFT JOIN `profile_values` q on q.uid = u.uid WHERE p.fid = 1 AND q.fid = 2 AND hostname LIKE \"%$ip%\" AND w.uid > 
0 GROUP BY w.uid ORDER BY hostname, q.value, p.value";

	$result = mysql_query($query);
	
	$bodyContent = "<p>".mysql_num_rows($result)." result(s) found.</p>";

	while($row = mysql_fetch_object($result)) {		
		$bodyContent .= "<p><strong>IP Address:</strong> $row->hostname<br />
		<strong>Fullname:</strong> <a href=\"find-person.php?uid=$row->uid\">$row->fullname</a><br /><strong>Username:</strong> <a 
href=\"/webb/user/$row->uid\">$row->name</a><br />
		<strong>Email:</strong> <a href=\"mailto:$row->mail\">$row->mail</a><br /><strong>Account Created:</strong>".date("j M Y", $row->created)."<br />
		<strong>Last Logged In:</strong> ".date("j M Y", $row->access)."<br />
		<strong>IP Address First Used:</strong> ".date("j M Y H:i:s", $row->min)."<br />
		<strong>IP Address Last Used:</strong> ".date("j M Y H:i:s", $row->max)."<br /></p>";
	}

	$query = "SELECT hostname, timestamp, message FROM watchdog WHERE type = 'user' AND message LIKE \"New user:%\" AND hostname LIKE \"%$ip%\"";
        $result = mysql_query($query);

	if(mysql_num_rows($result)) {
		$bodyContent .= "<p>The following application forms were submitted from this IP address:</p>";
	}

        while($row = mysql_fetch_object($result)) {

		$name = explode("</em>", substr($row->message, 14));

		$query2 = "SELECT CONCAT(p.value, ' ', q.value) as fullname, u.uid, name, mail, created, access FROM `users` u LEFT JOIN `profile_values` p on p.uid = u.uid LEFT JOIN
`profile_values` q on q.uid = u.uid WHERE p.fid = 1 AND q.fid = 2 AND name LIKE \"%".$name[0]."%\" ORDER BY q.value, p.value;";
		$result2 = mysql_query($query2);
		

		while($row2 = mysql_fetch_object($result2)) {
         	       $bodyContent .= "<p><strong>IP Address:</strong> $row->hostname<br />
                	<strong>Fullname:</strong> <a href=\"find-person.php?uid=$row2->uid\">$row2->fullname</a><br /><strong>Username:</strong> <a 
href=\"/webb/user/$row2->uid\">$row2->name</a><br />
	                <strong>Email:</strong> <a href=\"mailto:$row2->mail\">$row2->mail</a><br /><strong>Account Created:</strong>".date("j M Y", $row2->created)."<br />
        	        <strong>Last Logged In:</strong> ".date("j M Y", $row2->access)."</p>";
	        }
	}


	$bodyContent .= "<a href=\"admin.php\">Back to Find a Person</a>";
	$bodyContent .= $smarty->fetch('section-break.tpl');
}

$smarty->assign('bodyContent', $bodyContent);
$smarty->display('master.tpl');
?>
