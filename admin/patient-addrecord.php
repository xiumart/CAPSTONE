<?php
error_reporting(0);
include("../conn.php");
include("session.php");
if (isset($_POST['btnsubmit'])) {
	$doctor=$_POST['doctor'];
	$fname=$_POST['firstname'];
	$mname=$_POST['middlename'];
	$lname=$_POST['lastname'];
	$full=$lname.", ".$fname." ".$mname;
	$bday=$_POST['bday'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$medhx=$_POST['medhx'];
	$bp=$_POST['bp'];

	$new_D_OD_SPH=$_POST['new_D_OD_SPH'];
	$new_D_OD_CYL=$_POST['new_D_OD_CYL'];
	$new_D_OD_AXIS=$_POST['new_D_OD_AXIS'];
	$new_D_OD_VA=$_POST['new_D_OD_VA'];
	$new_D_OD_ADD=$_POST['new_D_OD_ADD'];

	$new_D_OS_SPH=$_POST['new_D_OS_SPH'];
	$new_D_OS_CYL=$_POST['new_D_OS_CYL'];
	$new_D_OS_AXIS=$_POST['new_D_OS_AXIS'];
	$new_D_OS_VA=$_POST['new_D_OS_VA'];
	$new_D_OS_ADD=$_POST['new_D_OS_ADD'];

	$new_CL_OD_SPH=$_POST['new_CL_OD_SPH'];
	$new_CL_OD_CYL=$_POST['new_CL_OD_CYL'];
	$new_CL_OD_AXIS=$_POST['new_CL_OD_AXIS'];
	$new_CL_OD_VA=$_POST['new_CL_MONO'];
	$new_CL_OD_ADD=$_POST['new_CL_MONO_OD'];

	$new_CL_OS_SPH=$_POST['new_CL_OS_SPH'];
	$new_CL_OS_CYL=$_POST['new_CL_OS_CYL'];
	$new_CL_OS_AXIS=$_POST['new_CL_OS_AXIS'];
	$new_CL_OS_VA=$_POST['new_CL_PD'];
	$new_CL_OS_ADD=$_POST['new_CL_PD_OS'];

	$new_R_OD_SPH=$_POST['new_R_OD_SPH'];
	$new_R_OD_CYL=$_POST['new_R_OD_CYL'];
	$new_R_OD_AXIS=$_POST['new_R_OD_AXIS'];
	$new_R_OD_VA=$_POST['new_R_SEGHT'];
	$new_R_OD_ADD=$_POST['new_R_SEGHT_OD'];

	$new_R_OS_SPH=$_POST['new_R_OS_SPH'];
	$new_R_OS_CYL=$_POST['new_R_OS_CYL'];
	$new_R_OS_AXIS=$_POST['new_R_OS_AXIS'];
	$new_R_OS_VA=$_POST['new_R_VERHT'];
	$new_R_OS_ADD=$_POST['new_R_VERHT_OS'];

	$ishihara_SPH=$_POST['ishihara_SPH'];
	$ishihara_CYL=$_POST['ishihara_CYL'];
	$ishihara_AXIS=$_POST['ishihara_AXIS'];
	$ishihara_PD=$_POST['ishihara_PD'];
	$ishihara_PD_ADD=$_POST['ishihara_PD_ADD'];

	$recom=$_POST['recom'];
	$appt=$_POST['appt'];

	$chkwalk=$_POST['chkwalk'];
	if ($_POST['pat_id']!="") {
		$pat_id=$_POST['pat_id'];
		$chkwalk="Appointment";
	}
	else{
		$pat_id=uniqid();
	}
	$type=$_POST['med'];
if (($_POST['med'])=="Distance") {
	$query = "INSERT INTO `patient_distancerx`(`patient_id`, `patient_name`, `patient_bday`, `patient_contact`, `patient_email`, `patient_address`, `patient_medhx`, `patient_bp`, `D_OD_SPH`, `D_OD_CYL`, `D_OD_AXIS`, `D_OD_VA`, `D_OD_ADD`, `D_OS_SPH`, `D_OS_CYL`, `D_OS_AXIS`, `D_OS_VA`, `D_OS_ADD`, `I_SPH`, `I_CYL`, `I_AXIS`, `I_PD`, `I_ADD`, `status`, `type`, `doctor`,`add_date`,`recommendation`,`appointment`) VALUES ('$pat_id','$full','$bday','$contact','$email','$address','$medhx','$bp','$new_D_OD_SPH','$new_D_OD_CYL','$new_D_OD_AXIS','$new_D_OD_VA','$new_D_OD_ADD','$new_D_OS_SPH','$new_D_OS_CYL','$new_D_OS_AXIS','$new_D_OS_VA','$new_D_OS_ADD','$ishihara_SPH','$ishihara_CYL','$ishihara_AXIS','$ishihara_PD','$ishihara_PD_ADD','$chkwalk','$type','$doctor',now(),'$recom','$appt')";
	
}
elseif (($_POST['med'])=="Contact Lens") {
	$query = "INSERT INTO `patient_distancerx`(`patient_id`, `type`, `patient_name`, `patient_bday`, `patient_contact`, `patient_email`, `patient_address`, `patient_medhx`, `patient_bp`,`D_OD_SPH`, `D_OD_CYL`, `D_OD_AXIS`, `D_OD_VA`, `D_OD_ADD`, `D_OS_SPH`, `D_OS_CYL`, `D_OS_AXIS`, `D_OS_VA`, `D_OS_ADD`, `I_SPH`, `I_CYL`, `I_AXIS`, `I_PD`, `I_ADD`, `status`,`doctor`,`add_date`,`recommendation`,`appointment`) VALUES ('$pat_id','$type','$full','$bday','$contact','$email','$address','$medhx','$bp','$new_CL_OD_SPH','$new_CL_OD_CYL','$new_CL_OD_AXIS','$new_CL_OD_VA','$new_CL_OD_ADD','$new_CL_OS_SPH','$new_CL_OS_CYL','$new_CL_OS_AXIS','$new_CL_OS_VA','$new_CL_OS_ADD','$ishihara_SPH','$ishihara_CYL','$ishihara_AXIS','$ishihara_PD','$ishihara_PD_ADD','$chkwalk','$doctor',now(),'$recom','$appt')";
	
}
elseif (($_POST['med'])=="Reading") {
	$query = "INSERT INTO `patient_distancerx`(`patient_id`, `patient_name`, `patient_bday`, `patient_contact`, `patient_email`, `patient_address`, `patient_medhx`, `patient_bp`, `D_OD_SPH`, `D_OD_CYL`, `D_OD_AXIS`, `D_OD_VA`, `D_OD_ADD`, `D_OS_SPH`, `D_OS_CYL`, `D_OS_AXIS`, `D_OS_VA`, `D_OS_ADD`, `I_SPH`, `I_CYL`, `I_AXIS`, `I_PD`, `I_ADD`, `status`, `type`,`doctor`,`add_date`,`recommendation`,`appointment`) VALUES ('$pat_id','$full','$bday','$contact','$email','$address','$medhx','$bp','$new_R_OD_SPH','$new_R_OD_CYL','$new_R_OD_AXIS','$new_R_OD_VA','$new_R_OD_ADD','$new_R_OS_SPH','$new_R_OS_CYL','$new_R_OS_AXIS','$new_R_OS_VA','$new_R_OS_ADD','$ishihara_SPH','$ishihara_CYL','$ishihara_AXIS','$ishihara_PD','$ishihara_PD_ADD','$chkwalk','$type','$doctor',now(),'$recom','$appt')";
	
}
		mysqli_query($conn, $query);	
			header("Location:patient-record.php ");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css\sys_style.css">
	<link rel="shorcut icon" type="img/png" href="images\logo.png">
	<title>RNL Vision Care | Admin</title>
	<style>
	input[type=text], input[type=date], input[type=tel], input[type=email], select, textarea {
  		width: 100%;
  		padding: 12px;
  		border: 1px solid #ccc;
  		border-radius: 4px;
  		resize: vertical;
  		font-family: var(poppins);
	}

	label {
  		padding: 12px 12px 12px 0;
  		display: inline-block;
	}

	input[type=submit] {
	background-color: #4CAF50;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: right;
	}

	input[type=button] {
	background-color: red;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: right;
	margin-right: 120px;
	margin-top: -39px;
	width: 110px;
	}

	input[type=submit]:hover {
	background-color: #00c2cb;
	}

	input[type=button]:hover {
	background-color: #00c2cb;
	}
	.container {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
	}

	.col-25 {
	float: left;
	width: 25%;
	margin-top: 6px;
	}

	.col-75 {
	float: left;
	width: 75%;
	margin-top: 6px;
	}

	/* Clear floats after the columns */
	.row:after {
	content: "";
	display: table;
	clear: both;
	}

	/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {
	.col-25, .col-75, input[type=submit], input[type=button] {
		width: 100%;
		margin-top: 0;
	}
	}

</style>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="images\logo.png" alt="" width="60px;">
			<span class="text" style="text-shadow:0.5px 0px #000;">RNL Vision Care</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="patient-record.php">
					<i class='bx bxs-user' ></i>
					<span class="text">Patient Record</span>
				</a>
			</li>
			<li>
				<a href="point-of-sale.php">
					<i class='bx bxs-cart' ></i>
					<span class="text">Point of Sale</span>
				</a>
			</li>
			<li>
				<a href="sales-report.php">
					<i class='bx bxs-download' ></i>
					<span class="text">Sales Report</span>
				</a>
			</li>
			<li>
				<a href="product.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Product Inventory</span>
				</a>
			</li>
			<li>
				<a href="supplier.php">
					<i class='bx bxs-truck' ></i>
					<span class="text">Supplier</span>
				</a>
			</li>
			<li>
				<a href="manage-user.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Manage User</span>
				</a>
			</li>
			<li>
				<a href="audit.php">
					<i class='bx bxs-book' ></i>
					<span class="text">Audit Logs</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->


	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<div id="digital-clock"></div>
			<script src="time.js"></script>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<div class="dropdown2">
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
				<div class="dropdown-content2">
					<h4 id="textnotif">Notification</h4><br><hr>
					<a href="#" id="" style="color:black;"><h6>Inquiry:</h6> How can i set an appointment?</a><hr color="wheat">
					<a href="see-all-notification.php" id="colnotif">See all notification..</a>
				</div>
			</div>
			<!-- DROP DOWN NG EDIT PROFILE AND CHANGE PASS OK-->
			<div class="dropdown1">
			<img src="img\user.png" alt="" width="40px" class="userlogo">
				<div class="dropdown-content1">
					<a href="#" id="myBtn">Change Password</a>
					<a href="logout.php" style="color:red;">Logout</a>
				</div>
			</div>
			<!-- Modal -->
			<div id="myModal" class="modal">
				<div class="modal-content">
				<form action="changepasshandler.php" method="POST">
				<span class="close">&times;</span>
				<h3>CHANGE PASSWORD</h3>
				<br><hr><br>
				<h4>OLD PASSWORD</h4>
				<input type="password" name="currentPassword" class="oldpw">
				<h4>NEW PASSWORD</h4>
				<input type="password" minlenght="6" name="newPassword" class="newpw">
				<h4>CONFIRM PASSWORD</h4>
				<input type="password" minlenght="6" name="confirmPassword" class="conpw">
				<button type="submit" value="Submit" name="submit" class="cpBtn">Submit</button><br><br><br><br>
				</div>
			</div>
</form>
			<script src="js\modal.js"></script>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Add Patient</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="patient-record.php">Back</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="product-add .php">Add Patient</a>
						</li>
					</ul>
				</div>
			
			</div>

			
		<div class="table-data">
			<div class="order">
			
				<form method="post" id="patient">
				<div class="row">
						<div class="row">
						<div class="col-25">
							<label for="firstname"></label>
						</div>
						<div class="col-75">
							<div id="divchk">
							<input type="radio" id="myCheck1" name="chkwalk" value="Walk-in" onclick="myFunction1()" checked> Walk-in
							<input type="radio" id="myCheck" name="chkwalk" onclick="myFunction()" value="Appointment"> Appointment
							</div>
							<!--checkbox-->
							<script type="text/javascript">
								function myFunction() {
 							 // Get the checkbox
 							 var checkBox = document.getElementById("myCheck");
 							 // Get the output text
							  var text = document.getElementById("txtappt");
							  var lblcl=document.getElementById("lblcl");
							  var lblcl1=document.getElementById("btnclient");
							 

 							 // If the checkbox is checked, display the output text
 							 if (checkBox.selected = true){
							    text.style.display = "block";
							    lblcl.style.display = "block";
							   lblcl1.style.display = "block";
							   document.getElementById("divdis").style.display="none";
							   document.getElementById("divread").style.display="none";
							   document.getElementById("divcl").style.display="none";
							   document.getElementById("ishi").style.display="none";
							   document.getElementById("btnadd").style.display="none";
							   document.getElementById("btncancel").style.display="none";
							   document.getElementById("firstname").disabled=true;
							   document.getElementById("lastname").disabled=true;
							   document.getElementById("bday").disabled=true;
							   document.getElementById("contact").disabled=true;
							   document.getElementById("address").disabled=true;
							   document.getElementById("middlename").disabled=true;
							   document.getElementById("email").disabled=true;
							   document.getElementById("pat").disabled=true;
							   document.getElementById("bp").disabled=true;
							   document.getElementById("doctor").disabled=true;
							  } 

							  else {
							  	document.getElementById("divdis").style.display="block";
							   document.getElementById("ishi").style.display="block";
							   document.getElementById("btnadd").style.display="block";
							   document.getElementById("btncancel").style.display="block";
							  	document.getElementById("firstname").disabled=false;
							   document.getElementById("lastname").disabled=false;
							   document.getElementById("bday").disabled=false;
							   document.getElementById("contact").disabled=false;
							   document.getElementById("address").disabled=false;
							   document.getElementById("middlename").disabled=false;
							   document.getElementById("email").disabled=false;
							   document.getElementById("pat").disabled=false;
							   document.getElementById("bp").disabled=false;
							   document.getElementById("doctor").disabled=false;
							    text.style.display = "none";
							    lblcl.style.display = "none";
							    lblcl1.style.display = "none";

							  }
							}
							function myFunction1() {
 							 // Get the checkbox
 							 var checkBox = document.getElementById("myCheck1");
 							 // Get the output text
							  var text = document.getElementById("txtappt");
							  var lblcl=document.getElementById("lblcl");
							  var lblcl1=document.getElementById("btnclient");							  

 							 // If the checkbox is checked, display the output text
 							 if (checkBox.selected = false){
 							 	document.getElementById("btnadd").style.display="none";
							   document.getElementById("btncancel").style.display="none";
 							 	document.getElementById("divdis").style.display="none";
							   document.getElementById("divread").style.display="none";
							   document.getElementById("divcl").style.display="none";
							   document.getElementById("ishi").style.display="none";
 							 	document.getElementById("firstname").disabled=true;
							   document.getElementById("lastname").disabled=true;
							   document.getElementById("bday").disabled=true;
							   document.getElementById("contact").disabled=true;
							   document.getElementById("address").disabled=true;
							   document.getElementById("middlename").disabled=true;
							   document.getElementById("email").disabled=true;
							   document.getElementById("pat").disabled=true;
							   document.getElementById("bp").disabled=true;
							   document.getElementById("doctor").disabled=true;
							    text.style.display = "block";
							    lblcl.style.display = "block";
							    lblcl1.style.display = "block";
							  } 

							  else {
							  	document.getElementById("btnadd").style.display="block";
							   document.getElementById("btncancel").style.display="block";
							  	document.getElementById("divdis").style.display="block";
							   document.getElementById("ishi").style.display="block";
							  	document.getElementById("firstname").disabled=false;
							   document.getElementById("lastname").disabled=false;
							   document.getElementById("bday").disabled=false;
							   document.getElementById("contact").disabled=false;
							   document.getElementById("address").disabled=false;
							   document.getElementById("middlename").disabled=false;
							   document.getElementById("email").disabled=false;
							   document.getElementById("pat").disabled=false;
							   document.getElementById("bp").disabled=false;
							   document.getElementById("doctor").disabled=false;
							    text.style.display = "none";
							    lblcl.style.display = "none";
							    lblcl1.style.display = "none";
							  }
							}
							</script>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="firstname" style="display:none;" id="lblcl">Client no.</label>
						</div>
						<div class="col-75">
							<table>
								<thead>
								<tr>
									<td><input type="text" name="txtclt1" id="txtappt" style="display:none;" placeholder="Enter client no."><input type="submit" name="btnclient" value="Search" id="btnclient" style="display: none;"></td>
								</tr>
								</thead>
							</table>
							 
						</div>
						</div>
						
						<?php
						//error_reporting(0);
						if (isset($_POST['chkwalk'])) {
						$txtclt1=$_POST["txtclt1"];
						if (isset($_POST["txtclt1"])) {
							echo "<style type='text/css'>
							#divchk{
								display: none;
							}
							
						</style>";
						$sql1 = "SELECT * FROM `client_user_info` WHERE `client_id` = '$txtclt1'";
 						$result1 = $conn->query($sql1);  
						if($result1->num_rows > 0){
  						while($row = $result1 -> fetch_assoc()){
  							$id1=$row['client_id'];
  							$fname=$row['client_fname'];
  							$lname=$row['client_lname'];
  							$mname=$row['client_mname'];
  							$bday=$row['client_bday'];
  							$contact=$row['client_contact'];
  							$email=$row['client_email'];
  							$address=$row['client_address'];
  							}}}}
  						
  							?>
						
						<!--sql for searching a client info-->
						<div class="row">
						<div class="col-25">
							<label for="firstname">Doctor</label>
						</div>
						<div class="col-75">
							<select name="doctor" id="doctor">
								<?php
								$sql1 = "SELECT * FROM `users_account` WHERE `users_roles` = 'Doctor'";
 						$result1 = $conn->query($sql1);  
						if($result1->num_rows > 0){
  						while($row = $result1 -> fetch_assoc()){
  							$firstn=$row['users_firstname'];
  							$lastn=$row['users_lastname'];
								?>
								<option value="Dr. <?php echo $firstn.$lastn; ?>">Dr. <?php echo $firstn.$lastn; ?>
								</option>
								<?php
						}}
						?>
							</select>

						</div>
						</div>
						
						
						<div class="row">
						<div class="col-25">
							<label for="firstname">First Name</label>
						</div>
						<div class="col-75">
							<input type="text" name="pat_id" value="<?php echo $id1; ?>" hidden>
							<input type="text" id="firstname" name="firstname" placeholder="Enter first name.." autocomplete="off" value="<?php echo $fname;?>" required>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="middlename">Middle Name</label>
						</div>
						<div class="col-75">
							<input type="text" id="middlename" name="middlename" placeholder="Enter middle name.." autocomplete="off" value="<?php echo $mname;?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="lastname">Last Name</label>
						</div>
						<div class="col-75">
							<input type="text" id="lastname" name="lastname" placeholder="Enter last name.." autocomplete="off" value="<?php echo $lname;?>" required>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="bday">Birthdate</label>
						</div>
						<div class="col-75">
							<input type="date" id="bday" name="bday" placeholder="" value="<?php echo $bday;?>" required="" min="1925-01-01" step="">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="contact">Contact No.</label>
						</div>
						<div class="col-75">
							<input type="tel" id="contact" name="contact" maxlength="11" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" placeholder="Enter contact no.." autocomplete="off" value="<?php echo $contact;?>" required>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="email">Email</label>
						</div>
						<div class="col-75">
							<input type="email" id="email" name="email" placeholder="Enter email.." autocomplete="off" value="<?php echo $email;?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="address">Address</label>
						</div>
						<div class="col-75">
							<input type="text" id="address" name="address" placeholder="Enter address.." autocomplete="off" value="<?php echo $address;?>" required>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="address">Medical Hx</label>
						</div>
						<div class="col-75">
							<textarea name="medhx" placeholder="Enter medical history" id="pat"></textarea>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="address">B.P.</label>
						</div>
						<div class="col-75">
							<input type="text" name="bp" placeholder="Enter blood pressure.." id="bp">
						</div>
						</div>
						
						<div class="row">
						<div class="col-25">
						</div>
						<div class="col-75">
							<input type="radio" name="med" value="Distance" id="chkdis" onclick="myFunction2()" checked> DISTANCE
							<input type="radio" name="med" value="Contact Lens" id="chkcl" onclick="myFunction3()"> CONTACT LENS
							<input type="radio" name="med" value="Reading" id="chkread" onclick="myFunction4()"> READING
						</div>
						</div>
						
						<!--table for distance-->
						<div id="divdis">
						<div class="row">
						<div class="col-25">
							<label for="address">NEW RX</label>
						</div>
						<div class="col-75">
							<table>
								<thead>
								<tr>
									<th colspan="3">&nbsp</th>
									<th>SPH</th>
              						<th>CYL</th>
              						<th>AXIS</th>
              						<th>VA</th>
              						<th>ADD</th>
								</tr>
								<tr>
									<th rowspan="2"></th>
									<td rowspan="2">DISTANCE RX</td>
									<td>OD</td>
									<td><input type="text" name="new_D_OD_SPH" placeholder="Sphere"></td>
              						<td><input type="text" name="new_D_OD_CYL" placeholder="Cylinder"></td>
             						<td><input type="text" name="new_D_OD_AXIS" placeholder="Axis"></td>
              						<td><input type="text" name="new_D_OD_VA" placeholder="VA"></td>
              						<td><input type="text"name="new_D_OD_ADD" placeholder="ADD"></td>
								</tr>
								<tr>
									<td>OS</td>
									<td><input type="text" name="new_D_OS_SPH" placeholder="Sphere"></td>
             						 <td><input type="text" name="new_D_OS_CYL" placeholder="Cylinder"></td>
             						 <td><input type="text" name="new_D_OS_AXIS" placeholder="Axis"></td>
             						 <td><input type="text" name="new_D_OS_VA" placeholder="VA"></td>
             						 <td><input type="text" name="new_D_OS_ADD" placeholder="ADD"></td>
								</tr>
							</thead>
							</table>
						</div>
						</div>
						</div>
						<script type="text/javascript">
								function myFunction2() {
 							 // Get the checkbox
 							 var checkBox = document.getElementById("chkdis");
 							 // Get the output text
							  var text = document.getElementById("divdis");
							  var text1 = document.getElementById("divcl");
							  var text2 = document.getElementById("divread");

 							 // If the checkbox is checked, display the output text
 							 if (checkBox.checked == true){
							    text.style.display = "block";
							    text1.style.display = "none";
							    text2.style.display = "none";
							  } 
							  else{
							  	text.style.display = "none";
							  }
							}
							function myFunction3() {
 							 // Get the checkbox
 							 var checkBox = document.getElementById("chkcl");
 							 // Get the output text
							  var text = document.getElementById("divcl");
							  var text1 = document.getElementById("divdis");
							  var text2 = document.getElementById("divread");

 							 // If the checkbox is checked, display the output text
 							 if (checkBox.checked == true){
							    text.style.display = "block";
							    text1.style.display = "none";
							    text2.style.display = "none";
							  } 
							  else{
							  	text.style.display = "none";
							  }
							}
							function myFunction4() {
 							 // Get the checkbox
 							 var checkBox = document.getElementById("chkread");
 							 // Get the output text
							  var text = document.getElementById("divread");
							  var text1 = document.getElementById("divcl");
							  var text2 = document.getElementById("divdis");
 							 // If the checkbox is checked, display the output text
 							 if (checkBox.checked == true){
							    text.style.display = "block";
							    text1.style.display = "none";
							    text2.style.display = "none";
							  } 
							  else{
							  	text.style.display = "none";
							  }
							}
							</script>
						<!--table for contact lens-->
						<div id="divcl" style="display:none;">
						<div class="row">
						<div class="col-25">
							<label for="address">NEW RX</label>
						</div>
						<div class="col-75">
							<table>
								<thead>
								<tr>
									<th colspan="3">&nbsp</th>
									<th>SPH</th>
              						<th>CYL</th>
              						<th>AXIS</th>
              						<th>VA</th>
              						<th>ADD</th>
								</tr>
								<tr>
									<th rowspan="2"></th>
									<td rowspan="2">CONTACT LENS RX</td>
									<td>OD</td>
									<td><input type="text" name="new_CL_OD_SPH" placeholder="Sphere"></td>
              						<td><input type="text" name="new_CL_OD_CYL" placeholder="Cylinder"></td>
              						<td><input type="text" name="new_CL_OD_AXIS" placeholder="Axis"></td>
             						<td><input type="text" name="new_CL_MONO"placeholder="MONO"></td>
            						<td><input type="text" name="new_CL_MONO_OD" placeholder="ADD"></td>
								</tr>
								<tr>
									<td>OS</td>
									<td><input type="text"  name="new_CL_OS_SPH" placeholder="Sphere"></td>
              						<td><input type="text"  name="new_CL_OS_CYL" placeholder="Cylinder"></td>
              						<td><input type="text"  name="new_CL_OS_AXIS" placeholder="Axis"></td>
              						<td><input type="text" name="new_CL_PD" placeholder="PD" readonly></td>
 						            <td><input type="text" name="new_CL_PD_OS"  placeholder="ADD"></td>
								</tr>
							</thead>
							</table>
						</div>
						</div>
						</div>
						<!--table for reading-->
						<div id="divread" style="display:none;">
						<div class="row">
						<div class="col-25">
							<label for="address">NEW RX</label>
						</div>
						<div class="col-75">
							<table>
								<thead>
								<tr>
									<th colspan="3">&nbsp</th>
									<th>SPH</th>
              						<th>CYL</th>
              						<th>AXIS</th>
              						<th>VA</th>
              						<th>ADD</th>
								</tr>
								<tr>
									<th rowspan="2"></th>
									<td rowspan="2">READING RX</td>
									<td>OD</td>
									<td><input type="text" name="new_R_OD_SPH" placeholder="Sphere"></td>
             						<td><input type="text" name="new_R_OD_CYL" placeholder="Cylinder"></td>
              						<td><input type="text" name="new_R_OD_AXIS" placeholder="Axis"></td>
              						<td><input type="text" name="new_R_SEGHT" placeholder="SEG HT"></td>
              						<td><input type="text" name="new_R_SEGHT_OD" placeholder="ADD"></td>
								</tr>
								<tr>
									<td>OS</td>
									<td><input type="text" name="new_R_OS_SPH" placeholder="Sphere"></td>
              						<td><input type="text" name="new_R_OS_CYL" placeholder="Cylinder"></td>
              						<td><input type="text" name="new_R_OS_AXIS" placeholder="Axis"></td>
             						<td><input type="text" name="new_R_VERHT" placeholder="VER HT"></td>
              						<td><input type="text" name="new_R_VERHT_OS" placeholder="ADD"></td>
								</tr>
							</thead>
							</table>
						</div>
						</div>
						</div>
						<!--table for isihara-->
						<div id="ishi">
						<div class="row">
						<div class="col-25">
							<label for="address">Ishihara</label>
						</div>
						<div class="col-75">
							<table>
								<thead>
								<tr>
									<th>SPH</th>
              						<th>CYL</th>
              						<th>AXIS</th>
              						<th>VA</th>
              						<th>ADD</th>
								</tr>
								<tr>
									<td ><input type="text" name="ishihara_SPH" placeholder="Sphere"></td>
									<td ><input type="text" name="ishihara_CYL" placeholder="Cylinder"></td>
            						<td ><input type="text" name="ishihara_AXIS" placeholder="Axis"></td>
            						<td><input type="text" name="ishihara_PD" placeholder="P.D."></td>
            						<td><input type="text" name="ishihara_PD_ADD" placeholder="ADD"></td>
								</tr>
							</thead>
							</table>
						</div>
						</div>
						</div>
						<div class="row">
							<div class="col-25">
							<label for="address">Recommendation</label>
							</div>
							<div class="col-75">
								<textarea placeholder="Please type some recommendation...." name="recom"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
							<label for="address">Next Appointment</label>
							</div>
							<div class="col-75">
								<input type="date" name="appt">
							</div>
						</div>
						<div class="row">
						<input type="submit" value="Add Patient" name="btnsubmit" id="btnadd">
						</div>
						<div class="row">
						<a href="patient-record.php"><input type="button" value="Cancel" id="btncancel"></a>
						</div>
				</form>
			</div>
	    </div>	
	</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js">

	</script>
</body>
</html>