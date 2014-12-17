<?php

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$data = array(
	"username" => $uname,
	"password" => $pass
	);
echo json_encode($data);

// $_SESSION["login"] = true;
// $_SESSION["login"] = false;


?>