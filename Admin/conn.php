<?php 
  $conn=mysqli_connect("localhost", "root", "", "capstone");
 
  if(!$conn){
    die("Error: Failed to connect to database!");
  }
?>