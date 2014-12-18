<?php
// Start the Session
session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Varun's Blog for all Authors</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/signin.css">
		<!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
		<script src="/javascripts/auth.js" type="text/javascript" charset="utf-8" async defer></script>
	</head>
	<body>
		<div class="container">
			<form class="form-signin" role="form">
				<fieldset>
					<legend><h3 class="form-signin-heading">Please sign in</h3></legend>
					<input class="form-control" id="username" type="username" name="username" placeholder="username" required autofocus>
					<input class="form-control" id="password" type="password" name="password" placeholder="password" required>
					<br>
					<button onclick="authenticate()" type="button" class="btn btn-lg btn-primary btn-block">Login</button>
				</fieldset>
			</form>
			<!-- <button onclick="reset()" type="button" class="btn btn-primary btn-lg">RESET SQL TABLE</button> -->
			
			<p id="insert">
			<h4> <?php
			require_once("nav.php");
				if (!isset($_SESSION['logged_in'])) {
					echo "Not logged in";
				} else {
					echo "Currently Logged in as: " . $_SESSION['logged_in'];
				}
			?> </h4>
			</p>
		</div>
	</body>
</html>