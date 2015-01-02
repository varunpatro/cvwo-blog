<?php
echo '<link rel="stylesheet" type="text/css" href="/static/bootstrap.min.css">
';
echo '<div class="container"><div class="navbar">
		<div class="navbar-inner">
				<ul class="nav nav-tabs">
								
										
												<li><a href="/">Home</a></li>';
												if (!isset($_SESSION['logged_in'])) {
														echo '
															<li class="pull-right"><a href="/views/login_page.php">Login</a></li>
															<li class="pull-right"><a>Not logged in</a></li>';
													} else {
														if ($_SESSION['username'] === "admin") {
															echo '<li><a href="/user/db_reset.php">Reset Database</a></li>
																<li><a href="/views/signup_page.php">Add User</a></li>';
														}
														echo '<li><a href="/views/post_article.php">Post Article</a></li>
															<li class="pull-right"><a href="/user/logout.php">Log Out</a></li>
															<li class="pull-right"><a href="/views/portal.php">Writer\'s Portal</a></li>
															<li class="pull-right"><a>Welcome ' . $_SESSION['username'] . '!</a></li>';
													}
											echo '</ul>
									</div></div></div>
			</div>';
	?>