<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// SQL to delete a record
$sql = "UPDATE student set firstname='Ethical', lastname='Hacker' WHERE id=5";

if (mysqli_query($conn, $sql)) {
  echo "Record Update successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>