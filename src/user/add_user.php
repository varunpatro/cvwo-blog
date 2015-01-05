<?php

require_once("../config/db_config.php");

// check whether the admin is logged in 
if ($_SESSION['username'] !== "admin") {
	$_SESSION['message'] = "Invalid Request.";
	$_SESSION['alert_status'] = 'danger';
	header("Location: /");
} else {

// request the db server to add new user's details to the database
	$uname_query = login_query($_POST['username']);

	if ($uname_query->num_rows > 0) {
		$_SESSION["message"] = "The username \"{$_POST['username']}\" has 
									already been taken. Please enter another username.";
		$_SESSION['temp_name'] = $_POST['name'];
		header("Location: /views/signup_page.php");
	} else if ($_POST['password'] !== $_POST['re-password']) {
		$_SESSION["message"] = "Passwords do not match. Please try again.";
		$_SESSION['temp_name'] = $_POST['name'];
		$_SESSION['temp_username'] = $_POST['username'];
		header("Location: /views/signup_page.php");
	} else {
		add($_POST['username'], $_POST['password'], $_POST['name']);
		header("Location: /config/message_passing.php?m=add_user&newuser_username=" . $_POST['username']);
	}
}





?>