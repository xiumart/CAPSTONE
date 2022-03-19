
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
	.btn-print:hover { background-color:#00a2a3;}
	.btn-addpt:hover { background-color: #00a2a3}
	.btn-addpt {float:right; margin-bottom: 20px;}
	.btn-print {
		margin-top: 20px;
		float: right;
		width: 10%;
	}
	.page{
		background-color: #00c2cb;
		padding: 12px;
		border: none;
		border-radius: 10%;
	}
	.page:hover { background-color:#00b2b3;}

	.namee{margin-top: 5%;}

</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="supplier.php" class="brand">
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
			<div id="digital-clock"></div>
			<input type="checkbox" id="switch-mode" hidden>
			<script src="time.js"></script>
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
					<h1>Audit Trail</h1>
					<ul class="breadcrumb">
						<li>
							<a href="audit.php">Audit Trail</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="audit.php">Home</a>
						</li>
					</ul>
				</div>
			
			</div>
<style>
	#content main .table-data .order table th {
		text-align: center;
	}
	</style>
		
			<div class="table-data">
				<div class="order">
					<table class="table">
     <thead>
     	<tr>
		 
			<th>Username</th>
      <th>Activity</th>
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
	$limit=10;
	$page=isset($_GET['page']) ? $_GET['page']:1;
	$start=($page-1)*$limit;
	$sql2 =$conn->query("SELECT count(logs_id) AS id FROM `users_logs`");
    $sql = "SELECT * from users_logs LIMIT $start, $limit";
	$result2 = $sql2->fetch_all(MYSQLI_ASSOC);
            $total=$result2[0]['id'];
            $pages=ceil($total/$limit);
            $prev=$page-1;
            $next=$page+1;
    $result = $conn-> query($sql);

      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()){
?>
     	

		 <tr>
     	  	
     	  	<td data-label="Username"><?php echo $row['logs_username'];?></td>
     	  	<td data-label="Activity"><?php echo $row['logs_activity'];?></td>
     	  	<td data-label="Date&Time"><?php echo $row['logs_datentime'];?></td>
     	  	<td data-label="Roles"><?php echo $row['logs_roles'];?></td>
     	  </tr>
    
     	 <?php
     	}}

     	?>
     </tbody>
   </table>	

   <!--page-->
  	<br>
   <a class="page" id="pre" href="audit.php?page=<?=$prev; ?>">< Prev</a>
    	  <?php  for($i=1; $i <=$pages ; $i++): ?>
    <a class="page" href="audit.php?page=<?=$i; ?>"><?=$i; ?></a>
                      <?php endfor; ?>
    <a class="page" id="pnext" href="audit.php?page=<?=$next; ?>">Next ></a>	
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
