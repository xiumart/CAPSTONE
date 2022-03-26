<?php
error_reporting(0);
include("../conn.php");
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
				$query = mysqli_query($conn, "SELECT COUNT(*) as total from client_inquiries WHERE inquiries_status = '2'");
					while($result=mysqli_fetch_array($query)){
					echo $result['total']; 
				}			
				?>
						  </span>			  
			</a>
			<?php

			if (isset($_GET['id'])) {
			$users_id=$_GET['id'];
			$query = "UPDATE `client_inquiries` SET inquiries_status = '1'  WHERE inquiries_id = '$users_id'";
			mysqli_query($conn, $query);
			
			}
			?>
			
				<div class="dropdown-content2">
					<h4 id="textnotif">Notification</h4><br><hr>
					<?php   
			   require_once("../db/notification/notifdisplay.php");
              while($row = mysqli_fetch_assoc($query)){
				  
            ?>
			<table>
				<tr>
					<th><h4>Inquiry:</h4></th><p><td><?php echo $row['inquiries_message']; ?></p></td><td><a href="?id=<?php echo $row['inquiries_id'];?>"><button class="btn-remove" name="btnremove" style="cursor: pointer;">Clear</button></a></td><hr color="wheat">
			  </table>
					<?php
			  }
			  ?>
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
					
$sql1 = "SELECT `patient_no`, `patient_id`, `type`, `patient_name`, `patient_bday`, `patient_contact`, `patient_email`, `patient_address`, `patient_medhx`, `patient_bp`, `D_OD_SPH`, `D_OD_CYL`, `D_OD_AXIS`, `D_OD_VA`, `D_OD_ADD`, `D_OS_SPH`, `D_OS_CYL`, `D_OS_AXIS`, `D_OS_VA`, `D_OS_ADD`, `I_PD`,year(now())-year(`patient_bday`) AS age,`doctor`,`recommendation`,`appointment` FROM `patient_distancerx` WHERE `patient_no`='$pat_id'";
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
					<p>This is to certify that <b><u style="text-transform: uppercase;"><?php echo $row['patient_name']; ?></u></b>, <b><u style="text-transform: uppercase;"><?php echo $row['age']; ?></u></b> year old has undergone visual examination.</p><br>
					
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
  						<th style=" border: 1px solid black;
  padding: 10px 20px;">ADD</th>
						
						<tr><td style=" border: 1px solid black;
  padding: 10px 20px;">OD</td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_SPH']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_CYL']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_AXIS']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_VA']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OD_ADD']; ?></td></tr>
						<tr><td style=" border: 1px solid black;
  padding: 10px 20px;">OS</td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OS_SPH']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OS_CYL']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OS_AXIS']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OS_VA']; ?></td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['D_OS_ADD']; ?></td></tr>
						<tr><td style=" border: 1px solid black;
  padding: 10px 20px;">PD</td><td style=" border: 1px solid black;
  padding: 10px 20px;"><?php echo $row['I_PD']; ?></td></tr>
						</thead>
					</table><br>

					<p>RECOMMENDATION:_________<b><u><?php echo $row['recommendation']; ?>.</u></b>__________________</p>
					<p>NEXT APPOINTMENT:___________________________<b><u><?php echo $row['appointment']; ?>.</u></b>______________________________</p>
					<center><p>This certificate was issued for whatever purpose that may serve him/her.</p></center><br>
					<p style="text-align: right;">__<u><b><?php echo $row['doctor']; ?></b></u>__</p>
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