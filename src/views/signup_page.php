<?php
require_once("../config/init.php");
?>
<html>
	<body>
		<?php 
		require_once("../views/common/navbar.php");
		require_once("../views/common/alert.php");
		alert('danger');
		?>
		<div class="container">
				<form class="form-horizontal" action="/user/add_user.php" method="POST">
					
					<fieldset>
						<legend><h3 class="form-signin-heading">Please sign up</h3></legend>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Name</label>
							<div class="col-sm-5">
								<input class="form-control" id="name" type="text" name="name" placeholder="Name" required autofocus>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="username">Username</label>
							<div class="col-sm-5">
								<input class="form-control" id="username" type="text" name="username" placeholder="username" required autofocus>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="password">Password</label>
							<div class="col-sm-5">
							<input class="form-control" id="password" type="password" name="password" placeholder="password" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="re-password">Password</label>
							<div class="col-sm-5">
							<input class="form-control" id="re-password" type="password" name="re-password" placeholder="password" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Sign Up</button>
							</div>
						</div>
					</fieldset>
				</div>
	</body>
</html>