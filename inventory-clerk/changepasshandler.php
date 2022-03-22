<?php
include ('../admin/session.php');
 $usersid = $_SESSION['users_id'];

if (isset($_POST['submit']))
	{
	$old_pass = md5($_POST['currentPassword']);
	$new_pass =  md5($_POST['newPassword']);
	$re_pass =  md5($_POST['confirmPassword']);
	$ses_sql = mysqli_query($conn,"select * from users_account where users_id = '$usersid' ");
   
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$database_password = $row['users_password'];
	if ($database_password == $old_pass)
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd = mysqli_query($conn,"update users_account set users_password='$re_pass' where users_id='$usersid'");
			echo "<script>alert('Update Sucessfully'); window.location='dashboard.php'</script>";
			}
		  else
			{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='dashboard.php'</script>";
			}
		}
	  else
		{
		echo "<script>alert('Your old password is wrong'); window.location='dashboard.php'</script>";
        // echo $database_password, $old_pass;
		}
	}
 
?>