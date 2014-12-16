<?php

$uname = $_POST['username'];
$pass = $_POST['password'];

$data = array(
	"username" => $uname,
	"password" => $pass
	);
echo json_encode($data);

// $_SESSION["login"] = true;
// $_SESSION["login"] = false;


?>