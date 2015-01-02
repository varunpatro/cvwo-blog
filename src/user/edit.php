<?php

require_once("../config/db_config.php");


if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to delete an article. Please login here.";
	header("Location: /views/portal.php");
} else if (!can_alter($_GET['id'])) {
	$_SESSION['message'] = "You can't edit someone's elses article.";
	header("Location: /views/portal.php");
} else {
	$_SESSION['edit_id'] = $_GET['id'];
	header("Location: /views/edit_article.php");
}
	
?>
