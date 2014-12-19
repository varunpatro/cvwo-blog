<?php
// Start the Session
session_start();
if (!isset($_SESSION['appStarted'])) {
	$_SESSION['appStarted'] = true;
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Varun's Blog for all Authors</title>
	</head>
	<body>
		<div class="container">
			<div class="intro">
				<h1> </h1><br>
				
				<h1>Hey there!</h1>
				
				<br>
				<h3>Welcome to Varun's Blog! Here you can view articles by various authors as well as sign up to write your own articles for the world. Happy reading!</h3><br>
				<h4> <?php
				require_once("nav.php");
				?> </h4>
			</div>
		</div>
	</body>
</html>