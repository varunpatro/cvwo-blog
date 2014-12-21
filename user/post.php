<?php

require_once("../config/db_config.php");


if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to post an article. Please login here.";
	header("Location: /views/login_page.php");
} else {
	post($_POST['article_title'], $_POST['article_body'], $_SESSION['username']);

	$_SESSION['last_article_title'] = $_POST['article_title'];
	header("Location: /config/message_passing.php?m=post");
}

$_SESSION['last_article_title'] = $_POST['article_title'];
	header("Location: /config/message_passing.php?m=post");
	
?>
