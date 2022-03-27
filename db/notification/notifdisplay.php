<?php
$conn=mysqli_connect("localhost", "root", "", "capstone");
 
if(!$conn){
  die("Error: Failed to connect to database!");
}

//query for feedback display
$query = mysqli_query($conn,"SELECT * FROM `client_inquiries` WHERE inquiries_backdate <= now() AND inquiries_status='2' ORDER BY inquiries_backdate DESC LIMIT 3");
?>