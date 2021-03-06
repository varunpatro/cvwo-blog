<?php

require_once("../config/db_config.php");

// check if the writer has logged in
if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to post an article. Please login here.";
	header("Location: /views/login_page.php");
} else {
// make connection with the db server to create a new article
	post($_POST['article_title'], $_POST['article_body'], $_POST['article_tags'], $_SESSION['username']);
	$_SESSION['last_article_title'] = $_POST['article_title'];
	$_SESSION['message'] = "{$_POST['article_title']}, posted!";
	header("Location: /views/portal.php");
}
	
?>
