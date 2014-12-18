<?php
// Session Start
session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Signup</title>
		<script src="/javascripts/add.js" type="text/javascript" charset="utf-8" async defer></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/signin.css">
	</head>
	<body>
	<?php require_once("nav.php"); ?>
		<div class="container">
			<form class="form-signin" role="form">
				<fieldset>
					<legend><h3 class="form-signin-heading"> Please Sign-Up</h3></legend>
					<input class="form-control" type="text" name="username" placeholder="username" id="uname">
					<br>
					<input class="form-control" type="password" name="password" id="pass" placeholder="password">
					<input class="form-control" type="password" name="password-check" id="repass" placeholder="Re-enter password">
					<br>
					<button onclick="add()" type="button" class="btn btn-primary btn-lg btn-block">Submit</button>
				</fieldset>
			</form>


			<p id="change"></p>
		</div>
	</body>
</html>