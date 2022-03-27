<?php
error_reporting(0);
include("../conn.php");
include("session.php");
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
$patt=$_GET['id'];
if (isset($_GET['id'])) {
	// code...

$query = "UPDATE `patient_distancerx` SET `status`='Remove' WHERE `patient_no`='$patt'";
users_logs($_SESSION['users_username'], "Remove Patient", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
	mysqli_query($conn, $query);
}
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
	.btn-addp:hover { background-color: #00a2ab}
	.btn-addpt:hover { background-color: #00b2b3;}

	.btn-addpt {float:right; margin-bottom: 20px;}
	
	.patientss{
		margin-top: 25%;
	}
	@media(max-width: 700px){
		.patientss{
		float: right.;
	}
	}
	.page{
		background-color: #00c2cb;
		padding: 12px;
		border: none;
		border-radius: 10%;
		color:white;
	}
	.page:hover { background-color:#00b2b3;}

	.btn-apph {
		background-color: #00c2cb;
		padding: 15px;
		border: none;
		border-radius: 10%;
		float: right;
		margin-left: 10px;

		
	}
	.btn-f, .btn-c {
		background-color: #00c2cb;
		border: none;
		border-radius: 10%;
		margin-left: 10px;
		padding:4px;
	}
	.btn-remove {
		background-color: #00c2cb;
		border: none;
		border-radius: 10%;
		margin-left: 60%;
		padding:8px;
	}
	.btn-f:hover { background-color: #4CAF50;}
	.btn-c:hover { background-color: red;}
	.btn-apph:hover { background-color: #00a2a3;}
	.btn-remove:hover { background-color: red;}
	.namee{
		margin-top: 4.5%;
	}

</style>
<body>
   

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
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
			<li class="active">
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
			<li>
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
				<a href="audit.php">
					<i class='bx bxs-phone'></i>
					<span class="text">Client Inquiries</span>
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
			<h4><?php echo $_SESSION['users_username']; ?></h4>
			<div class="dropdown2">
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">
				<?php 
				$query = mysqli_query($conn, "SELECT COUNT(*) as total from product  WHERE qty <=10 AND pro_status ='2'");
					while($result=mysqli_fetch_array($query)){
					echo $result['total']; 
				}			
				?>
						  </span>			  
			</a>
			<?php

if (isset($_GET['eid'])) {
	$pro_id=$_GET['eid'];

	$query1 = "UPDATE `product` SET pro_status = '1' WHERE pro_id = '$pro_id'";
	mysqli_query($conn, $query1);
			}
			?>
			
				<div class="dropdown-content2">
					<h4 id="textnotif">Notification</h4><br><hr>
					
			<table>
			  
			  <?php
			$sql1 = "SELECT * FROM `product` WHERE pro_status='2' AND qty <=10 LIMIT 6";
			$result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){ 
					$qty = $row['qty'];
					$model = $row['model'];
			  ?>
			  <tr>
			  <th><h4 style="color: red;">Low Product:</h4></th>
			  <td><p><?php 
					if ($qty<=10) {
						echo "Model: " . $row['model'] ."&nbsp<br>";		
						echo "QTY: " . $row['qty'];
							}
			  ?>
				</p></td><td><a href="?eid=<?php echo $row['pro_id'];?>"><button class="btn-remove" name="btnremove" style="cursor: pointer;">Clear</button></a></td>
							</tr>
							<?php
				  }}
			  ?>
			  </table>

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
<a href="javascript:Clickheretoprint()">	<button class="btn-addp" style="float:right; width: 100px; cursor: pointer;"><i class='bx bxs-printer' ></i> Print </button></a>
<!--print-->
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>
<script language="javascript">
function Clickheretoprint()
{ 
	
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=1000, height=1000, left=100, top=25"; 
  var content_vlue = document.getElementById("printing").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:9px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
   
}
</script>
			<!-- TABLE ONGOING -->
			
				<form method="post">
					<label>Search by:</label>
              <select name='search' id="price-sort" onchange="location = this.value;" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins); width: 30%;">
                <option value='0' disabled selected>Select category..</option>
                <option value='?search=id' <?php if($_GET['search']=='id'){
                  echo "selected";
                } ?>>Patient ID</option>
                <option value='?search=name' <?php if($_GET['search']=='name'){
                  echo "selected";
                } ?>>Name</option>
                <option value='?search=contactNo' <?php if($_GET['search']=='contactNo'){
                  echo "selected";
                } ?>>Contact No</option>
                <option value='?search=address' <?php if($_GET['search']=='address'){
                  echo "selected";
                } ?>>Address</option>
              </select>
						<input type="text" name="txtsearch" id="txtsearch" placeholder="Search" autocomplete="off" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins);width: 30%;">
						<button  id="btnsearch" name="btnsearch" class="page"><i class='bx bx-search' ></i></button>
						</form>
						<div id="printing">
				<table>
						<caption>LIST OF PATIENT</caption>
						<thead>
						<tr>						
							<th scope="col">Patient ID<form method=""><button class="up" value="up" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>

							<th scope="col">Name<form method=""><button class="up" value="up1" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down1" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>

							<th scope="col">Contact No.<form method=""><button class="up" value="up2" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down2" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>

							<th scope="col">Address<form method=""><button class="up" value="up3" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down3" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>

							<th scope="col">Age<form method=""><button class="up" value="up4" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down4" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
							<th scope="col">Action</th>
						</tr>
				
						</thead>
						<tbody>
							<tr>
							<?php
          	
     	$limit=25;
        //$cat=$_POST['all'];
        $page=isset($_GET['page']) ? $_GET['page']:1;
        $start=($page-1)*$limit;

        $search=$_POST['txtsearch'];
        $sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx` AND `status`!='Remove' LIMIT $start, $limit");
     	
         if ($_GET['search']=='id') {
        	$column="patient_id";

        }
        elseif ($_GET['search']=='name') {
        	$column="patient_name";
        	 
        }
        elseif ($_GET['search']=='contactNo') {
        	$column="patient_contact";
        	 
        }
        elseif ($_GET['search']=='address') {
        	$column="patient_address";
        	 
        }
        
        
     	if (isset($_POST['btnsearch'])) {
     		
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx`");
     		
        $sql1 = "SELECT $column, year(now())-year(`patient_bday`) AS age,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address`  FROM `patient_distancerx` WHERE `patient_id` LIKE '%$search%' OR `patient_name` LIKE '%$search%' OR `patient_address` LIKE '%$search%' OR `patient_contact` LIKE '%$search%' AND `status`!='Remove' Order by `add_date` DESC LIMIT $start, $limit ";
        if ($search=='') {
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx`");
        $sql1 = "SELECT year(now())-year(`patient_bday`) AS age,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address`  FROM `patient_distancerx` WHERE `status`!='Remove' Order by `add_date` DESC  LIMIT $start, $limit ";
        }
     	}
    	 	elseif ($_GET['btn']=='down') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_id` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_id` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_id` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_id` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down1') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_name` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_name` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up1') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_name` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_name` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down2') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_contact` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_contact` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up2') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_contact` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_contact` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down3') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_address` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_address` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up3') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_address` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx` WHERE `status`!='Remove' Order by `patient_address` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down4') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `age` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id,year(now())-year(`patient_bday`) AS age FROM `patient_distancerx` WHERE `status`!='Remove' Order by `age` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up4') {
        		$sql1 = "SELECT year(now())-year(`patient_bday`) AS age ,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address` FROM `patient_distancerx` WHERE `status`!='Remove' Order by `age` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(patient_no) AS id,year(now())-year(`patient_bday`) AS age FROM `patient_distancerx` WHERE `status`!='Remove' Order by `age` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}


     	else{ 
     	$sql2 =$conn->query("SELECT count(patient_no) AS id FROM `patient_distancerx`");
        $sql1 = "SELECT year(now())-year(`patient_bday`) AS age,`patient_no`,`patient_id`,`patient_name`,`patient_email`,`patient_contact`,`patient_address`,`add_date`  FROM `patient_distancerx` WHERE `status`!='Remove' Order by `add_date` DESC LIMIT $start, $limit ";	
     	}

        $result2 = $sql2->fetch_all(MYSQLI_ASSOC);
                $total=$result2[0]['id'];
                $pages=ceil($total/$limit);
                $prev=$page-1;
                $next=$page+1;
     	  $result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){


     	?>
							<td data-label="Patient ID"><?php echo $row['patient_id'];?></td>
							<td data-label="Name"><?php echo $row['patient_name'];?></td>
							<td data-label="Contact No."><?php echo $row['patient_contact'];?></td>
							<td data-label="Address"><?php echo $row['patient_address'];?></td>
							<td data-label="Age"><?php echo $row['age'];?></td>
							<td data-label="Action"><form method="post"action="archive_patientsrec.php?id=<?php echo $row['patient_no'];?>"><button class="btn-c" name="btnrem"style="cursor: pointer;width:100px;pad" onclick="return confirm('Are you sure you want to remove this patient?')">REMOVE</button></form>
			  				<a href="patient-view.php?id=<?php echo $row['patient_no'];?>"><button class="btn-f" style="cursor: pointer;width:100px;">VIEW</button></td>
							</tr>
							<?php
     	}}
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
			</div><br>
			<a class="page" id="pre" href="patient-record.php?page=<?=$prev; ?>&btn=<?php echo $_GET['btn'] ?>">< Prev</a>
    	  <?php  for($i=1; $i <=$pages ; $i++): ?>
    <a class="page" href="patient-record.php?page=<?=$i; ?>&btn=<?php echo $_GET['btn'] ?>"><?=$i; ?></a>
                      <?php endfor; ?>
    <a class="page" id="pnext" href="patient-record.php?page=<?=$next; ?>&btn=<?php echo $_GET['btn'] ?>">Next ></a>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
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
	<script src="script.js"></script>
</body>
<style>
.btn-f:hover { background-color: #4CAF50;}
	.btn-c:hover { background-color: red;}
.btn-f, .btn-c {
		background-color: #00c2cb;
		border: none;
		border-radius: 10%;
		margin-left: 10px;
		padding:2px;
	}
table {
  border: 2px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  margin-top:20px;
  font-size: 1.5em;
  background-color:#00c2cb;
  padding:2px;
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