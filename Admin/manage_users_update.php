<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "capstone";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if ($con->connect_error) {
	# Display an error mesage if the connection fails
	die("Connection failed: " . $con->connect_error);
}
$userid= $_GET['users_id'];

if (isset($_POST['btn_submit'])) {
		//something was posted
		
		$last =  $_REQUEST['lname'];
        $first = $_REQUEST['fname'];
        $middle =  $_REQUEST['mname'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $password = $_REQUEST['password'];
        $position = $_REQUEST['position'];
			$sql = mysqli_query($con,"UPDATE users SET 
				`users_last`='$lname ' , 
				`users_first`='$fname ' , 
				`users_mid`='$mname ',
				`users_email`='$email ',  
				`users_username`='$username' , 
				`users_contact`='$contact' , 
				`users_password`='$password',  
				`user_role`='$position'
				WHERE `users_id` = '$userid'");
			if($sql){
				echo "<script>alert('you have successfully updated the record');</script>";
				echo "<script>document.location='manage_users.php';</script>";
				
			}
			else{
				echo "<script>alert('something went wrong!!!')</script>";
			}
		}

// Close connection
mysqli_close($con);
?>