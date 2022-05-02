<?php
session_start(); 
include "../conn.php";
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
$msg1='';
$msg='';
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

	/*if (empty($uname)) {
		header("Location: index.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{*/
		$time=time()-45;
  $ip_address=getIpAddr();
// Getting total count of hits on the basis of IP
  $query=mysqli_query($conn,"select count(*) as total_count from loginlogs where TryTime > $time and IpAddress='$ip_address'");
 $check_login_row=mysqli_fetch_assoc($query);
  $total_count=$check_login_row['total_count'];
  //Checking if the attempt 3, or you can set the no of attempt her. For now we taking only 3 fail attempted
  if($total_count==3){
    $msg1='disabled';
    $msg="To many failed login attempts. Please login after 45 sec";
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
                $_SESSION['users_roles'] = $row['users_roles'];
            	$_SESSION['users_id'] = $row['users_id'];
                users_logs($_SESSION['users_username'], "Login", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
            	header("Location: ../doctor/dashboard.php");
                exit();
            }else if ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['users_roles'] === "Sales Staff") {
                $_SESSION['users_username'] = $row['users_username'];
                $_SESSION['users_roles'] = $row['users_roles'];
            	$_SESSION['users_id'] = $row['users_id'];
                users_logs($_SESSION['users_username'], "Login", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
            	header("Location: ../sales-staff/point-of-sale.php");
                exit();
            }else if ($row['users_username'] === $uname && $row['users_password'] === $pass && $row['users_roles'] === "Inventory Clerk") {
                $_SESSION['users_username'] = $row['users_username'];
                $_SESSION['users_roles'] = $row['users_roles'];
            	$_SESSION['users_id'] = $row['users_id'];
                users_logs($_SESSION['users_username'], "Login", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
            	header("Location: ../inventory-clerk/product.php");
                exit();
            }
		}else{
			$total_count++;
      $rem_attm=3-$total_count;
      if($rem_attm==0){
        $msg1='disabled';
        $msg="To many failed login attempts. Please login after 45 sec";
        header( "refresh:45; url=reset.php" );
      }else{
        $msg="Please enter valid login details.<br/>$rem_attm attempts remaining";
      }
      $try_time=time();
      mysqli_query($conn,"insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");

      
    }
	}
}


function getIpAddr(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
       $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
       $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
       $ipAddr=$_SERVER['REMOTE_ADDR'];
    }
   return $ipAddr;
   }

  ?>




<!DOCTYPE html>
<html>
<head>
<title>Admin Login | RNL Vision Care</title>
<link rel="shorcut icon" type="img/png" href="images\logo.png">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<!--/start-login-one-->
<h1></h1>

		<div class="login">	
			<div class="ribbon-wrapper h2 ribbon-red">
				<div class="ribbon-front">
					<h2>RNL Vision Care</h2>
				</div>
				<div class="ribbon-edge-topleft2"></div>
				<div class="ribbon-edge-bottomleft"></div>
			</div>
			<form action="" method="post">
				<ul>
					<li>
						<input type="text" class="text" name="users_username" value="" autocomplete="off" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" ><a class=" icon user"></a>
					</li>
					 <li>
						<input type="password" name="users_password" value="" autocomplete="off" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a class=" icon lock"></a>
					</li>
				</ul>
			<div class="submit">
				<input type="submit" <?php echo $msg1; ?> onclick="myFunction()" value="Log in" >
			</div>
			<div id="result"><?php echo $msg; ?></div>
		</div>
		</form>
<!--start-copyright-->
   		<div class="copy-right">
				<p> &copy; 2022  All rights  Reserved | RNL Vision Care</a></p>
		</div>
	<!--//end-copyright-->
</body>
</html>