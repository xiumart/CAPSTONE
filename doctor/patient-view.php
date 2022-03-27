<?php
include("../admin/session.php");
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
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
</head>
<style>
	button {
		background-color: #00c2cb;
		padding: 12px;
		border: none;
		margin: 3px;
		border-radius: 10%;
		cursor: pointer;
	}

	.btn-view:hover { background-color: #4CAF50;}
	.btn-rem:hover { background-color: red;}
	.btn-print:hover { background-color:blue;}
	.btn-addp:hover { background-color: #e5eaf0}
	.btn-addpt:hover { background-color: #00b2b3;}

	.btn-addpt {float:right; margin-bottom: 20px;}

	.checkidd{
		margin-top: 4.5%;
	}
	
</style>
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
							<a class="active" href="patient-record.php">Back</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="patient-record.php">View Patient Record</a>
						</li>
					</ul>
				</div>
			
			</div>
<?php
error_reporting(0);
include("../conn.php");
$id=$_GET['id'];
$rm=$_GET['rm'];
if (isset($_GET['id'])) {
	// code...

$query = "UPDATE `patient_history` SET `status`='Remove' WHERE `patient_no`='$rm'";

	mysqli_query($conn, $query);
}
$sql1 = "SELECT * FROM `patient_distancerx` WHERE `patient_no`='$id'";
 $result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){
  					$name=$row['patient_name'];
  					$pat_id=$row['patient_id'];
  				}}
  					?>

			<div>
				
						
						<form method="post">
						<input type="text" name="patid" value="<?php echo $pat_id;?>" hidden>
						</form>
						<a href="patient-certificate.php?id=<?php echo $id;?>"><button class="btn-addpt" style="cursor: pointer;"> Preview Certificate</button></a>
						<a href="patient-update.php?id=<?php echo $id;?>"><button class="btn-addpt" style="cursor: pointer;"> Update Records</button></a>
				
			
					
					<table>
					
					<caption><?php echo $name;?>`s Check Up History</caption>
     <thead>
     	<tr>
     	 <th>Check-up id</th>
     	 <th>Date</th>
     	 <th>Check-up by</th>
		 <th>Action</th>
     	</tr>
     </thead>
     <tbody>
     	<?php
$sql1 = "SELECT * FROM `patient_history` WHERE `patient_id`='$pat_id' AND `status` LIKE 'History'";
 $result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){
  					$chk_id=$row['patient_no'];
  					$date=$row['date_up'];
  					$doctor=$row['doctor'];
     	?>
     	  <tr>
     	  	  <td data-label="Checkid"><?php echo $chk_id;?></td>
     	  	  <td data-label="Date"><?php echo $date;?></td>
     	  	  <td data-label="Checkby"><?php echo $doctor;?></td>
			  <td data-label="Action"><a href="patient_viewing.php?user=<?php echo $_GET['id'];?>&id=<?php echo $chk_id;?>"><button class="btn-f"  style="cursor: pointer;width:100px;">View</button></a><a href="patient-view.php?id=<?php echo $_GET['id']; ?>&rm=<?php echo $chk_id; ?>"><button class="btn-c"  style="cursor: pointer;width:100px;" onclick="return confirm('Are you sure you want to remove this user?')">Remove</button></a></td>

     	  </tr>
     	  <?php

  				}}

?>
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