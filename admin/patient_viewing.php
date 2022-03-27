<?php
include("session.php");
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
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
	padding: 12px 33px;
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
			<span class="text" style="text-shadow:0.5px 0px #000; color: black;">RNL Vision Care</span>
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
				<a href="point-of-sale.php?id=cash&invoice=<?php echo $finalcode ?>">
					<i class='bx bxs-cart' ></i>
					<span class="text">Point of Sale</span>
				</a>
			</li>
			<li>
				<a href="sales-report.php">
					<i class='bx bxs-chart' ></i>
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
			<li>
				<a href="archive.php">
					<i class='bx bxs-download' ></i>
					<span class="text">Back-up and Restore</span>
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

			</form>
			<div id="digital-clock"></div>
			<script src="time.js"></script>
			<div class="dropdown2">
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">
				<?php 
				$query = mysqli_query($conn, "SELECT COUNT(*) as total from product  WHERE qty <=10 AND pro_status ='2'");
					while($result=mysqli_fetch_array($query)){
					echo $result['total']; 
				}			
				?>
						  </span>			  
			</a>
			<?php

if (isset($_GET['id'])) {
	$users_id=$_GET['id'];

	$query = "UPDATE `client_inquiries` SET inquiries_status = '1' WHERE inquiries_id = '$users_id'";
	mysqli_query($conn, $query);
			}
			?>
			<?php

if (isset($_GET['eid'])) {
	$pro_id=$_GET['eid'];

	$query1 = "UPDATE `product` SET pro_status = '1' WHERE pro_id = '$pro_id'";
	mysqli_query($conn, $query1);
			}
			?>
			
				<div class="dropdown-content2">
					<h4 id="textnotif">Notification</h4><br><hr>
					
			<table>
			<?php   
			   require_once("../db/notification/notifdisplay.php");
              while($row = mysqli_fetch_assoc($query)){
				  
            ?>
				<tr>
					<th><h4>Inquiry:</h4></th><p><td><?php echo $row['inquiries_message']; ?></p></td><td><a href="?id=<?php echo $row['inquiries_id'];?>"><button class="btn-remove" name="btnremove" style="cursor: pointer;">Clear</button></a></td><hr color="wheat">
			  </tr>
			  <?php
			  }
			  ?>
			  
			  <?php
			$sql1 = "SELECT * FROM `product` WHERE pro_status='2' AND qty <=10 LIMIT 6";
			$result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){ 
					$qty = $row['qty'];
					$model = $row['model'];
			  ?>
			  <tr>
			  <th><h4 style="color: red;">Low Product:</h4></th>
			  <td><p><?php 
					if ($qty<=10) {
						echo "Model: " . $row['model'] ."&nbsp<br>";		
						echo "QTY: " . $row['qty'];
							}
			  ?>
				</p></td><td><a href="?eid=<?php echo $row['pro_id'];?>"><button class="btn-remove" name="btnremove" style="cursor: pointer;">Clear</button></a></td>
							</tr>
							<?php
				  }}
			  ?>
			  </table>
			  
					
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
					<h1>View Patient Record</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="patient-view.php?id=<?php echo $_GET['user']; ?>">Back</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="">View Record</a>
						</li>
					</ul>
				</div>
			
			</div>

			
		<div class="table-data">
			<div class="order">
			
				<form method="post">
					<?php
					error_reporting(0);
