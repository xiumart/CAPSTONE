<?php
error_reporting(0);
include("../conn.php");
$patt=$_GET['id'];
if (isset($_GET['id'])) {
	// code...

$query = "UPDATE `patient_distancerx` SET `status`='Remove' WHERE `patient_no`='$patt'";
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
		cursor: pointer;
	}

	.btn-view:hover { background-color: #4CAF50;}
	.btn-rem:hover { background-color: red;}
	.btn-print:hover { background-color:blue;}
	.btn-addp:hover { background-color: #e5eaf0}
	.btn-addpt:hover { background-color: #00b2b3;}

	.btn-addpt {float:right; margin-bottom: 20px;}
	
	.patientss{
		margin-top: 25%;
	}

</style>
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
			<div id="digital-clock"></div>
			<script src="time.js"></script>
			<input type="checkbox" id="switch-mode" hidden>
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
				<form method="post">
						<input type="text" name="txtsearch" id="txtsearch" placeholder="Search by Patients ID or Name" autocomplete="off" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins);">
						<button  id="btnsearch" name="btnsearch" class="page"><i class='bx bx-search' ></i></button>
						</form></br>
					<div class="head">
						<h3>List of Patient</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<style type="text/css">
							th{
								cursor: pointer;
							}
}
						</style>
					<table class="table">
     <thead>
     	<tr>
     	<th class="th-sm">Patient Id</th>
     	 <th class="th-sm">Name</th>
     	 <th class="th-sm">Email</th>
     	 <th class="th-sm">Contact No.</th>
     	 <th class="th-sm">Address</th>
		 <th class="th-sm">Age</th>
		 <th class="th-sm">Action</th>
     	</tr>

     </thead>
     <script type="text/javascript">
							const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) => 
    v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
    )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
    const table = th.closest('table');

    Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
        .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
        .forEach(tr => table.appendChild(tr) );
})));
						</script>
     <tbody>
     	<tr></tr>
     	
          	<?php
          	error_reporting(0);
     	$limit=25;
        //$cat=$_POST['all'];
        $page=isset($_GET['page']) ? $_GET['page']:1;
        $start=($page-1)*$limit;
     	$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx`");
        $sql1 = "SELECT year(now())-year(`patient_bday`) AS age,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address`  FROM `patient_distancerx` WHERE `status`='Walk-in' OR `status`='Appointment'  LIMIT $start, $limit ";
        $result2 = $sql2->fetch_all(MYSQLI_ASSOC);
                $total=$result2[0]['id'];
                $pages=ceil($total/$limit);
                $prev=$page-1;
                $next=$page+1;
     	  $result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){


     	?>
     
     	  <tr>
     	  	<td data-label="Patient Id" class="patientss"><?php echo $row['patient_id'];?></td>
     	  	  <td data-label="Name"><?php echo $row['patient_name'];?></td>
     	  	  <td data-label="Email"><?php echo $row['patient_email'];?></td>
     	  	  <td data-label="Contact"><?php echo $row['patient_contact'];?></td>
     	  	  <td data-label="Address"><?php echo $row['patient_address'];?></td>
			  <td data-label="Age"><?php echo $row['age'];?></td>
			  <td data-label="Action"><a href="patient-view.php?id=<?php echo $row['patient_no'];?>"><button class="btn-view">View</button></a><a href="?id=<?php echo $row['patient_no'];?>"><button class="btn-rem" >Remove</button></a></td>

     	  </tr>
     
      	 <?php
     	}}

     	?>
     	
     	<?php
$id=$_GET['id'];

$sql2 = "SELECT * FROM `patient_distancerx` WHERE `patient_no`='$id'";
 $result2 = $conn->query($sql2);  
  			if($result2->num_rows > 0){
  				while($row = $result2 -> fetch_assoc()){
  					$name=$row['patient_name'];
  					$pat_id=$row['patient_id'];
  				}}
  					?>
  		<form method="post">
     	<input type="text" name="idd" value="<?php echo $pat_id;?>" hidden>
    </form>
     	</tbody>
   </table>
   <a class="page" id="pre" href="patient-record.php?page=<?=$prev; ?>">< Prev</a>
    	  <?php  for($i=1; $i <=$pages ; $i++): ?>
    <a class="page" href="patient-record.php?page=<?=$i; ?>"><?=$i; ?></a>
                      <?php endfor; ?>
    <a class="page" id="pnext" href="patient-record.php?page=<?=$next; ?>">Next ></a>
				</div>

				
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>