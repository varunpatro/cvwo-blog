<?php

require_once("../config/db_config.php");


if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to edit your article. Please login here.";
	header("Location: /views/login_page.php");
} else {
	alter($_POST['article_title'], $_POST['article_body']);
	$_SESSION['last_article_title'] = $_POST['article_title'];
	header("Location: /config/message_passing.php?m=alter");
}
	
?>
