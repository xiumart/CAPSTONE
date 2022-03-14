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
		<a href="patient-record.php" class="brand">
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
					<h1>Patient Record</h1>
					<ul class="breadcrumb">
						<li>
							<a href="patient-record.php">Patient Record</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="patient-record.php">Home</a>
						</li>
					</ul>
				</div>
			
			</div>

			<a href="patient-addrecord.php"><button class="btn-addpt" style="cursor: pointer;"> + Add Patient</button></a>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Patient</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table class="table">
     <thead>
     	<tr>
     	 <th>Name</th>
     	 <th>Email</th>
     	 <th>Contact No.</th>
     	 <th>Address</th>
		 <th>Age</th>
		 <th>Action</th>
     	</tr>
     </thead>
     <tbody>
     	  <tr>
     	  	  <td data-label="Name">Marliardo Umbao</td>
     	  	  <td data-label="Email">marl@gmail.com</td>
     	  	  <td data-label="Contact">09481231233</td>
     	  	  <td data-label="Address">Sauyo Rd., Quezon City</td>
			  <td data-label="Age">18</td>
			  <td data-label="Action"><a href="patient-view.php"><button class="btn-view">View</button></a><button class="btn-rem">Remove</button></td>
     	  </tr>
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