include("../conn.php");
$id=$_GET['id'];
$sql1 = "SELECT * FROM `patient_history` WHERE `patient_no`='$id'";
 $result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){
  					$pat_id=$row['patient_id'];
  					$type=$row['type'];
  					$name=$row['patient_name'];
  					$bday=$row['patient_bday'];
  					$contact=$row['patient_contact'];
  					$email=$row['patient_email'];
  					$address=$row['patient_address'];
  					$medhx=$row['patient_medhx'];
  					$bp=$row['patient_bp'];

  					$D_OD_SPH=$row['D_OD_SPH'];
  					$D_OD_CYL=$row['D_OD_CYL'];
  					$D_OD_AXIS=$row['D_OD_AXIS'];
  					$D_OD_VA=$row['D_OD_VA'];
  					$D_OD_ADD=$row['D_OD_ADD'];

  					$D_OS_SPH=$row['D_OS_SPH'];
  					$D_OS_CYL=$row['D_OS_CYL'];
  					$D_OS_AXIS=$row['D_OS_AXIS'];
  					$D_OS_VA=$row['D_OS_VA'];
  					$D_OS_ADD=$row['D_OS_ADD'];

  					$I_SPH=$row['I_SPH'];
  					$I_CYL=$row['I_CYL'];
  					$I_AXIS=$row['I_AXIS'];
  					$I_PD=$row['I_PD'];
  					$I_ADD=$row['I_ADD'];

  					$dc=$row['doctor'];
  					$recommendation=$row['recommendation'];
  					$appointment=$row['appointment'];

  					
  				}}
