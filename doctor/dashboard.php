<?php 
include("../conn.php");
include("../admin/session.php");
include ("logs_conn.php");
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
	<title>RNL Vision Care | Doctor</title>
</head>
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
		margin-left: 90%;
		padding:4px;
	}
	.btn-f:hover { background-color: #4CAF50;}
	.btn-c:hover { background-color: red;}
	.btn-apph:hover { background-color: #00a2a3;}
	.btn-remove:hover { background-color: red;}
	.namee{
		margin-top: 4.5%;
	}

</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="dashboard.php" class="brand">
		<img src="images\logo.png" alt="" width="60px;">
			<span class="text" style="text-shadow:0.5px 0px #000; color: black">RNL Vision Care</span>
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
			<!-- DROP DOWN OF EDIT PROFILE AND CHANGE PASS OK-->
			<div class="dropdown1">
			<img src="img\user.png" alt="" width="40px" class="userlogo">
				<div class="dropdown-content1">
					<a href="#" id="myBtn" style="color:black;">Change Password</a>
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
					<i class='bx bxs-calendar' ></i>
					<span class="text">
						<h3>
							<?php 
							$query2 = mysqli_query($conn, "SELECT COUNT(*) as total from appointment where app_remarks = 'Approve';");
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
			</div>
			<div>

			</div>
			
			<!-- TABLE ONGOING -->
			<div>
				<table>
						<caption>Ongoing Appointment</caption>
						<thead>
						<tr>						
							<th scope="col">Name</th>
							<th scope="col">Contact No.</th>
							<th scope="col">Date</th>
							<th scope="col">Time</th>
							<th scope="col">Purpose</th>
							<th scope="col">Action</th>
						</tr>
						</thead>
						<tbody>
							<tr>
							<tr>
							<?php 
								$query5 = mysqli_query($conn, "Select * from appointment where app_remarks = 'Approve'");
								while($row1 = $query5 -> fetch_assoc()){
							?>
							<td data-label="Name"><?php echo $row1['app_name'];?></td>
							<td data-label="Contact No."><?php echo $row1['app_contact'];?></td>
							<td data-label="Date"><?php echo $row1['app_date'];?></td>
							<td data-label="Time"><?php echo $row1['app_time'];?></td>
							<td data-label="Purpose"><?php echo $row1['app_purpose'];?></td>
							<td data-label="Action"><a href="?id2=<?php echo $row1['app_id'];?>"><button class="btn-c" style="cursor: pointer;width:100px;pad">Cancel</button>
			  				<a href="?id1=<?php echo $row1['app_id'];?>"><button class="btn-f" style="cursor: pointer;width:100px;">Finish</button></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>

			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
<style>table {
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
  margin-top:50px;	
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
}</style>
</html>