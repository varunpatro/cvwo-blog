<?php
require_once("../config/init.php");
?>
<html>
	<head>
		<title>Varun's Blog</title>
	</head>
	<body>
		<div class="container">
			<?php
			require_once("../views/common/navbar.php"); ?>
			<div class="alert-error container"><p> <?php echo $_SESSION['message']; $_SESSION['message'] = "" ?></p></div>
			<p>
			<div class="container">
				<form class="form-horizontal" action="/user/login.php" method="POST">
					
					<fieldset>
						<legend><h3 class="form-signin-heading">Please sign in</h3></legend>
						<div class="control-group">
							<div class="controls controls-row">
								<label class="control-label" for="username">Username</label>
								<input class="input-block-level" id="username" type="username" name="username" placeholder="username" required autofocus>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<label class="control-label">Password</label>
								<input class="input-small" id="password" type="password" name="password" placeholder="password" required>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-default">Login</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			</p>
		</div>
	</body>
</html>