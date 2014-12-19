<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Logout</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/signin.css">
	</head>
	<body>
		<div class="container">
			<h1 id="logout"><br><br><?php
			if (isset($_SESSION["logged_in"])) {
				echo $_SESSION["logged_in"] . ", you have successfully logged out!";
				session_unset("logged_in");
			} else {
				echo "No one has logged in.";
			}
			require_once("nav.php");
			?> </h4>
			<!-- </p> -->
		</div>
	</body>
</html>