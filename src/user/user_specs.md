#/user/ Folder Specs

##This folder contains twelve scripts:

1. add_comment.php

	this handles the operations to store comments to articles. 

2. add_user.php

	this handles requests to create new user accounts for writers

3. alter_post.php

	this handles operations to edit posts by writers.

4. comments.php

	this looks up the comments associated with blog posts and displayes them at the end of the blog post

5. db_reset.php

	this requests the database server to reset all the tables in the database.

6. edit.php

	this handles request to edit blog posts. if the request is authenticated, the writer allowed to edit his post

7. login.php

	this handles login requests. Requests are authenticated with the users table before showing confirmation of logging in. 

8. logout.php

	this handles logout requests. All session data is deleted.

9. post.php

	this processes the article posted and updates the database

10. tag_search.php

	this handles the search queries tags and returns a list of articles with the specified tags

11. tags.php
	
	this looks up the tags associated with an article and displays it on the blog post



