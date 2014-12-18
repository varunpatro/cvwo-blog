 <?php
// // Start the Session
session_start();

$_SESSION['accessTime'] = date("M/d/Y, g:i:sa");
echo "This is page 1<br />";

echo "You accessed the application at: " . $_SESSION['accessTime'];

echo "<a href=\"page2.php\">continue to next page</a>";

echo $_SESSION['logged_in'];

?>