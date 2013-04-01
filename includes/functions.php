<?php

function cleanEmail($email) {
	$cleaner = preg_replace("([\@])"," at ", $email);
	$cleanest = preg_replace("([\.])"," dot ", $cleaner);
	return $cleanest;
}

function checkboxSet ($checkbox) {
	if (isset($checkbox))
		return 1;
	else
		return 0;
}
?>