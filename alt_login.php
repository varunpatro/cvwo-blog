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
					<br>
					<button onclick="reset()" type="button" class="btn btn-primary btn-lg">RESET SQL TABLE</button>
				</fieldset>
			</form>
			<!-- <button onclick="reset()" type="button" class="btn btn-primary btn-lg">RESET SQL TABLE</button> -->
		</div>
		<p id="insert">
			<?php echo "currently logged in as: " . $_SESSION['logged_in']; ?>
		</p>
	</body>
</html>