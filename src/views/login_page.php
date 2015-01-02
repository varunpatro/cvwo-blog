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
			require_once("../views/common/navbar.php");
			require_once("../views/common/alert.php");
			alert('danger');
			?>
			<p>
			<div class="container">
				<form class="form-horizontal" action="/user/login.php" method="POST">
					
					<fieldset>
						<legend><h3 class="form-signin-heading">Please sign in</h3></legend>
						<div class="form-group">
							<label class="control-label col-sm-2" for="username">Username</label>
							<div class="col-sm-5">
								<input class="form-control" id="username" type="username" name="username" placeholder="username" required autofocus>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2" for="password">Password</label>
							<div class="col-sm-5">
							<input class="form-control" id="password" type="password" name="password" placeholder="password" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Login</button>
							</div>
						</div>
					</fieldset>
				</div>
				</p>
			</div>
			
		</body>
	</html>