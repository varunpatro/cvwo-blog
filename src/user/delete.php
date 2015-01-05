<?php

require_once("../config/db_config.php");

// check whether the writer is logged in
if (!isset($_SESSION['logged_in'])) {
	$_SESSION['message'] = "You need to login to delete an article. Please login here.";
	header("Location: /views/portal.php");

} else if (!can_alter($_GET['id'])) {
// check if the writer has permission to edit/delete someone's else's article
	$_SESSION['message'] = "You can't delete someone's elses article.";
	header("Location: /views/portal.php");

} else {
// delete the article requested
	$_SESSION['message'] = $_GET['title'] . ", has been deleted.";
	delete_article($_GET['id']);
	header("Location: /views/portal.php");
}
	
?>
