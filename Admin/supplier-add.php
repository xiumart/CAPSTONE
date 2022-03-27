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
			<span class="text" style="text-shadow:0.5px 0px #000; color: black;">RNL Vision Care</span>
		</a>
		<ul class="side-menu top">
			<li>
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
				<a href="point-of-sale.php?id=cash&invoice=<?php echo $finalcode ?>">
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
			<li class="active">
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
					<h1>Add New Supplier</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="supplier.php">Back</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a href="supplier.php">Add New Supplier</a>
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
			
				<form action="supplierhandler.php" method="post">
				<div class="row">
						
						<div class="row">
						<div class="col-25">
							<label for="cname">Company Name</label>
						</div>
						<div class="col-75">
							<input type="text" id="cname" name="cname" placeholder="Enter company name" required="" autocomplete="off">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="conperson">Contact Person</label>
						</div>
						<div class="col-75">
							<input type="text" id="lname" name="lname" placeholder="Enter contact person" required="" autocomplete="off">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="contact">Contact Number</label>
						</div>
						<div class="col-75">
							<input type="tel" id="contact" name="contact" maxlength="11" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" placeholder="Enter contact number" required="" autocomplete="off">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="email">Email</label>
						</div>
						<div class="col-75">
							<input type="email" id="email" name="email" placeholder="Enter email" required="" autocomplete="off">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="description">Description</label>
						</div>
						<div class="col-75">
							<input type="text" id="description" name="description" placeholder="Enter description" required="" autocomplete="off">
						</div>
						</div>
						<center>
						<div class="row">
						<input type="submit" value="SUBMIT"></center>
						</div>
						</form>
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
		.btn-f, .btn-c {
		background-color: #00c2cb;
		border: none;
		border-radius: 10%;
		margin-left: 10px;
		padding:4px;
	}

	.btn-f:hover { background-color: #4CAF50;}
	.btn-c:hover { background-color: red;}
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
