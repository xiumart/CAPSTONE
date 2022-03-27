
<?php
 error_reporting(0);
include("../conn.php");
include("../admin/session.php");
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
	.namee{
		text-align: left;
		margin-top: 10%;
		margin-left: -5%;
	}
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
	.page{
		background-color: #00c2cb;
		padding: 12px;
		border: none;
		border-radius: 10%;
		color:white;
	}
	.page:hover { background-color:#00b2b3;}
	</style>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="images\logo.png" alt="" width="60px;">
			<span class="text"  style="text-shadow:0.5px 0px #000; color: black;">RNL Vision Care</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
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
			
			<!-- DROP DOWN NG EDIT PROFILE AND CHANGE PASS OK-->
			<div class="dropdown1">
			<img src="img\user.png" alt="" width="40px" class="userlogo">
				<div class="dropdown-content1">
					<a href="#changepass" id="myBtn">Change Password</a>
					<a href="#" style="color:red;">Logout</a>
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
					<h1>Appointment History</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="dashboard.php">Back</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a  href="d-appointment-history.php">Appointment History</a>
						</li>
					</ul>
				</div>
			
			</div><br>
			<style>
	#content main .table-data .order table th {
		text-align: center;
	}
	</style>
			
				<form method="post">
					<label>Search by:</label>
              <select name='search' id="price-sort" onchange="location = this.value;" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins); width: 30%;">
                <option value='0' disabled selected>Select category..</option>
                <option value='?search=name' <?php if($_GET['search']=='name'){
                  echo "selected";
                } ?>>Name</option>
                <option value='?search=contact' <?php if($_GET['search']=='contact'){
                  echo "selected";
                } ?>>Contact</option>
                <option value='?search=date' <?php if($_GET['search']=='date'){
                  echo "selected";
                } ?>>Date</option>
                <option value='?search=time' <?php if($_GET['search']=='time'){
                  echo "selected";
                } ?>>Time</option>
                <option value='?search=purpose' <?php if($_GET['search']=='purpose'){
                  echo "selected";
                } ?>>Purpose</option>
				<option value='?search=remarks' <?php if($_GET['search']=='remarks'){
                  echo "selected";
                } ?>>Remarks</option>
              </select>
						<input type="text" name="txtsearch" id="txtsearch" placeholder="Type here.." autocomplete="off" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins);width: 20%;">
						<button id="btnsearch" name="btnsearch" class="page" style="cursor: pointer;"><i class='bx bx-search' ></i></button>
						</form></br>
			<div>
			
					<table>
					<caption>Finish Appointment</caption>
     <thead>
     	<tr>
     	 <th>Name</th>
     	 <th>Contact No.</th>
     	 <th>Date</th>
		 <th>Time</th>
		 <th>Purpose</th>
		 <th>Remarks</th>
		 <th>Date and Time</th>
     	</tr>
     </thead>
     <tbody>
	 <?php
	 error_reporting(0);
     	$limit=10;
        
        $page=isset($_GET['page']) ? $_GET['page']:1;
        $start=($page-1)*$limit;
       $search=$_POST['txtsearch'];
        	
        	$sql2 =$conn->query("SELECT count(app_id) AS id FROM `appointment_history`");
 			 if ($_GET['search']=='name') {
        	$column="app_name";
        	 
        }
        elseif ($_GET['search']=='contact') {
        	$column="app_contact";

        }
        elseif ($_GET['search']=='date') {
        	$column="app_date";
        	 
        }
        elseif ($_GET['search']=='time') {
        	$column="app_time";
        	 
        }
        elseif ($_GET['search']=='purpose') {
        	$column="app_purpose";
        	 
        }
		elseif ($_GET['search']=='remarks') {
        	$column="app_remarks";
        	 
        }
     	if (isset($_POST['btnsearch'])) {
     		      
        $sql1 = "SELECT * FROM `appointment_history` WHERE `$column` LIKE '%$search%' LIMIT $start, $limit ";
        
        	}
        else{
        		$sql1 = "SELECT * FROM `appointment_history` LIMIT $start, $limit ";
        		$sql2 =$conn->query("SELECT count(app_id) AS id FROM `appointment_history`");
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

     	  	  <td data-label="Name"><?php echo $row['app_name'];?></td>
     	  	  <td data-label="Contact"><?php echo $row['app_contact'];?></td>
     	  	  <td data-label="Date"><?php echo $row['app_date'];?></td>
			  <td data-label="Time"><?php echo $row['app_time'];?></td>
			  <td data-label="Purpose"><?php echo $row['app_purpose'];?></td>
			  <td data-label="Remarks"><?php echo $row['app_remarks'];?></td>
			  <td data-label="DateTime"><?php echo $row['app_DateTime'];?></td>
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
   <a class="page" id="pre" href="d-appointment-history.php?page=<?=$prev; ?>">< Prev</a>
    	  <?php  for($i=1; $i <=$pages ; $i++): ?>
    <a class="page" href="d-appointment-history.php?page=<?=$i; ?>"><?=$i; ?></a>
                      <?php endfor; ?>
    <a class="page" id="pnext" href="d-appointment-history.php?page=<?=$next; ?>">Next ></a>
				</div>

		  </div>
				
			</div>
			
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
<style>table {
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
  padding:19px;	
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
