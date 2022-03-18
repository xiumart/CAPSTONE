<?php 
include("../conn.php");


// Set the new timezone
date_default_timezone_set('Asia/Manila');
$date = date('d-m-y g:i a');

if (isset($_GET['id'])) {
	$app_id=$_GET['id'];
	$queryaccept = "UPDATE `appointment` SET app_remarks = 'ONGOING' WHERE app_id='$app_id'";
			mysqli_query($conn, $queryaccept);

		
}
if (isset($_GET['id1'])) {
	$app_id=$_GET['id1'];
	$DateTime = $date;
		$queryaccept = "UPDATE `appointment` SET app_remarks = 'FINISH' WHERE app_id='$app_id';";
		$queryaccept .= "INSERT into appointment_history (app_id, app_name, app_email, app_contact, app_date, app_time, app_purpose, app_remarks) SELECT app_id, app_name, app_email, app_contact, app_date, app_time, app_purpose, app_remarks from appointment where app_id = '$app_id';";
		$queryaccept .= "UPDATE appointment_history set app_DateTime = '$date' where app_id = '$app_id';";
		$queryaccept .= "DELETE from appointment where app_id = '$app_id'";
		mysqli_multi_query($conn, $queryaccept);
		header( "refresh:0; url=dashboard.php" );

}
if (isset($_GET['id2'])) {
	$app_id=$_GET['id2'];
	$queryaccept = "UPDATE `appointment` SET app_remarks = 'CANCELLED' WHERE app_id='$app_id';";
		$queryaccept .= "INSERT into appointment_history (app_id, app_name, app_email, app_contact, app_date, app_time, app_purpose, app_remarks) SELECT app_id, app_name, app_email, app_contact, app_date, app_time, app_purpose, app_remarks from appointment where app_id = '$app_id';";
		$queryaccept .= "UPDATE appointment_history set app_DateTime = '$date' where app_id = '$app_id';";
		$queryaccept .= "DELETE from appointment where app_id = '$app_id'";
			mysqli_multi_query($conn, $queryaccept);	
			header( "refresh:0; url=dashboard.php" );		
}
if (isset($_GET['id3'])) {
	$app_id=$_GET['id3'];
	$queryaccept = "UPDATE `appointment` SET app_remarks = 'DENIED' WHERE app_id='$app_id';";
		$queryaccept .= "INSERT into appointment_history (app_id, app_name, app_email, app_contact, app_date, app_time, app_purpose, app_remarks) SELECT app_id, app_name, app_email, app_contact, app_date, app_time, app_purpose, app_remarks from appointment where app_id = '$app_id';";
		$queryaccept .= "UPDATE appointment_history set app_DateTime = '$date' where app_id = '$app_id';";
		$queryaccept .= "DELETE from appointment where app_id = '$app_id'";
			mysqli_multi_query($conn, $queryaccept);	
			header( "refresh:0; url=dashboard.php" );		

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
</head>
<style>
	.btn-upd, .btn-rem, .btn-apph {
		background-color: #00c2cb;
		padding: 12px;
		border: none;
		border-radius: 10%;
		float: right;
		margin-left: 10px;
		
	}

	.btn-upd:hover { background-color: #4CAF50;}
	.btn-rem:hover { background-color: red;}
	.btn-apph:hover { background-color: #00a2a3;}

	.namee{
		margin-top: 4.5%;
	}

</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="dashboard.php" class="brand">
			<img src="images\logo.png" alt="" width="60px;">
			<span class="text" style="text-shadow:0.5px 0px #000;">RNL Vision Care</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
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
				<a href="logout.php" class="logout">
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
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<div class="dropdown1">
			<img src="img\user.png" alt="" width="40px" class="userlogo">
				<div class="dropdown-content1">
					<a href="#">Change Password</a>
					<a href="#" style="color:red;">Logout</a>
				</div>
			</div>
			
			<!-- DROP DOWN OF EDIT PROFILE AND CHANGE PASS OK-->
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-plus' ></i>
					<span class="text">
						<h3><?php 
							$query = mysqli_query($conn, "SELECT COUNT(*) as total from appointment where app_remarks = 'PENDING';");
									while($result=mysqli_fetch_array($query)){
										echo $result['total'];
						  							}			
						  ?></h3>
						<p>Total Request Appointment</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar' ></i>
					<span class="text">
						<h3>
							<?php 
							$query2 = mysqli_query($conn, "SELECT COUNT(*) as total from appointment where app_remarks = 'ONGOING';");
									while($result2=mysqli_fetch_array($query2)){
										echo $result2['total'];
						  							}			
						  ?>
						  </h3>
						<p>Total Ongoing Appointment</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><?php 
							$query3 = mysqli_query($conn, "SELECT COUNT(*) as total from appointment_history where app_remarks = 'FINISH';");
									while($result3=mysqli_fetch_array($query3)){
										echo $result3['total'];
						  							}			
						  ?></h3>
						<p>Total Finish Appointment</p>
					</span>
				</li>
			</ul>

			<div><br>
				<a href="d-appointment-history.php"><button class="btn-apph" style="cursor: pointer;">Appointment History</button></a>
			</div><br>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Request Appointment</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table class="table">
     <thead>
     	<tr>
     	 <th>Name</th>
     	 <th>Email</th>
     	 <th>Contact No.</th>
     	 <th>Date</th>
		 <th>Time</th>
		 <th>Purpose</th>
		 <th>Action</th>
     	</tr>
     </thead>
     <tbody>
     	  	<tr>


     	  		<?php 

     	  		$query4 = mysqli_query($conn, "Select * from appointment where app_remarks = 'PENDING'");
     	  		while($row = $query4 -> fetch_assoc()){




     	  ?>
     	  	  <td data-label="Name" class="brandd"><p><?php echo $row['app_name'];?></p></td>
     	  	  <td data-label="Email"><?php echo $row['app_email'];?></td>
     	  	  <td data-label="Contact"><?php echo $row['app_contact'];?></td>
     	  	  <td data-label="Date"><?php echo $row['app_date'];?></td>
			  <td data-label="Time"><?php echo $row['app_time'];?></td>
			  <td data-label="Purpose"><?php echo $row['app_purpose'];?></td>
			  <td data-label="Action"><a href="?id3=<?php echo $row['app_id'];?>"><button class="btn-rem" style="cursor: pointer;">Denied</button></a>
			  <a href="?id=<?php echo $row['app_id'];?>"><button class="btn-upd" style="cursor: pointer;">Accept</button></a></td>
     	  </tr>

     	<?php  } ?>

     </tbody>
   </table>
				</div>

				
				
			</div>
			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Ongoing Appointment</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table class="table">
     <thead>
     	<tr>
     	 <th>Name</th>
     	 <th>Email</th>
     	 <th>Contact No.</th>
     	 <th>Date</th>
		 <th>Time</th>
		 <th>Purpose</th>
		 <th>Action</th>
     	</tr>
     </thead>
     <tbody>

     	  <tr>
     	  	  <?php 

     	  		$query5 = mysqli_query($conn, "Select * from appointment where app_remarks = 'ONGOING'");
     	  		while($row1 = $query5 -> fetch_assoc()){

     	  ?>
     	  	  <td data-label="Name" class="brandd"><p><?php echo $row1['app_name'];?></p></td>
     	  	  <td data-label="Email"><?php echo $row1['app_email'];?></td>
     	  	  <td data-label="Contact"><?php echo $row1['app_contact'];?></td>
     	  	  <td data-label="Date"><?php echo $row1['app_date'];?></td>
			  <td data-label="Time"><?php echo $row1['app_time'];?></td>
			  <td data-label="Purpose"><?php echo $row1['app_purpose'];?></td>
			  <td data-label="Action"><a href="?id2=<?php echo $row1['app_id'];?>"><button class="btn-rem" style="cursor: pointer;">Cancel</button>
			  <a href="?id1=<?php echo $row1['app_id'];?>"><button class="btn-upd" style="cursor: pointer;">Finish</button></td>


     	  </tr>

     	<?php } ?>
     </tbody>
   </table>

				</div>

				
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>