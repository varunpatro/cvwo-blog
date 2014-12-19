Varun Patro
A0131729E

#Basic use cases

1. Everyone can read all articles posted on the blog.
2. To post articles, writers have to register accounts. 
3. Writer's have the ability to delete/modify their posts.


#Execution Plan

1. Convert all pages to modular format (use a view folder) and improve structure of directory.
2. Create option to view all articles on the blog.
3. Improve UI
4. Add features for page statistics: article view count, article rating etc. (if time permits)
5. Add features for readers: reading history, adding tags etc. (if time permits)


#Problems facing

1. Restrict access to specific files. 

	In my source directory, I have many php files like auth.php, conn.php that I use to send form data to. How do I ensure that the only way to access these files like auth.php and conn.php is by sending form data.

2. How to efficiently create a template for rendering web pages and also abstracting database queries to a single page request. 