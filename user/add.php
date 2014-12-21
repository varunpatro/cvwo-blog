<?php

require_once("../config/init.php");

$_SESSION['logged_in'] = $_POST['username'];

header("Location: /config/message_passing.php?m=add_user");

?>