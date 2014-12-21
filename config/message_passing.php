<?php

require_once("init.php");

$message_to_process = $_GET["m"];
$message_to_display = "";


switch ($message_to_process) {
	case "logout":
		$message_to_display = "You have successfully logged out.";
		break;
	case "login":
		$message_to_display = $_SESSION['name'] . ", you have successfully logged in."
	default:
		$message_to_display = "";
}

$_SESSION['message'] = $message_to_display;

header("Location: /")

?>