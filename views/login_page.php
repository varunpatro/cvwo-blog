<?php
require_once("../config/init.php");
?>
<html>
	<body>
		<?php 
		require_once("../views/common/navbar.php"); ?>
		<p> <?php echo $_SESSION['message']; $_SESSION['message'] = "" ?>
		<p>
			<form class="form-signin" role="form" action="/user/login.php" method="POST">
				<fieldset>
					<legend><h3 class="form-signin-heading">Please sign in</h3></legend>
					<input class="form-control" id="username" type="username" name="username" placeholder="username" required autofocus>
					<input class="form-control" id="password" type="password" name="password" placeholder="password" required>
					<br>
					<button type="submit">Login</button>
				</fieldset>
			</form>
		</p>
	</body>
</html>