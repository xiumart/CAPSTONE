<?php
error_reporting(0);
include("../conn.php");
if (isset($_GET['id'])) {
	$users_id=$_GET['id'];
	$query = "DELETE FROM `users_account` WHERE users_id='$users_id'";
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
		<a href="manage-user.php" class="brand">
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
			<li class="active">
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
				<a href="index.php" class="logout">
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
					<h1>Manage User</h1>
					<ul class="breadcrumb">
						<li>
							<a href="manage-user.php">Manage User</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="manage-user.php">Home</a>
						</li>
					</ul>
				</div>
			
			</div>

			<a href="user-add.php"><button class="btn-addpt"style="cursor: pointer;"> + Add User</button>
			<div class="table-data">
			<div class="order">
			<table class="table">
     <thead>
      <tr>
    <tr>
      <th>Lastname</th>
      <th>Firstname</th>
      <th>Middlename</th>
      <th>Username</th>
      <th>Contact Number</th>
      <th>Email</th>
      <th>Position</th>
      <th>Action</th>
      </tr>
     </thead>
     <tbody>
	 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capstone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$limit=5;
$cat=$_POST['all'];
$page=isset($_GET['page']) ? $_GET['page']:1;
$start=($page-1)*$limit;
$sql2 =$conn->query("SELECT count(users_id) AS id FROM `users_account`");
$sql = "SELECT * FROM users_account LIMIT $start, $limit ";
$result2 = $sql2->fetch_all(MYSQLI_ASSOC);
                $total=$result2[0]['id'];
                $pages=ceil($total/$limit);
                $prev=$page-1;
                $next=$page+1;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
//   echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo 
	"<tr><td>".$row["users_lastname"].
	"</td><td>".$row["users_firstname"].
	"</td><td>".$row["users_middlename"].
	"</td><td>".$row["users_username"].
	"</td><td>".$row["users_contact"].
	"</td><td>".$row["users_email"].
	"</td><td>".$row["users_roles"].
	"</td><td>
	<form method='post' action='user-update.php?users_id=".$row["users_id"]."'>"?>
	<button class="btn-upd" style="cursor: pointer;">UPDATE</button></form>
  	<?php echo "<form method='post' action='?id=".$row["users_id"]."'>" ?>
	  <button class="btn-rem" style="cursor: pointer;" onclick="return confirm('Are you sure?')">DELETE</button>
  </form><?php "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
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
   <a class="page" id="pre" href="manage-user.php?page=<?=$prev; ?>">< Prev</a>
    	  <?php  for($i=1; $i <=$pages ; $i++): ?>
    <a class="page" href="manage-user.php?page=<?=$i; ?>"><?=$i; ?></a>
                      <?php endfor; ?>
    <a class="page" id="pnext" href="manage-user.php?page=<?=$next; ?>">Next ></a>
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