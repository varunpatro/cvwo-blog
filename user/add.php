<?php

require_once("../config/init.php");
require_once("../config/db_config.php");


add($_POST['username'], $_POST['password'], $_POST['name']);

$_SESSION['logged_in'] = $_POST['username'];

header("Location: /config/message_passing.php?m=add_user");

?>