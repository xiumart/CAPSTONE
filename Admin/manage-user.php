<?php
error_reporting(0);
include("../conn.php");
include("session.php");
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
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
if (isset($_GET['id'])) {
	$users_id=$_GET['id'];
	$query = "DELETE FROM `users_account` WHERE users_id='$users_id'";
	users_logs($_SESSION['users_username'], "Remove User", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
			mysqli_query($conn, $query);
			echo "<script>alert('You have successfully remove the record.');</script>";
			echo "<script>document.location='manage-user.php';</script>";
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
	.down:hover { background-color:#00a2a3;}
	.up:hover { background-color:#00a2a3;}
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
	.btn-remove:hover { background-color: red;}
	.btn-f:hover { background-color: #4CAF50;}
	.btn-c:hover { background-color: red;}
	.btn-apph:hover { background-color: #00a2a3;}

	.namee{
		margin-top: 4.5%;
	}

</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="supplier.php" class="brand">
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
			<li>
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
			<li>
        <a href="inquiries.php">
          <i class='bx bxs-phone' ></i>
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
<style>
	#content main .table-data .order table th {
		text-align: center;
	}
	</style>
			<a href="user-add.php"><button class="btn-addpt" style="cursor: pointer;"> + Add User</button></a>

				<form method="post">
					<label>Search by:</label>
              <select name='search' id="price-sort" onchange="location = this.value;" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins); width: 30%;">
                <option value='0' disabled selected>Select category..</option>
                <option value='?search=lastname' <?php if($_GET['search']=='lastname'){
                  echo "selected";
                } ?>>Lastname</option>
                <option value='?search=firstname' <?php if($_GET['search']=='firstname'){
                  echo "selected";
                } ?>>Firstname</option>
                <option value='?search=username' <?php if($_GET['search']=='username'){
                  echo "selected";
                } ?>>Username</option>
                <option value='?search=contact' <?php if($_GET['search']=='contact'){
                  echo "selected";
                } ?>>Contact</option>
                <option value='?search=position' <?php if($_GET['search']=='position'){
                  echo "selected";
                } ?>>Position</option>
              </select>
						<input type="text" name="txtsearch" id="txtsearch" placeholder="Type here.." autocomplete="off" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins);width: 30%;">
						<button  id="btnsearch" name="btnsearch" class="page" style="cursor: pointer;"><i class='bx bx-search' ></i></button>
						</form></br>
					<table>
     <thead>
     	<tr>
		 
		 <th>Lastname<form method=""><button class="up" value="up" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
      <th>Firstname<form method=""><button class="up" value="up1" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down1" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
      <th>Username<form method=""><button class="up" value="up2" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down2" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
      <th>Contact Number<form method=""><button class="up" value="up3" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down3" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
      <th>Position<form method=""><button class="up" value="up4" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down4" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
      <th>Action</th>
     	</tr>
     </thead>
     <tbody>
	 
	 <?php
     	$limit=25;
        $cat=$_POST['all'];
        $page=isset($_GET['page']) ? $_GET['page']:1;
        $start=($page-1)*$limit;
       $search=$_POST['txtsearch'];
        	
        	$sql2 =$conn->query("SELECT count(users_id) AS id FROM `users_account`");
 			 if ($_GET['search']=='lastname') {
        	$column="users_lastname";
        	 
        }
        elseif ($_GET['search']=='firstname') {
        	$column="users_firstname";

        }
        elseif ($_GET['search']=='username') {
        	$column="users_username";
        	 
        }
        elseif ($_GET['search']=='contact') {
        	$column="users_contact";
        	 
        }
        elseif ($_GET['search']=='position') {
        	$column="users_roles";
        	 
        }
        else{

        }
     			if (isset($_POST['btnsearch']) && $_POST['txtsearch']!="") {
       		 $sql1 = "SELECT * FROM `users_account` WHERE `$column` LIKE '%$search%' Order by `users_id` DESC LIMIT $start, $limit ";
        	}        	
        	elseif ($_GET['btn']=='down') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_lastname` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_lastname` FROM `users_account` Order by `users_lastname` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_lastname` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_lastname` FROM `users_account` Order by `users_lastname` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down1') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_firstname` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_firstname` FROM `users_account` Order by `users_firstname` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up1') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_firstname` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_firstname` FROM `users_account` Order by `users_firstname` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        		elseif ($_GET['btn']=='down2') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_username` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_username` FROM `users_account` Order by `users_username` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up2') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_username` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_username` FROM `users_account` Order by `users_firstname` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        		elseif ($_GET['btn']=='down3') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_contact` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_contact` FROM `users_account` Order by `users_contact` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up3') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_contact` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_contact` FROM `users_account` Order by `users_contact` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down4') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_roles` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_roles` FROM `users_account` Order by `users_roles` DESC ");
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up4') {
        		$sql1 = "SELECT * FROM `users_account` Order by `users_roles` ASC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id, `users_roles` FROM `users_account` Order by `users_roles` ASC ");
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	 else{
        		$sql1 = "SELECT * FROM `users_account` Order by `users_id` DESC LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(users_id) AS id FROM `users_account`");
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
     	

     	  <tr>
     	  	
     	  	<td data-label="Lastname" class="namee"><?php echo $row['users_lastname'];?></td>
     	  	<td data-label="Firstname"><?php echo $row['users_firstname'];?></td>
     	  	<td data-label="Username"><?php echo $row['users_username'];?></td>
			<td data-label="Contact Number"><?php echo $row['users_contact'];?></td>
			<td data-label="Position"><?php echo $row['users_roles'];?></td>
			<td data-label="Action"><a href="user-update.php?id=<?php echo $row['users_id'];?>"><button class="btn-f" style="cursor: pointer;">Update</button></a>
			<form method ="post"action="archive_manageuser.php?id=<?php echo $row['users_id'];?>"><button class="btn-c" name="btnrem" style="cursor: pointer;" onclick="return confirm('Are you sure you want to remove this user?')">Remove</button></form></td>
     	  </tr>
    
     	 <?php
     	}}

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
   <a class="page" id="pre" href="manage-user.php?page=<?=$prev; ?>&btn=<?php echo $_GET['btn'] ?>">< Prev</a>
    	  <?php  for($i=1; $i <=$pages ; $i++): ?>
    <a class="page" href="manage-user.php?page=<?=$i; ?>&btn=<?php echo $_GET['btn'] ?>"><?=$i; ?></a>
                      <?php endfor; ?>
    <a class="page" id="pnext" href="manage-user.php?page=<?=$next; ?>&btn=<?php echo $_GET['btn'] ?>">Next ></a>
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
<style>
		.btn-f, .btn-c {
		background-color: #00c2cb;
		border: none;
		border-radius: 10%;
		margin-left: 10px;
		padding:4px;
	}

	.btn-f:hover { background-color: #4CAF50;}
	.btn-c:hover { background-color: red;}
	table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  background-color: #00c2cb;
  margin-top:20px;	
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
}
</style>
</html>
