<?php
require_once("../config/db_config.php");

if ($_SESSION['username'] != "admin") {
	$_SESSION['message'] = "Invalid Request.";
	$_SESSION['alert_status'] = 'danger';
	header("Location: /");
} else {
	require_once("logout.php");
	db_reset();
	header("Location: /config/message_passing.php?m=db_reset");
}



?>