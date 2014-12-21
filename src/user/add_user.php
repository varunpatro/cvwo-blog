<?php

require_once("../config/db_config.php");


add($_POST['username'], $_POST['password'], $_POST['name']);

$_SESSION["logged_in"] = true;
$_SESSION["username"] = $_POST["username"];
$_SESSION["name"] = $_POST["name"];

header("Location: /config/message_passing.php?m=add_user");

?>