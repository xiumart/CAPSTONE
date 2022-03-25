<?php
include("../conn.php");
include("../admin/session.php");
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
$eid= $_GET['id'];

if (isset($_REQUEST['btnsubmit'])) {
		//something was posted
		$cname = $_REQUEST['cname'];
		$conperson = $_REQUEST['conperson'];
		$desc = $_REQUEST['description'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];


    
			$sql = mysqli_query($conn,"UPDATE supplier SET 
				`supp_cname`='$cname ' , 
				`supp_contactperson`='$conperson ' , 
				`supp_desc`='$desc' , 
				`supp_email`='$email ',  
				`supp_contact`='$contact' 
				WHERE `supp_id` = '$eid'");
        
			if($sql){
				users_logs($_SESSION['users_username'], "Updated Supplier", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
				echo "<script>alert('You have successfully updated the record.');</script>";
				echo "<script>document.location='supplier.php';</script>";
				
			}
			else{
				echo "<script>alert('something went wrong!!!')</script>";
			}

	
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
	button {
		background-color: #00c2cb;
		padding: 12px;
		border: none;
		margin: 3px;
		border-radius: 10%;
	}

	.btn-upd:hover { background-color: #4CAF50;}
	.btn-rem:hover { background-color: red;}
	.btn-addpt:hover { background-color: #00a2a3;}
	.btn-print:hover {background-color: #00a2a3;}
	.btn-addpt {float:right; margin-bottom: 20px;}
	.btn-print {
		margin-top: 20px;
		float: right;
		width: 10%;
	}
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
				<a href="product.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Product Inventory</span>
				</a>
			</li>
			<li class="active">
				<a href="supplier.php">
					<i class='bx bxs-truck' ></i>
					<span class="text">Supplier</span>
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
					<h4>Inquiry:</h4><p><?php echo $row['inquiries_message']; ?></p><a href="?id=<?php echo $row['inquiries_id'];?>"><button class="btn-remove" name="btnremove" style="cursor: pointer;">Clear</button></a><hr color="wheat">
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
					<h1>Update Supplier</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="supplier.php">Back</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a href="supplier.php">Update Supplier</a>
						</li>
					</ul>
				</div>
			</div>
			<style>
	input[type=text], select, textarea {
  		width: 100%;
  		padding: 12px;
  		border: 1px solid #ccc;
  		border-radius: 4px;
  		resize: vertical;
	}
	input[type=tel], select, textarea {
  		width: 100%;
  		padding: 12px;
  		border: 1px solid #ccc;
  		border-radius: 4px;
  		resize: vertical;
	}
	input[type=email], select, textarea {
  		width: 100%;
  		padding: 12px;
  		border: 1px solid #ccc;
  		border-radius: 4px;
  		resize: vertical;
	}

	label {
  		padding: 12px 12px 12px 0;
  		display: inline-block;
	}

	input[type=submit] {
	background-color: #04AA6D;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: right;
	font-size: 20px;
	}

	input[type=submit]:hover {
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
	.col-25, .col-75, input[type=submit] {
		width: 100%;
		margin-top: 0;
	}
	}
</style>
<div class="table-data">
			<div class="order">
			
				<form action="" method="post">
				<?php 
				
			  		$eid= $_GET['id'];
			  		$sql=mysqli_query($conn, "SELECT * from supplier WHERE supp_id='$eid'");
			  		while($row=mysqli_fetch_array($sql)){
			  	?>
				<div class="row">
						<div class="row">
						<div class="col-25">
							<label for="cname">Company Name</label>
						</div>
						<div class="col-75">
							<input type="text" id="cname" name="cname" placeholder="Enter last name" required="" value= "<?php echo $row['supp_id'];?>"hidden>
							<input type="text" id="cname" name="cname" placeholder="Enter company name" required="" value= "<?php echo $row['supp_cname'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="conperson">Contact Person</label>
						</div>
						<div class="col-75">
							<input type="text" id="conperson" name="conperson" placeholder="Enter contact person" required="" value= "<?php echo $row['supp_contactperson'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="contact">Contact Number</label>
						</div>
						<div class="col-75">
							<input type="tel" id="contact" name="contact" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" placeholder="Enter contact number" required="" value= "<?php echo $row['supp_contact'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="email">Email</label>
						</div>
						<div class="col-75">
							<input type="email" id="email" name="email" placeholder="Enter email" required="" value= "<?php echo $row['supp_email'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="description">Description</label>
						</div>
						<div class="col-75">
							<input type="text" id="description" name="description" placeholder="Enter description" required="" value= "<?php echo $row['supp_desc'];?>">
						</div>
						</div>
						<center>
						<div class="row">
						<input type="submit" name="btnsubmit" value="UPDATE"></center>
						</div>
						</form>
			</div>
	    </div>
		<?php
              }
            ?>
			<div class="table-data">
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>