<?php

require_once("config/init.php");
if (isset($_SESSION['message'])) {
	echo $_SESSION['message'];
} else {
	echo "no message to show";
}
?>