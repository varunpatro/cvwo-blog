<?php

require_once("../config/init.php");


$_SESSION['last_article_title'] = $_POST['title'];

header("Location: /config/message_passing.php?m=post");


?>
