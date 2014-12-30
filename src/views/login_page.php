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
						<div class="form-group">
							
							<label class="control-label col-sm-2" for="username">Username</label>
							<input class="col-sm-10 form-control" id="username" type="username" name="username" placeholder="username" required autofocus>
							
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Sign in</button>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<label class="control-label">Password</label>
								<input class="form-control" id="password" type="password" name="password" placeholder="password" required>
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<button type="submit" class="btn btn-default">Login</button>
							</div>
						</div>
					</fieldset>
				</div>
				</p>
			</div>
			
		</body>
	</html>