<?php 
session_start(); 
include "db_conn.php";
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
		header("Location: index.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE users_username='$uname' AND users_password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['user_role'] === "Administrator") {
            	$_SESSION['users_username'] = $row['users_username'];
            	$_SESSION['user_role'] = $row['user_role'];
            	$_SESSION['users_id'] = $row['users_id'];
				logs($_SESSION['user_role'], "Login", date("Y-m-d h:i:sa"));
            	header("Location: Admin/Dashboard/dashboard.php");
		        exit();
            }elseif ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['user_role'] === "Doctor") {
                $_SESSION['users_username'] = $row['users_username'];
            	$_SESSION['user_role'] = $row['user_role'];
            	$_SESSION['users_id'] = $row['users_id'];
				logs($_SESSION['user_role'], "Login", date("Y-m-d h:i:sa"));
            	header("Location: Doctor/Dashboard/dashboard.php");
				exit();
            }else{
				header("Location: index.php?error=Incorrect Username or Password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect Username or Password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}