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
					<span class="text">Product</span>
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
			<style>
.dropbtn {
  background-color: #00c2cb;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  width: 110%;
}

.dropdown {
  position: relative;
  display: inline-block;
  border-radius: 8px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 8px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-radius: 8px;
}

.dropdown-content a:hover {
	background-color: #00c2cb;
	
}

.dropdown:hover .dropdown-content {
  display: block;
  border-radius: 8px;
}

.dropdown:hover .dropbtn {
  background-color: #2881e0;
  border-radius: 8px;
}
.dropbtn1 {
  background-color: #00c2cb;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  width: 110%;
  margin-left: 20%;
}

.dropdown1 {
  position: relative;
  display: inline-block;
  border-radius: 8px;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 8px;
}

.dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-radius: 8px;
}

.dropdown-content1 a:hover {
	background-color: #00c2cb;
	
}

.dropdown1:hover .dropdown-content1 {
  display: block;
  border-radius: 8px;
  margin-left: 20%;
}

.dropdown1:hover .dropbtn1 {
  background-color: #2881e0;
  border-radius: 8px;
}
</style>
			
			<div class="table-data">
				<div class="order">
					<!-- <div class="head">
						<h3></h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div> -->
					<div class="dropdown">
  <button class="dropbtn">Customer name</button>
  <div class="dropdown-content">
    <a href="#">Name</a>
    <a href="#">Name</a>
    <a href="#">Name</a>
  </div>
</div>
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
		 <th>Action</th>
     	</tr>
     </thead>
	 <tbody>
     	  <tr>
     	  	  <td></td>
     	  	  <td></td>
     	  	  <td></td>
     	  	  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td><button>Cancel</button></td>
     	  </tr>
</tbody>
				</div>
	
			</div>
			<div class="dropdown1">
  <button class="dropbtn1">Product name</button>
  <div class="dropdown-content1">
    <a href="#">Name</a>
    <a href="#">Name</a>
    <a href="#">Name</a>
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