<?php

require_once("../config/db_config.php");

// check whether writer had logged in
if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to comment on an article. Please login here.";
	header("Location: /views/login_page.php");
} else {
// make request to the db server to add a comment
	add_comment($_POST['comment_body'], $_SESSION['username'], $_SESSION['blog_id']);
	unset($_SESSION['blog_id']);
	$_SESSION['message'] = "Comment Posted!";
	header("Location: {$_SERVER['HTTP_REFERER']}");
	
}
	
?>
