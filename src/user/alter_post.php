<?php

require_once("../config/db_config.php");

// check whether writer had logged in
if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to edit your article. Please login here.";
	header("Location: /views/login_page.php");
} else {
// make request to the db server to update the article
	edit_article($_POST['article_title'], $_POST['article_body'], $_SESSION['edit_id']);
	$_SESSION['last_article_title'] = $_POST['article_title'];
	$_SESSION['message'] = "{$_POST['article_title']}, edited!";
	header("Location: /views/portal.php");
}
	
?>
