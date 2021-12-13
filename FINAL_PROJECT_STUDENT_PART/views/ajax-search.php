<?php

$search_value = $_POST["search"];

$conn = mysqli_connect("localhost", "root", "", "school_db") or die("Connection Failed.");

$sql = "SELECT * FROM book WHERE bname LIKE '%{search_value}%' OR author LIKE '%{search_value}%'";
$result1 = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if (mysqli_num_rows($result1) > 0) {
	$output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Author</th>
	<th>Category</th>
	</tr>';
	while ($row = mysqli_fetch_array($result1)) {
		$output .= "<tr><td>{$row["bid"]}</td><td>{$row["bname"]}</td><td>{$row["author"]}</td><td>{$row["cetagory"]}</td></tr>";
	}
	$output .= "</table>";

	mysqli_close($conn);
	echo $output;
} else{
	echo "<h2>No Record Found.<h2>";
}

?>


<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book WHERE bname LIKE '%{search_value}%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>