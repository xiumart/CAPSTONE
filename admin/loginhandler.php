<?php 
session_start(); 
include "../conn.php";
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
	$pass = validate(md5($_POST['users_password']));
	$_SESSION['login_user']= $uname;

	if (empty($uname)) {
		header("Location: index.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{

		$sql = "SELECT * FROM users_account WHERE users_username='$uname' AND users_password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['users_roles'] === "Admin") {
            	$_SESSION['users_username'] = $row['users_username'];
                $_SESSION['users_roles'] = $row['users_roles'];
            	$_SESSION['users_id'] = $row['users_id'];
                users_logs($_SESSION['users_username'], "Login", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
            	header("Location: dashboard.php");
		        exit();
            }else if ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['users_roles'] === "Doctor") {
                $_SESSION['users_username'] = $row['users_username'];
                $_SESSION['users_roles'] = $row['user_roles'];
            	$_SESSION['users_id'] = $row['users_id'];
                users_logs($_SESSION['users_username'], "Login", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
            	header("Location: ../doctor/dashboard.php");
                exit();
            }else if ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['users_roles'] === "Sales Staff") {
                $_SESSION['users_username'] = $row['users_username'];
                $_SESSION['users_roles'] = $row['users_roles'];
            	$_SESSION['users_id'] = $row['users_id'];
                users_logs($_SESSION['users_username'], "Login", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
            	header("Location: ../sales-staff/dashboard.php");
                exit();
            }else if ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['users_roles'] === "Inventory Clerk") {
                $_SESSION['users_username'] = $row['users_username'];
                $_SESSION['users_roles'] = $row['user_roles'];
            	$_SESSION['users_id'] = $row['users_id'];
                users_logs($_SESSION['users_username'], "Login", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
            	header("Location: ../inventory-clerk/dashboard.php");
                exit();
            }else{
				header("Location: index.php?error=Incorrect Email or Password");
		        exit();
			}
        }else{
			header("Location: index.php?error=Incorrect Email or Password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>