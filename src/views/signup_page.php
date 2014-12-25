<?php
require_once("../config/init.php");
?>
<html>
	<body>
		<?php 
		require_once("../views/common/navbar.php"); ?>
		<p> <?php echo $_SESSION['message']; $_SESSION['message'] = "" ?>
		<p>
			<form class="form-signin" role="form" action="/user/add_user.php" method="POST">
				<fieldset>
					<legend><h3 class="form-signin-heading">Please sign in</h3></legend>
					<input class="form-control" id="name" type="text" name="name" placeholder="name" value="<?php echo $_SESSION['temp_name'];$_SESSION['temp_name'] = ""; ?>" required autofocus>
					<input class="form-control" id="username" type="text" name="username" placeholder="username" value="<?php echo $_SESSION['temp_username'];$_SESSION['temp_username'] = ""; ?>" required>
					<input class="form-control" id="password" type="password" name="password" placeholder="password" required>
					<input class="form-control" id="re-password" type="password" name="re-password" placeholder="password" required>
					<br>
					<button type="submit">Login</button>
				</fieldset>
			</form>
		</p>
	</body>
</html>