<?php

$header = "content-type: application/json";
header($header);

$uname = $_GET['username'];
$pass = $_GET['password'];

$data = array(
	"username" => $uname,
	"password" => $pass
	);
echo json_encode($data);

?>