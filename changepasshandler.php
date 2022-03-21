<?php
 include ('session.php');
 $clientid = $_SESSION['client_id'];

if (isset($_POST['submit']))
	{
	$old_pass = md5($_POST['currentPassword']);
	$new_pass =  md5($_POST['newPassword']);
	$re_pass =  md5($_POST['confirmPassword']);
	$ses_sql = mysqli_query($conn,"select * from client_user where client_id = '$clientid' ");
   
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$database_password = $row['client_password'];
	if ($database_password == $old_pass)
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd = mysqli_query($conn,"update client_user set client_password='$re_pass' where client_id='$clientid'");
			echo "<script>alert('Update Sucessfully'); window.location='users-changepassword.php'</script>";
			}
		  else
			{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='users-changepassword.php'</script>";
			}
		}
	  else
		{
		echo "<script>alert('Your old password is wrong'); window.location='users-changepassword.php'</script>";
        // echo $database_password, $old_pass;
		}
	}
 
?>