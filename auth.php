<?php
session_start();

require_once("conn.php");

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$data = array(
	"username" => $uname,
	"password" => $pass
	);


echo json_encode($data);

$result = $conn->query("SELECT * FROM users WHERE username = \"$uname\";");

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	if ($row["password"] == $pass) {
		echo "correct password";
		$_SESSION["logged_in"] = $uname;
		echo $_SESSION["logged_in"];
		echo $_SESSION['accessTime'];
	} else {
		echo "wrong password!";
	}
} else {
	echo "username doesnt exist!";
}





?>