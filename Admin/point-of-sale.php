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
	.btn-t {
		background-color: #00c2cb;
		border-radius: 5px;
		border:none;
		padding: 10px;
	}

	.btn-t:hover {
		background-color: red;
	}
	.btn-p {
		background-color: #00c2cb;
		border-radius: 5px;
		border:none;
		padding: 10px;
		width: 100%;
	}

	.btn-p:hover {
		background-color: #4CAF50;
		color: black;
	}


	.cust{
		width: 320px;
		padding:5px;
		font-size:20px;
	}

	.sel {
		width: 400px;
		padding:5px;
		font-size:20px;
	}
	.num {
		width:100px;
		padding:5px;
		font-size:20px;
	}
</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="point-of-sale.php" class="brand">
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
			<li>
				<a href="patient-record.php">
					<i class='bx bxs-user' ></i>
					<span class="text">Patient Record</span>
				</a>
			</li>
			<li class="active">
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
				<span class="close">&times;</span>
				<h3>CHANGE PASSWORD</h3>
				<br><hr><br>
				<h4>OLD PASSWORD</h4>
				<input type="text" class="oldpw">
				<h4>NEW PASSWORD</h4>
				<input type="text" class="newpw">
				<h4>CONFIRM PASSWORD</h4>
				<input type="text" class="conpw">
				<input type="button" value="Submit" class="cpBtn"><br><br><br><br>
				</div>
			</div>
			<script src="js\modal.js"></script>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Point of Sale</h1>
					<ul class="breadcrumb">
						<li>
							<a href="point-of-sale.php">Point of Sale</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="point-of-sale.php">Home</a>
						</li>
					</ul>
				</div>
			
			</div>
		
			
			<div class="table-data">
				
				<div class="order">
					<input type="text" class="cust">
					<select name="" id="" class="sel">

					</select>
					<input type="number" class="num"><br><br>
					<table class="table">
						<thead>
							<tr>
							<th>Product Name</th>
							<th>Generic Name</th>
							<th>Category</th>
							<th>Price</th>
							<th>Qty</th>
							<th>Amount</th>
							<th>Profit</th>
							<th>Total</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td data-label="Product name" class="brandd"><p></p></td>
								<td data-label="Generic name"></td>
								<td data-label="Category"></td>
								<td data-label="Price"></td>
								<td data-label="Qty"></td>
								<td data-label="Amount"></td>
								<td data-label="Profit"></td>
								<td data-label="Total"></td>
								<td><button type="button" class="btn-t">Cancel</button></td>
							</tr>
						</tbody>

					</div>
					</div>
				</table>
				<div><br><br>
				<button type="button" class="btn-p">PAY</button></td>
			</div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>