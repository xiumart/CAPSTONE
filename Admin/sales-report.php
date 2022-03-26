<?php
include("session.php");
include("../conn.php");
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
 if (isset($_GET['id'])) {
			$users_id=$_GET['id'];
			$query123 = mysqli_query($conn, "UPDATE `sales` SET type = 'Remove'  WHERE id = '$users_id'");
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
	.btn-addpt:hover { background-color: #00b2b3;}
	.btn-print:hover { background-color: #00b2b3}

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
		<a href="sales-report.php" class="brand">
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
			<li class="active">
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
					<h1>Sales Report</h1>
					<ul class="breadcrumb">
						<li>
							<a href="sales-report.php">Sales Report</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="dashboard.php">Home</a>
						</li>
					</ul>
				</div>
				
			
			</div>
			<ul class="box-info">
				<li>
					
					<span class="text">
						<p>Daily Profit: <?php 
							$sql="SELECT SUM(amount) as sum_score FROM sales where date = CURRENT_DATE;";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						   <p>Weekly Profit: <?php 
						  include("../conn.php");

						  $monday = strtotime("last monday");
						$monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;
						$sunday = strtotime(date("Y-m-d",$monday)." +6 days");
						$this_week_sd = date("Y-m-d",$monday);
						$this_week_ed = date("Y-m-d",$sunday);
							$sql="SELECT SUM(amount) as sum_score FROM sales where date BETWEEN '$this_week_sd'  AND '$this_week_ed' AND `type`='cash' ";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						   <p>Monthly Profit: <?php 
						  include("../conn.php");
							$sql="SELECT MONTH(date)AS Month, SUM(amount) AS total FROM sales WHERE MONTH(date) = MONTH(CURRENT_DATE())  AND `type`='cash' GROUP BY MONTH(date), YEAR(date)";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['total'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						<h3>Sales Revenue: <?php 
							include("../conn.php");
							$sql="SELECT SUM(amount) as sum_score FROM sales;";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></h3>
					</span>
				</li>
				
				<li>
					
					<span class="text">
						  <p>Daily Profit: <?php include("../conn.php");
							$sql="SELECT SUM(profit) as sum_score FROM sales where date = CURRENT_DATE;";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						  <p>Weekly Profit: <?php 
						  include("../conn.php");

						  $monday = strtotime("last monday");
						$monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;
						$sunday = strtotime(date("Y-m-d",$monday)." +6 days");
						$this_week_sd = date("Y-m-d",$monday);
						$this_week_ed = date("Y-m-d",$sunday);
							$sql="SELECT SUM(profit) as sum_score FROM sales where date BETWEEN '$this_week_sd'  AND '$this_week_ed'  AND `type`='cash'";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						  <p>Monthly Profit: <?php 
						  include("../conn.php");
							$sql="SELECT MONTH(date)AS Month, SUM(profit) AS total FROM sales WHERE MONTH(date) = MONTH(CURRENT_DATE())  AND `type`='cash' GROUP BY MONTH(date), YEAR(date)";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['total'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						  <h3>Total Profit: <?php 
							include("../conn.php");
							$sql="SELECT SUM(profit) as sum_score FROM sales;";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></h3>
					</span>
				</li>
				
			
			</ul><br>
			<a href="sales-annual-history.php"><button class="btn-addpt" style="cursor: pointer;"> Annual Sales History</button></a>
			<div>
				<div>
					
					<table>
						<caption>Recent Transaction</caption>
     <thead>
     	<tr>
     	 <th>Transac. ID</th>
     	 <th>Date</th>
     	 <th>Customer Name</th>
		 <th>Profit</th>
		 <th>Total Amount</th>
		 <th>Action</th>
     	</tr>
     </thead>
     <tbody>
     	   <?php
	 $con=mysqli_connect("localhost","root","","capstone");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `date` DESC" );
      
    while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td data-label='Transac. ID'>". $row['order_no'] . "</td>";
      echo "<td data-label='Date'>" . $row['date'] . "</td>";
      echo "<td data-label='Customer name'>" . $row['name'] ."</td>";
	  echo "<td data-label='Profit'>" .$row['profit']."</td>";
	  echo "<td data-label='Amount'>" .$row['amount']."</td>";
      echo "<td data-label='Transac. ID'><form method='post' action='?id=".$row["id"]."'>"?>
      <button class="btn-upd" style="cursor: pointer;" onclick="return confirm('Are you sure you want to cancel your appointment?')">Remove</button></form>
      <?php "</td></tr>";
      }

   
 
    ?>
     </tbody>
   </table>
   <a href=""><button class="btn-print" style="cursor: pointer;"><i class='bx bxs-printer' ></i> Print </button></a>
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