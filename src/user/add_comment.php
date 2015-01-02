<?php

require_once("../config/db_config.php");


if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to comment on an article. Please login here.";
	header("Location: /views/login_page.php");
} else {
	add_comment($_SESSION['blog_id'], $_POST['comment_body'], $_SESSION['username']);
	header("Location: /config/message_passing.php?m=comment");
}
	
?>
