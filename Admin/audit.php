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
		background-color:#00c2cb;
		float:right;
		font-size:15px;
		border:none;
		color: white;
		padding: 10px;
		cursor:pointer;
		border-radius:10px;
	}

	.btn-print:hover { background-color: #00a2a3;}
</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="audit.php" class="brand">
			<img src="images\logo.png" alt="" width="60px;">
			<span class="text"  style="text-shadow:0.5px 0px #000;">RNL Vision Care</span>
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
			<li class="active">
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
					<h1>Audit Logs</h1>
					<ul class="breadcrumb">
						<li>
							<a href="audit.php">Audit Logs</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="audit.php">Home</a>
						</li>
					</ul>
				</div>
			
			</div>

			
			<div class="table-data">
			<div class="order">
					<div class="head">
					<a href="d-appointment-history.php"><button class="btn-print"><i class='bx bxs-printer' ></i> Print Audit Logs</button></a>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table class="table">
     <thead>
     	<tr>
     	 <th>Username</th>
     	 <th>Activiy</th>
     	 <th>Date & Time</th>
     	 <th>Role</th>
     	</tr>
     </thead>
     <tbody>
	 <?php
       $conn = mysqli_connect("localhost", "root", "","capstone");
       if ($conn-> connect_error) { 
        die("Connection Failed.". $conn-> connection_error);
       }
       $sql = "SELECT * from users_logs";
      $result = $conn-> query($sql);

      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()){
         echo "</tr><td>". $row["logs_username"]. 
		 "</td><td>". $row["logs_activity"]. 
		 "</td><td>". $row["logs_datentime"]. 
		 "</td><td>". $row["logs_roles"].
		 "</td><tr>";
      }
      echo "</table>";
      }
      else {
        echo "0 result";
      }
      $conn-> close();
      
?>
	
     </tbody>
	 
   </table>

				</div>

				
				
			</div>
			
			<div class="table-data">

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