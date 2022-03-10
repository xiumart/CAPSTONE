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


.select {
  height: 40px;
  width: 15%;
  overflow: hidden;
  position: absolute;
  border-radius: 3px;
  margin-bottom: 1em;
  top: 39.5%;
}

.select:after {
  content: "▼";
  padding: 12px 8px;
  position: absolute;
  right: 10px;
  top: 0;
  z-index: 1;
  text-align: center;
  width: 10%;
  height: 100%;
  pointer-events: none;
}

.select__field {
  height: 40px;
  width: 100%;
  padding: 5px 15px;
  color: #616263;
  background-color: #ececec;
  border: 1px solid #e3e3e3;
  outline: none;
  font-size: 16px;
  -webkit-appearance: none;
  /* for webkit browsers */
  -moz-appearance: none;
  /* for firefox */
  appearance: none;
  /* for modern browsers */
}


/* remove default caret for ie */

.select__field::-ms-expand {
  display: none;
}

.select__field:focus:invalid {
  border-color: #FD6347;
}

.select__field:required:valid {
  border-color: #006400;
}

.select1 {
  height: 40px;
  width: 15%;
  overflow: hidden;
  position: relative;
  border-radius: 3px;
  margin-bottom: 1em;
  left: 17%;
}

.select1:after {
  content: "▼";
  padding: 12px 8px;
  position: absolute;
  right: 10px;
  top: 0;
  z-index: 1;
  text-align: center;
  width: 10%;
  height: 100%;
  pointer-events: none;
}

.select__field1 {
  height: 40px;
  width: 100%;
  padding: 5px 15px;
  color: #616263;
  background-color: #ececec;
  border: 1px solid #e3e3e3;
  outline: none;
  font-size: 16px;
  -webkit-appearance: none;
  /* for webkit browsers */
  -moz-appearance: none;
  /* for firefox */
  appearance: none;
  /* for modern browsers */
}


/* remove default caret for ie */

.select__field1::-ms-expand {
  display: none;
}

.select__field1:focus:invalid {
  border-color: #FD6347;
}

.select__field1:required:valid {
  border-color: #006400;
}

/* input type */
input[type=number] {
        /*for absolutely positioning spinners*/
        position: absolute; 
        padding: 5px;
		padding-bottom: 7px;
		font-size: 20px;
		left: 34%;
		width: 100px;
      }

      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
        opacity: 1;
      }

      input[type=number]::-webkit-outer-spin-button, 
      input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: inner-spin-button !important;
        width: 25px;
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
      }
</style> 
			
			<div class="table-data">
				
				<div class="order">
				<input type="number" value="1" step="1" />
				<form action="#" method="post">
  <div class="select1">
    <select name="nameValueSelect1" class="select__field1" required>
      <option value="" selected>Select product</option>
      <option>Option 1</option>
      <option>Option 2</option>
      <option>Option 3</option>
      <option>Option 4</option>
      <option>Option 5</option>
      <option>Option 6</option>
    </select>
  </div>
</form>
				<form action="#" method="post">
  <div class="select">
    <select name="nameValueSelect" class="select__field" required>
      <option value="" selected>Select customer</option>
      <option>Option 1</option>
      <option>Option 2</option>
      <option>Option 3</option>
      <option>Option 4</option>
      <option>Option 5</option>
      <option>Option 6</option>
    </select>
  </div>
</form>

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
     	  	  <td></td>
     	  	  <td></td>
     	  	  <td></td>
     	  	  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td><button type="button" class="btn btn-warning">Cancel</button></td>
     	  </tr>
</tbody>

  </div>
</div>

</table>
<div><br>
				<a href="#"><button style="background-color:#00c2cb;
				float:right;
				font-size:15px;
				border:none;
				padding: 10px;
				cursor:pointer;
				width: 10%;
				border-radius:10px;">PAY</button></a>
			</div>

					<!-- <div class="head">
						<h3></h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div> -->
<div class="table-data">
<div class="order">
					
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