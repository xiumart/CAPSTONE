<?php 
  $conn=mysqli_connect("localhost", "root", "", "loginattemp");
 
  if(!$conn){
    die("Error: Failed to connect to database!");
  }
?>