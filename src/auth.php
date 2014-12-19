<?php
session_start();

require_once("conn.php");

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$result = $conn->query("SELECT * FROM users WHERE username = \"$uname\";");

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	if ($row["password"] == $pass) {
		$_SESSION["logged_in"] = $uname;
		echo "correct";
	} else {
		echo "incorrect";
	}
} else {
	echo "not_found";
}



?>