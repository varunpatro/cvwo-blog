<?php

$uname = $_GET["username"];
$name = $_GET["name"];

$arr = array(
	"username" => $uname,
	"name" => $name);

echo json_encode($arr);

?>