<?php

require_once("../config/db_config.php");
if (isset($_SESSION['message']) {
	echo $_SESSION['message'];
} else {
	echo "no message to show";
}
?>
