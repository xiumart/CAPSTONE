<?php



include("config.php");


$eid= $_GET['users_id'];

if (isset($_POST['btnsubmit'])) {
		//something was posted
		
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$role = $_POST['role'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$username = $_POST['username'];
		$password = $_POST['password'];
			$sql = mysqli_query($con,"UPDATE users SET 
				`users_last`='$lname ' , 
				`users_first`='$fname ' , 
				`users_mid`='$mname ',
				`users_email`='$email ',  
				`users_username`='$username' , 
				`users_contact`='$contact' , 
				`users_password`='$password',  
				`user_role`='$role'
				WHERE `users_id` = '$eid'");
			if($sql){
				echo "<script>alert('you have successfully updated the record');</script>";
				echo "<script>document.location='manageuser.php';</script>";
				
			}
			else{
				echo "<script>alert('something went wrong!!!')</script>";
			}

	
		}else
		{
			echo "Please enter some valid information!";
		}

?>



<html>
<body>
<div id="n_New_Product">
			<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			  <a href="manageuser.php" style="text-decoration: none; color: #000">X</a>
			  <form method="post">

			  	<?php 


			  		$eid= $_GET['users_id'];
			  		$sql=mysqli_query($con, "SELECT * from users WHERE users_id='$eid'");
			  		while($row=mysqli_fetch_array($sql)){


			  	?>
				<center><h2 style="color: #000;">Edit Product</h2><br><br></center>
				<label style="color: #000;padding-right: 23%;">Role:</label>
				<input type="text" id="fname" value="<?php echo $row['user_role'];?>" name="role" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right: 15%;">Lastname:</label>
				<input type="text" id="fname" value="<?php echo $row['users_last'];?>" name="lname" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required" ><br><br>
				<label style="color: #000;padding-right: 27%;">Firstname:</label>
				<input type="text" id="fname" value="<?php echo $row['users_first'];?>" name="fname" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right: 21.5%;">Middlename:</label>
				<input type="text" id="fname" value="<?php echo $row['users_mid'];?>" name="mname" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right: 12%;">Email:</label>
				<input type="ext" id="fname" value="<?php echo $row['users_email'];?>" name="email" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right:  15%;">Contact:</label>
				<input type="text" id="fname" value="<?php echo $row['users_contact'];?>" name="contact" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000; padding-right: 10%;">Username:</label>
				<input type="text" id="fname" value="<?php echo $row['users_username'];?>" name="username" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right:  14%;">Password:</label>
				<input type="text" id="fname" value="<?php echo $row['users_password'];?>" name="password" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
								<br><br><br><br>
				<center><button type="submit" name="btnsubmit" style='cursor:pointer'>UPDATE</button></center>
			
			  </form> 
			</div>
		  
		  </div>

		<?php 

	} 

		?>


</body>
</html

