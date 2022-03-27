<?php
error_reporting(0);
include("session.php");
include("../conn.php");
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
			$query123 = mysqli_query($conn, "UPDATE `sales` SET type = 'Remove'  WHERE id = '$users_id'");
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
		<a href="sales-report.php" class="brand">
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
			<li class="active">
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
					<h1>Sales Report</h1>
					<ul class="breadcrumb">
						<li>
							<a href="sales-report.php">Sales Report</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="dashboard.php">Home</a>
						</li>
					</ul>
				</div>
				
			
			</div>
			<ul class="box-info">
				<li>
					
					<span class="text">
						<p>Daily Sales: <?php 
							$sql="SELECT SUM(amount) as sum_score FROM sales where date = CURRENT_DATE;";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						   <p>Weekly Sales: <?php 
						  include("../conn.php");

						  $monday = strtotime("last monday");
						$monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;
						$sunday = strtotime(date("Y-m-d",$monday)." +6 days");
						$this_week_sd = date("Y-m-d",$monday);
						$this_week_ed = date("Y-m-d",$sunday);
							$sql="SELECT SUM(amount) as sum_score FROM sales where date BETWEEN '$this_week_sd'  AND '$this_week_ed' AND `type`='cash' ";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						   <p>Monthly Sales: <?php 
						  include("../conn.php");
							$sql="SELECT MONTH(date)AS Month, SUM(amount) AS total FROM sales WHERE MONTH(date) = MONTH(CURRENT_DATE())  AND `type`='cash' GROUP BY MONTH(date), YEAR(date)";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['total'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						<h3>Sales Revenue: <?php 
							include("../conn.php");
							$sql="SELECT Year(date)AS year, SUM(amount) AS total FROM sales WHERE Year(date) = Year(CURRENT_DATE())  AND `type`='cash' GROUP BY Year(date)";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['total'];}
							
							mysqli_close($conn);
						  										
						  ?></h3>
					</span>
				</li>
				
				<li>
					
					<span class="text">
						  <p>Daily Profit: <?php include("../conn.php");
							$sql="SELECT SUM(profit) as sum_score FROM sales where date = CURRENT_DATE;";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						  <p>Weekly Profit: <?php 
						  include("../conn.php");

						  $monday = strtotime("last monday");
						$monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;
						$sunday = strtotime(date("Y-m-d",$monday)." +6 days");
						$this_week_sd = date("Y-m-d",$monday);
						$this_week_ed = date("Y-m-d",$sunday);
							$sql="SELECT SUM(profit) as sum_score FROM sales where date BETWEEN '$this_week_sd'  AND '$this_week_ed'  AND `type`='cash'";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['sum_score'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						  <p>Monthly Profit: <?php 
						  include("../conn.php");
							$sql="SELECT MONTH(date)AS Month, SUM(profit) AS total FROM sales WHERE MONTH(date) = MONTH(CURRENT_DATE())  AND `type`='cash' GROUP BY MONTH(date), YEAR(date)";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['total'];}
							
							mysqli_close($conn);
						  										
						  ?></p>
						  <h3>Total Profit: <?php 
							include("../conn.php");
							$sql="SELECT Year(date)AS year, SUM(profit) AS total FROM sales WHERE Year(date) = Year(CURRENT_DATE())  AND `type`='cash' GROUP BY Year(date)";
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)){ echo '₱'.$row['total'];}
							
							mysqli_close($conn);
						  										
						  ?></h3>
					</span>
				</li>
				
			
			</ul><br>
			<a href="sales-annual-history.php"><button class="btn-addpt" style="cursor: pointer;"> Annual Sales History</button></a>
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
<form method="post">
				<label>Search by:</label>
              <select name='search' id="price-sort" onchange="location = this.value;" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins); width: 30%;">
                <option value='0' disabled selected>Select category..</option>
                <option value='?search=id' <?php if($_GET['search']=='id'){
                  echo "selected";
                } ?>>Transaction ID</option>
                <option value='?search=date' <?php if($_GET['search']=='date'){
                  echo "selected";
                } ?>>Date</option>
                <option value='?search=name' <?php if($_GET['search']=='name'){
                  echo "selected";
                } ?>>Name</option>
                 <option value='?search=profit' <?php if($_GET['search']=='profit'){
                  echo "selected";
                } ?>>Profit</option>
                 <option value='?search=amount' <?php if($_GET['search']=='amount'){
                  echo "selected";
                } ?>>Amount</option>
              </select>
						<input type="text" name="txtsearch" id="txtsearch" placeholder="Search " autocomplete="off" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins); width: 30%;">
						<button  id="btnsearch" name="btnsearch" class="page" style="cursor: pointer;"><i class='bx bx-search' ></i></button>
			</form>
			<div>
				<div id="printing">
					<style type="text/css">
						.up{
							cursor: pointer;
						}
						.down{
							cursor: pointer;
						}
					</style>
					<table>
						<caption>Recent Transaction</caption>
     <thead>
     	<tr>
     	 <th>Transac. ID<form method=""><button class="up" value="up" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
     	 <th>Date<form method=""><button class="up" value="up1" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down1" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
     	 <th>Customer Name<form method=""><button class="up" value="up2" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down2" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
		 <th>Profit<form method=""><button class="up" value="up3" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down3" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
		 <th>Total Amount<form method=""><button class="up" value="up4" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▲</button>&nbsp<button class="down" value="down4" name="btn" style="width: 10%; height: 5%; padding: 0; margin: 0;">▼</button></form></th>
		 <th>Action</th>
     	</tr>
     </thead>
     <tbody>
     	   <?php
	include("conn.php");
      $limit=25;
        $cat=$_POST['all'];
        $page=isset($_GET['page']) ? $_GET['page']:1;
        $start=($page-1)*$limit;
      	
              $search=$_POST['txtsearch'];
        if ($_GET['search']=='id') {
        	$column="order_no";
        	 
        }
        elseif ($_GET['search']=='date') {
        	$column="date";

        }
        elseif ($_GET['search']=='name') {
        	$column="name";
        	 
        }
        elseif ($_GET['search']=='profit') {
        	$column="profit";
        	 
        }
        elseif ($_GET['search']=='amount') {
        	$column="amount";
        	 
        }
        else{

        }
      	if (isset($_POST['btnsearch'])&& $_POST['txtsearch']!="") {
      		 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' AND `$column` LIKE '%$search%'  ORDER BY `date` DESC LIMIT $start, $limit" );
      	}
      	elseif ($_GET['btn']=='down') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `order_no` DESC LIMIT $start, $limit" );
        		
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `order_no` ASC LIMIT $start, $limit" );
        		
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down1') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `date` DESC LIMIT $start, $limit" );
        		
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up1') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `date` ASC LIMIT $start, $limit" );
        		
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down2') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `name` DESC LIMIT $start, $limit" );
        		
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up2') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `name` ASC LIMIT $start, $limit" );
        		
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down3') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `profit` DESC LIMIT $start, $limit" );
        		
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up3') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `profit` ASC LIMIT $start, $limit" );
        		
        		echo "<style>.up{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='down4') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `amount` DESC LIMIT $start, $limit" );
        		
        		echo "<style>.down{ background-color:red;}</style>";
        	}
        	elseif ($_GET['btn']=='up4') {
        	 $result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `amount` ASC LIMIT $start, $limit" );
        		
        		echo "<style>.up{ background-color:red;}</style>";
        	}
      	else{
      		$result = mysqli_query($con,"SELECT * FROM sales WHERE `type`='cash' ORDER BY `date` DESC LIMIT $start, $limit" );
      	}
      	
        $sql2 =$con->query("SELECT count(id) AS id FROM `sales`");
         $result2 = $sql2->fetch_all(MYSQLI_ASSOC);
                $total=$result2[0]['id'];
                $pages=ceil($total/$limit);
                $prev=$page-1;
                $next=$page+1;
   
      
    while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td data-label='Transac. ID'>". $row['order_no'] . "</td>";
      echo "<td data-label='Date'>" . $row['date'] . "</td>";
      echo "<td data-label='Customer name'>" . $row['name'] ."</td>";
	  echo "<td data-label='Profit'>" .$row['profit']."</td>";
	  echo "<td data-label='Amount'>" .$row['amount']."</td>";
      echo "<td data-label='Transac. ID'><form method='post' action='?id=".$row["id"]."'>"?>
      <button class="btn-upd" style="cursor: pointer;" onclick="return confirm('Are you sure you want to remove this transacetion?')">Remove</button></form>
      <?php "</td></tr>";
      }

   
 
    ?>
     </tbody>
   </table>
				</div>

				
				
			</div>
			<br>
			<a class="page" id="pre" href="sales-report.php?page=<?=$prev; ?>&btn=<?php echo $_GET['btn'] ?>">< Prev</a>
    	  <?php  for($i=1; $i <=$pages ; $i++): ?>
    <a class="page" href="sales-report.php?page=<?=$i; ?>&btn=<?php echo $_GET['btn'] ?>"><?=$i; ?></a>
                      <?php endfor; ?>
    <a class="page" id="pnext" href="sales-report.php?page=<?=$next; ?>&btn=<?php echo $_GET['btn'] ?>">Next ></a>
			
			<div class="table-data">
	

				
				
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
  margin-top:50px;	
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