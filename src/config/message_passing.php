<?php

require_once("init.php");

$message_to_process = $_GET["m"];
$message_to_display = "";


switch ($message_to_process) {
	case "logout":
		$message_to_display = "You have successfully logged out.";
		break;
	case "login":
		$message_to_display = $_SESSION['name'] . ", you have successfully logged in.";
		break;
	case "add_user":
		$message_to_display = $_SESSION['name'] . ", you have successfully created an account.";
		break;
	case "post":
		$message_to_display = "Successfully posted article: " . $_SESSION['last_article_title'];
		break;
	case "alter":
		$message_to_display = "Successfully edited article: " . $_SESSION['last_article_title'];
		break;
	case "comment":
		$message_to_display = "Comment Posted.";
		break;
	case "db_reset":
		$message_to_display = "Database Reset.";
		break;
	default:
		$message_to_display = "";
}

$_SESSION['message'] = $message_to_display;


header("Location: /");

?>