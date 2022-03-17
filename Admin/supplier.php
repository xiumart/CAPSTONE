<?php
error_reporting(0);
include("../conn.php");
if (isset($_GET['id'])) {
	$supp_id=$_GET['id'];
	$query = "DELETE FROM `supplier` WHERE supp_id='$supp_id'";
			mysqli_query($conn, $query);
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
					<h1>Supplier</h1>
					<ul class="breadcrumb">
						<li>
							<a href="supplier.php">Supplier</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="supplier.php">Home</a>
						</li>
					</ul>
				</div>
			
			</div>
<style>
	#content main .table-data .order table th {
		text-align: center;
	}
	</style>
			<a href="supplier-add.php"><button class="btn-addpt" style="cursor: pointer;"> + Add Supplier</button></a>
			<div class="table-data">
				<div class="order">
					<table class="table">
     <thead>
     	<tr>
		 
     	 <th>Company Name</th>
		 <th>Contact Person</th>
     	 <th>Contact No.</th>
     	 <th>Email</th>
		 <th>Description</th>
		 <th>Action</th>
     	</tr>
     </thead>
     <tbody>
	 <?php
       $conn = mysqli_connect("localhost", "root", "","capstone");
       if ($conn-> connect_error) { 
        die("Connection Failed.". $conn-> connection_error);
       }
	$limit=5;
	// $cat=$_POST['all'];
	$page=isset($_GET['page']) ? $_GET['page']:1;
	$start=($page-1)*$limit;
	$sql2 =$conn->query("SELECT count(supp_id) AS id FROM `supplier`");
    $sql = "SELECT * from supplier LIMIT $start, $limit";
	$result2 = $sql2->fetch_all(MYSQLI_ASSOC);
            $total=$result2[0]['id'];
            $pages=ceil($total/$limit);
            $prev=$page-1;
            $next=$page+1;
    $result = $conn-> query($sql);

      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()){
         echo "<tr><td>". $row["supp_cname"]. 
		 "</td><td>". $row["supp_contactperson"]. 
		 "</td><td>". $row["supp_contact"]. 
		 "</td><td>". $row["supp_email"].
		 "</td><td>". $row["supp_desc"].
		 "</td><td>
		 <form method='post' action='supplier-update.php?supp_id=".$row["supp_id"]."'>"?>
		 <button class="btn-upd" style="cursor: pointer;">Update</button></form></td>
		   <td><?php echo "<form method='post' action='?id=".$row["supp_id"]."'>" ?>
		   <button class="btn-rem" style="cursor: pointer;" onclick="return confirm('Are you sure?')">Remove</button>
	   </form></td><?php "</tr>";
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
   <br>
  	<?php
  	if ($_GET['page']==1) {
  		
  	}
  	elseif ($_GET['page']==1) {
  		# code...
  	}
  	?>
   <a class="page" id="pre" href="supplier.php?page=<?=$prev; ?>">< Prev</a>
    	  <?php  for($i=1; $i <=$pages ; $i++): ?>
    <a class="page" href="supplier.php?page=<?=$i; ?>"><?=$i; ?></a>
                      <?php endfor; ?>
    <a class="page" id="pnext" href="supplier.php?page=<?=$next; ?>">Next ></a>
				</div>
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