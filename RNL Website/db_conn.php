<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "capstone";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if ($conn->connect_error) {
	# Display an error mesage if the connection fails
	die("Connection failed: " . $conn->connect_error);
}
?>