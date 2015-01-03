<?php
require_once("../config/init.php");
?>
<html>
	<head>
		<title>Varun's Blog</title>
		<script type="text/javascript" src="../static/search.js"></script>
	</head>
	<body>
		<div class="container">
			<?php
			require_once("../views/common/navbar.php");
			require_once("../views/common/alert.php");
			alert('success');
			?>
			<p>
			<div class="container">
				<form class="form-horizontal">
					
					<fieldset>
						<legend><h3 class="form-signin-heading">Search Articles</h3></legend>
						<div class="form-group">
							<label class="control-label col-sm-2" for="tag">Tag</label>
							<div class="col-sm-5">
								<input class="form-control" id="tag" type="text" name="tag" placeholder="tag" autofocus>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="button" onclick="search()" class="btn btn-default">Search</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			</p>
		</div>
		<div class="container" id="search_results">
		</div>
	</body>
</html>