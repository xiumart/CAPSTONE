<?php
session_start(); 
include "../conn.php";
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "capstone";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if ($con->connect_error) {
	# Display an error mesage if the connection fails
	die("Connection failed: " . $con->connect_error);
}


        $last =  $_REQUEST['lname'];
        $first = $_REQUEST['fname'];
        $middle =  $_REQUEST['mname'];
        $username = $_REQUEST['uname'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $password = md5("RNLpass");
        $position = $_REQUEST['position'];
       

           $sql = "INSERT INTO users_account (users_lastname,users_firstname,users_middlename,users_username,users_email,users_contact,users_password,users_roles) VALUES ('$last', 
            '$first','$middle','$username','$email', '$contact', '$password', '$position')";
          
        if(mysqli_query($con, $sql)){
            users_logs($_SESSION['users_username'], "Added User", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
            echo '<script language="javascript">';
	        echo 'alert("User added successfully!");';
	        echo 'window.location="manage-user.php";';
	        echo '</script>';
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>