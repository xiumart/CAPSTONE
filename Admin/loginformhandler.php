<?php 
session_start(); 
include "config.php";
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
if (isset($_POST['users_username']) && isset($_POST['users_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['users_username']);
	$pass = validate($_POST['users_password']);

	if (empty($uname)) {
		header("Location: login.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE users_username='$uname' AND users_password='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['user_role'] === "Administrator") {
            	$_SESSION['users_username'] = $row['users_username'];
            	$_SESSION['user_role'] = $row['user_role'];
            	$_SESSION['users_id'] = $row['users_id'];
				logs($_SESSION['users_username'], "Login", date("Y-m-d h:i:A"));
            	header("Location: dashboard.php");
		        exit();
            }elseif ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['user_role'] === "Doctor") {
                $_SESSION['users_username'] = $row['users_username'];
            	$_SESSION['user_role'] = $row['user_role'];
            	$_SESSION['users_id'] = $row['users_id'];
				logs($_SESSION['users_username'], "Login", date("Y-m-d h:i:A"));
            	header("Location: ../dashboard.php");
				exit();
            }else{
				header("Location: login.php?error=Incorrect Username or Password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorrect Username or Password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}