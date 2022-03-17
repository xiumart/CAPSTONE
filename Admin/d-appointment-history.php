
<?php

include("../conn.php");

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
	.namee{
		text-align: left;
		margin-top: 10%;
		margin-left: -5%;
	}
	</style>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="images\logo.png" alt="" width="60px;">
			<span class="text"  style="text-shadow:0.5px 0px #000;">RNL Vision Care</span>
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
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="dashboard.php">Back</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a  href="d-appointment-history.php">Appointment History</a>
						</li>
					</ul>
				</div>
			
			</div>

			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Appointment History</h3>
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
		 <th>Remarks</th>
		 <th>Date and Time</th>
     	</tr>
     </thead>
     <tbody>
     	  <tr>

     	  		<?php 

     	  		$query4 = mysqli_query($conn, "Select * from appointment_history");
     	  		while($row = $query4 -> fetch_assoc()){
?>
     	  	  <td data-label="Name" class="namee"><?php echo $row['app_name'];?></td>
     	  	  <td data-label="Email"><?php echo $row['app_email'];?></td>
     	  	  <td data-label="Contact"><?php echo $row['app_contact'];?></td>
     	  	  <td data-label="Date"><?php echo $row['app_date'];?></td>
			  <td data-label="Time"><?php echo $row['app_time'];?></td>
			  <td data-label="Purpose"><?php echo $row['app_purpose'];?></td>
			  <td data-label="Remarks"><?php echo $row['app_remarks'];?></td>
			  <td data-label="DateTime"><?php echo $row['app_DateTime'];?></td>
     	  </tr>

     	  <?php  } ?>

     	 
     </tbody>
   </table>
				</div>

				
				
			</div>
			
			<div class="table-data">
	

				
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>
