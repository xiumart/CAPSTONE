<?php
error_reporting(0);
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
</style>
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
					<h1>Medical Certificate</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="patient-view.php?id=<?php echo $_GET['id']; ?>">Back</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="patient-record.php">Preview Medical Certificate</a>
						</li>
					</ul>
				</div>
			
			</div>

			<a href="javascript:Clickheretoprint()"><button class="btn-addpt" style="cursor: pointer;"> Print</button></a>
			<!--print-->
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=1000, height=1000, left=100, top=25"; 
  var content_vlue = document.getElementById("order").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

			<div class="table-data">
				<div class="order" id="order">
					<?php
					$pat_id=$_GET['id'];
					
$sql1 = "SELECT `patient_no`, `patient_id`, `type`, `patient_name`, `patient_bday`, `patient_contact`, `patient_email`, `patient_address`, `patient_medhx`, `patient_bp`, `D_OD_SPH`, `D_OD_CYL`, `D_OD_AXIS`, `D_OD_VA`, `D_OD_ADD`, `D_OS_SPH`, `D_OS_CYL`, `D_OS_AXIS`, `D_OS_VA`, `D_OS_ADD`, `I_PD`,year(now())-year(`patient_bday`) AS age,`doctor` FROM `patient_distancerx` WHERE `patient_no`='$pat_id'";
 $result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){
  					$name=$row['patien_name'];
  			
     	?>
					<center>
					<img src="images/cert_logo.jpg" style="width: 40%; height: 100px;">
					<h4>Address : Stall #13 2nd floor Inno Block Mall Zabarte Road </h4>
					<h4>Cor Camarin-Susano Road, North Caloocan City</h4>
					<h4>Phone : (+63)998 218 1412</h4>
					<h4>Email : rnlvisioncare@gmail.com</h4>
					<br><br>
					<hr style="border: 1px solid black;">
					<h1 style="letter-spacing: 12px;">CERTIFICATION</h1>
					<hr style="border: 1px solid black;">
					</center>
					<br>
					<p style="text-align: right;">Date: <u><?php echo date("d/m/Y"); ?></u></p>
					<br>
					<p>To whom it may concern,</p><br>
					<center>
					<p>This is to certify that <b><u style="text-transform: uppercase;"><?php echo $row['patient_name']; ?></u></b>, <b><u style="text-transform: uppercase;"><?php echo $row['age']; ?></u></b> year old has undergone visual examination and the diagnosis as follows.</p><br>
					<input type="checkbox" name=""> Emmetropia&nbsp&nbsp&nbsp&nbsp&nbsp <input type="checkbox" name=""> Hyperopia<br>
					<input type="checkbox" name=""> Myopia &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" name=""> Presbyopia<br>
					<input type="checkbox" name=""> Astigmatism<br><br>
					</center>
					<p>The following findings was taken.</p><br><br>
				
					<table style=" border-collapse: collapse;
  border: 2px solid black;
  letter-spacing: 1px;
  font-size: 0.8rem;">
						<thead>
						
							<th rowspan="4"><img src="images/rx.png" style="width: 20%; height: 100px;"></th>
							<th style=" border: 1px solid black;
  padding: 10px 20px;">&nbsp</th>
							<th style=" border: 1px solid black;
  padding: 10px 20px;">SPH</th>
							<th style=" border: 1px solid black;
  padding: 10px 20px;">CYL</th>
							<th style=" border: 1px solid black;
  padding: 10px 20px;">AXIS</th>
							<th style=" border: 1px solid black;
  padding: 10px 20px;">VA</th>
						
						<tr><td style=" border: 1px solid black;
  padding: 10px 20px;">OD</td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_SPH']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_CYL']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_AXIS']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_VA']; ?></td></tr>
						<tr><td style=" border: 1px solid black;
  padding: 10px 20px;">OS</td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OS_SPH']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OS_CYL']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OS_AXIS']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OS_VA']; ?></td></tr>
						<tr><td style=" border: 1px solid black;
  padding: 10px 20px;">ADD</td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_ADD']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;">PD</td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['I_PD']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"></td></tr>
						</thead>
					</table><br>

					<p>RECOMMENDATION:______________________________________________________________</p>
					<p>NEXT APPOINTMENT:______________________________________________________________</p>
					<center><p>This certificate was issued for whatever purpose that may serve him/her.</p></center><br>
					<p style="text-align: right;"><u><b><?php echo $row['doctor']; ?></b></u></p>
					<p style="text-align: right;">OPTOMETRIST&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
					<p style="text-align: right;">PRC License#_________&nbsp&nbsp</p>
					<?php
				}}
					?>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>