?>
				<div class="row">
					<h3 style="text-transform: uppercase;"><?php echo $name;?></h3>
					<div class="row">
						<div class="col-25">
							<label for="firstname">Doctor</label>
						</div>
						<div class="col-75">

							<select>
								<option><?php echo $dc;?></option>
							</select>

						</div>
						</div>
						<div class="row">
						<div class="col-75">
							<input type="text" name="pat_id" value="<?php echo $id1; ?>" hidden>
							<input type="text" id="firstname" name="firstname" placeholder="Enter first name.." value="<?php echo $name;?>" hidden>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="bday">Birthdate</label>
						</div>
						<div class="col-75">
							<input type="date" id="bday" name="bday" value="<?php echo $bday;?>" readonly>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="contact">Contact No.</label>
						</div>
						<div class="col-75">
							<input type="tel" id="contact" name="contact"  placeholder="Enter contact no.." value="<?php echo $contact;?>" readonly>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="email">Email</label>
						</div>
						<div class="col-75">
							<input type="email" id="email" name="email" placeholder="Enter email.." value="<?php echo $email;?>" readonly>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="address">Address</label>
						</div>
						<div class="col-75">
							<input type="text" id="address" name="address" placeholder="Enter address.." value="<?php echo $address;?>" readonly>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="address">Medical Hx</label>
						</div>
						<div class="col-75">
							<textarea name="medhx" placeholder="Enter medical history" id="pat" readonly><?php echo $medhx;?></textarea>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="address">B.P.</label>
						</div>
						<div class="col-75">
							<input type="text" name="bp" placeholder="Enter blood pressure.." id="bp" value="<?php echo $bp;?>" readonly>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
						</div>
						<style type="text/css">
							#divdis{
								display: none;
							}
							#divcl{
								display: none;
							}
							#divread{
								display: none;
							}
						</style>
						<div class="col-75">
							<input type="radio" name="med" value="Distance" id="chkdis"  <?php 
								if ($type=="Distance") {
									echo "checked";
								}
								?> readonly> DISTANCE
								
							 <?php 
								if ($type=="Distance") {
									echo "<style type='text/css'>
									#divdis{
										display: block;
											}
									#divcl{
										display: none;
											}
									#divread{
										display: none;
											}
							
									</style>";

								}
							?>

							<input type="radio" name="med" value="Contact Lens" id="chkcl"  <?php 
								if ($type=="Contact Lens") {
									echo "checked";
								}
								?> readonly> CONTACT LENS
								<?php 
								if ($type=="Contact Lens") {
									echo "<style type='text/css'>
									#divcl{
										display: block;
											}
									#divread{
										display: none;
											}
									#divdis{
										display: none;
											}
							
									</style>";
								}
							?>
							<input type="radio" name="med" value="Reading" id="chkread" 
							<?php 
								if ($type=="Reading") {
									echo "checked";
								}
								?> readonly> READING
								<?php 
								if ($type=="Reading") {
									echo "<style type='text/css'>
									#divcl{
										display: none;
											}
									#divread{
										display: block;
											}
									#divdis{
										display: none;
											}
							
									</style>";
								}
							?>
						</div>
						</div>
						<!--script-->
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
 							 	document.getElementById('d1').value = '';
 							 	document.getElementById('d2').value = '';
 							 	document.getElementById('d3').value = '';
 							 	document.getElementById('d4').value = '';
 							 	document.getElementById('d5').value = '';
 							 	document.getElementById('d6').value = '';
 							 	document.getElementById('d7').value = '';
 							 	document.getElementById('d8').value = '';
 							 	document.getElementById('d9').value = '';
 							 	document.getElementById('d10').value = '';

 							 	document.getElementById('cl1').value = '';
 							 	document.getElementById('cl2').value = '';
 							 	document.getElementById('cl3').value = '';
 							 	document.getElementById('cl4').value = '';
 							 	document.getElementById('cl5').value = '';
 							 	document.getElementById('cl6').value = '';
 							 	document.getElementById('cl7').value = '';
 							 	document.getElementById('cl8').value = '';
 							 	document.getElementById('cl9').value = '';
 							 	document.getElementById('cl10').value = '';

 							 	document.getElementById('r1').value = '';
 							 	document.getElementById('r2').value = '';
 							 	document.getElementById('r3').value = '';
 							 	document.getElementById('r4').value = '';
 							 	document.getElementById('r5').value = '';
 							 	document.getElementById('r6').value = '';
 							 	document.getElementById('r7').value = '';
 							 	document.getElementById('r8').value = '';
 							 	document.getElementById('r9').value = '';
 							 	document.getElementById('r10').value = '';

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
 							 	document.getElementById('d1').value = '';
 							 	document.getElementById('d2').value = '';
 							 	document.getElementById('d3').value = '';
 							 	document.getElementById('d4').value = '';
 							 	document.getElementById('d5').value = '';
 							 	document.getElementById('d6').value = '';
 							 	document.getElementById('d7').value = '';
 							 	document.getElementById('d8').value = '';
 							 	document.getElementById('d9').value = '';
 							 	document.getElementById('d10').value = '';

 							 	document.getElementById('cl1').value = '';
 							 	document.getElementById('cl2').value = '';
 							 	document.getElementById('cl3').value = '';
 							 	document.getElementById('cl4').value = '';
 							 	document.getElementById('cl5').value = '';
 							 	document.getElementById('cl6').value = '';
 							 	document.getElementById('cl7').value = '';
 							 	document.getElementById('cl8').value = '';
 							 	document.getElementById('cl9').value = '';
 							 	document.getElementById('cl10').value = '';

 							 	document.getElementById('r1').value = '';
 							 	document.getElementById('r2').value = '';
 							 	document.getElementById('r3').value = '';
 							 	document.getElementById('r4').value = '';
 							 	document.getElementById('r5').value = '';
 							 	document.getElementById('r6').value = '';
 							 	document.getElementById('r7').value = '';
 							 	document.getElementById('r8').value = '';
 							 	document.getElementById('r9').value = '';
 							 	document.getElementById('r10').value = '';
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
 							 	document.getElementById('d1').value = '';
 							 	document.getElementById('d2').value = '';
 							 	document.getElementById('d3').value = '';
 							 	document.getElementById('d4').value = '';
 							 	document.getElementById('d5').value = '';
 							 	document.getElementById('d6').value = '';
 							 	document.getElementById('d7').value = '';
 							 	document.getElementById('d8').value = '';
 							 	document.getElementById('d9').value = '';
 							 	document.getElementById('d10').value = '';

 							 	document.getElementById('cl1').value = '';
 							 	document.getElementById('cl2').value = '';
 							 	document.getElementById('cl3').value = '';
 							 	document.getElementById('cl4').value = '';
 							 	document.getElementById('cl5').value = '';
 							 	document.getElementById('cl6').value = '';
 							 	document.getElementById('cl7').value = '';
 							 	document.getElementById('cl8').value = '';
 							 	document.getElementById('cl9').value = '';
 							 	document.getElementById('cl10').value = '';

 							 	document.getElementById('r1').value = '';
 							 	document.getElementById('r2').value = '';
 							 	document.getElementById('r3').value = '';
 							 	document.getElementById('r4').value = '';
 							 	document.getElementById('r5').value = '';
 							 	document.getElementById('r6').value = '';
 							 	document.getElementById('r7').value = '';
 							 	document.getElementById('r8').value = '';
 							 	document.getElementById('r9').value = '';
 							 	document.getElementById('r10').value = '';
							    text.style.display = "block";
							    text1.style.display = "none";
							    text2.style.display = "none";
							  } 
							  else{
							  	text.style.display = "none";
							  }
							}
							</script>
						<!--end of script-->
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
									<td><input type="text" name="new_D_OD_SPH" placeholder="Sphere" id="d1" value="<?php echo $D_OD_SPH;?>" readonly></td>
              						<td><input type="text" name="new_D_OD_CYL" placeholder="Cylinder" id="d2" value="<?php echo $D_OD_CYL;?>" readonly></td>
             						<td><input type="text" name="new_D_OD_AXIS" placeholder="Axis" id="d3" value="<?php echo $D_OD_AXIS;?>" readonly></td>
              						<td><input type="text" name="new_D_OD_VA" placeholder="VA" id="d4" value="<?php echo $D_OD_VA;?>" readonly></td>
              						<td><input type="text"name="new_D_OD_ADD" placeholder="ADD" id="d5" value="<?php echo $D_OD_ADD;?>" readonly></td>
								</tr>
								<tr>
									<td>OS</td>
									<td><input type="text" name="new_D_OS_SPH" placeholder="Sphere" id="d6" value="<?php echo $D_OS_SPH;?>" readonly></td>

             						 <td><input type="text" name="new_D_OS_CYL" placeholder="Cylinder" id="d7" value="<?php echo $D_OS_CYL;?>" readonly></td>

             						 <td><input type="text" name="new_D_OS_AXIS" placeholder="Axis" id="d8" value="<?php echo $D_OS_AXIS;?>" readonly></td>

             						 <td><input type="text" name="new_D_OS_VA" placeholder="VA" id="d9" value="<?php echo $D_OS_VA;?>" readonly></td>

             						 <td><input type="text" name="new_D_OS_ADD" placeholder="ADD" id="d10" value="<?php echo $D_OS_ADD;?>" readonly></td>
								</tr>
							</thead>
							</table>
						</div>
						</div>
						</div>
						<!--table for contact lens-->
						<div id="divcl">
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
									<td><input type="text" name="new_CL_OD_SPH" placeholder="Sphere" id="cl1" value="<?php echo $D_OD_SPH;?>" readonly></td>
              						<td><input type="text" name="new_CL_OD_CYL" placeholder="Cylinder" id="cl2" value="<?php echo $D_OD_CYL;?>" readonly></td>
              						<td><input type="text" name="new_CL_OD_AXIS" placeholder="Axis" id="cl3" value="<?php echo $D_OD_AXIS;?>" readonly></td>
             						<td><input type="text" name="new_CL_MONO"placeholder="MONO" id="cl4" value="<?php echo $D_OD_VA;?>" readonly></td>
            						<td><input type="text" name="new_CL_MONO_OD" placeholder="ADD" id="cl5" value="<?php echo $D_OD_ADD;?>" readonly></td>
								</tr>
								<tr>
									<td>OS</td>
									<td><input type="text"  name="new_CL_OS_SPH" placeholder="Sphere" id="cl6" value="<?php echo $D_OS_SPH;?>" readonly></td>
              						<td><input type="text"  name="new_CL_OS_CYL" placeholder="Cylinder" id="cl7" value="<?php echo $D_OS_CYL;?>" readonly></td>
              						<td><input type="text"  name="new_CL_OS_AXIS" placeholder="Axis" id="cl8" value="<?php echo $D_OS_AXIS;?>" readonly></td>
              						<td><input type="text" name="new_CL_PD" placeholder="PD" id="cl9" value="<?php echo $D_OS_VA;?>" readonly></td>
 						            <td><input type="text" name="new_CL_PD_OS"  placeholder="ADD" id="cl10" value="<?php echo $D_OS_ADD;?>" readonly></td>
								</tr>
							</thead>
							</table>
						</div>
						</div>
						</div>
						<!--table for reading-->
						<div id="divread">
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
									<td><input type="text" name="new_R_OD_SPH" placeholder="Sphere" id="r1" value="<?php echo $D_OD_SPH;?>" readonly></td>
             						<td><input type="text" name="new_R_OD_CYL" placeholder="Cylinder" id="r2" value="<?php echo $D_OD_CYL;?>" readonly></td>
              						<td><input type="text" name="new_R_OD_AXIS" placeholder="Axis" id="r3" value="<?php echo $D_OD_AXIS;?>" readonly></td>
              						<td><input type="text" name="new_R_SEGHT" placeholder="SEG HT" id="r4" value="<?php echo $D_OD_VA;?>" readonly></td>
              						<td><input type="text" name="new_R_SEGHT_OD" placeholder="ADD" id="r5" value="<?php echo $D_OD_ADD;?>" readonly></td>
								</tr>
								<tr>
									<td>OS</td>
									<td><input type="text" name="new_R_OS_SPH" placeholder="Sphere" id="r6" value="<?php echo $D_OS_SPH;?>" readonly></td>
              						<td><input type="text" name="new_R_OS_CYL" placeholder="Cylinder" id="r7" value="<?php echo $D_OS_CYL;?>" readonly></td>
              						<td><input type="text" name="new_R_OS_AXIS" placeholder="Axis" id="r8" value="<?php echo $D_OS_AXIS;?>" readonly></td>
             						<td><input type="text" name="new_R_VERHT" placeholder="VER HT" id="r9" value="<?php echo $D_OS_VA;?>" readonly></td>
              						<td><input type="text" name="new_R_VERHT_OS" placeholder="ADD" id="r10" value="<?php echo $D_OS_ADD;?>" readonly></td>
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
									<td ><input type="text" name="ishihara_SPH" placeholder="Sphere" value="<?php echo $I_SPH;?>" readonly></td>
									<td ><input type="text" name="ishihara_CYL" placeholder="Cylinder" value="<?php echo $I_CYL;?>" readonly></td>
            						<td ><input type="text" name="ishihara_AXIS" placeholder="Axis" value="<?php echo $I_AXIS;?>"></td>
            						<td><input type="text" name="ishihara_PD" placeholder="P.D." value="<?php echo $I_PD;?>" readonly></td>
            						<td><input type="text" name="ishihara_PD_ADD" placeholder="ADD" value="<?php echo $I_ADD;?>" readonly></td>
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
								<textarea placeholder="Please type some recommendation...." name="recom"><?php echo $recommendation;?></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
							<label for="address">Next Appointment</label>
							</div>
							<div class="col-75">
								<input type="date" name="appt" value="<?php echo $appointment;?>">
							</div>
						</div>


						
				</form>
			</div>
	    </div>	
	</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
<style>
	.btn-apph {
		background-color: #00c2cb;
		padding: 15px;
		border: none;
		border-radius: 10%;
		float: right;
		margin-left: 10px;

		
	}
	.btn-f, .btn-c {
		background-color: #00c2cb;
		border: none;
		border-radius: 10%;
		margin-left: 10px;
		padding:4px;
	}
	.btn-remove {
		background-color: #00c2cb;
		border: none;
		border-radius: 10%;
		margin-left: 60%;
		padding:8px;
	}
	.btn-f:hover { background-color: #4CAF50;}
	.btn-c:hover { background-color: red;}
	.btn-apph:hover { background-color: #00a2a3;}
	.btn-remove:hover { background-color: red;}
	.namee{
		margin-top: 4.5%;
	}
	table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  background-color: #00c2cb;
  margin-top:20px;	
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
  background-color: #9dd1d4;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
</style>
</html>