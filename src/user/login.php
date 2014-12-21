<?php

require_once("../config/db_config.php");

$login_results = login_query($_POST['username']);

if ($login_results->num_rows > 0) {
	$row = $login_results->fetch_assoc();
	if ($row["password"] === $_POST['password']) {
		$_SESSION["logged_in"] = true;
		$_SESSION["username"] = $row["username"];
		$_SESSION["name"] = $row["name"];
		header("Location: /config/message_passing.php?m=login");
	} else {
		$_SESSION["message"] = "Incorrect password. Try again.";
		header("Location: /views/login_page.php");

	}
} else {
	$_SESSION["message"] = "Username invalid. Try again.";
	header("Location: /views/login_page.php");
}

?>