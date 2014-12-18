<?php
require_once("conn.php");
echo "Hi there!";



$uname = $_POST['uname'];
$pass = $_POST['pass'];

echo $uname;
echo $pass;

$sql_query = "INSERT INTO users (username, password) VALUES (\"$uname\", \"$pass\");";


echo $sql_query;

$result = $conn->query($sql_query);

if ($result) {
	echo "User's Details Added";
} else {
	echo "Error Adding User's Details: " . $conn->error;
}

?>