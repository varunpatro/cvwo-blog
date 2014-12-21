<?php
$servername = "localhost";
$username = "varun";
$password = "house";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connection Succesfull!";
} 

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table><tr><th>ID</th><th>Name</th></tr>";
	//output data of each row
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["article"]." ".$row["title"]."</td></tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}

$conn->close();
?>