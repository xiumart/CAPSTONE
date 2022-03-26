<?php
//error_reporting(0);
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
if (isset($_POST['btncancel'])) {
			header("Location: product.php");
		}
if (isset($_POST['btnupdate'])) {
			//something was posted
		$pro_id1 = $_GET['id'];
		$brandname = $_POST['brand'];
		$model = $_POST['model'];
		$category = $_POST['category'];
		$dateofarrival = $_POST['dtarrival'];
		$expirationdate = $_POST['expdate'];
		$sellingprice = $_POST['sell'];
		$originalprice = $_POST['orig'];
		$profit = $sellingprice - $originalprice;
		$supplier = $_POST['supplier'];
		$qty = $_POST['qty'];
		$remarks=$_POST['remarks'];
		//picture coding
		$picture_name=$_FILES['picture']['name'];
		$picture_type=$_FILES['picture']['type'];
		$picture_tmp_name=$_FILES['picture']['tmp_name'];
		$picture_size=$_FILES['picture']['size'];
if (isset($_POST['chkpic'])) {

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"images/product_img/".$pic_name);
        
        
	
			//save to database
			//$user_id = random_num(20);
			$query = "UPDATE `product` SET `brand`='$brandname',`model`='$model',`category`='$category',`dateofarrival`='$dateofarrival',`expdate`='$expirationdate',`sellingprice`='$sellingprice',`origprice`='$originalprice',`profit`='$profit',`supplier`='$supplier',`qty`='$qty',`image`='$pic_name',`remarks`='$remarks'WHERE `pro_id`='$pro_id1'";
			users_logs($_SESSION['users_username'], "Updated Product", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
			mysqli_query($conn, $query);
			echo "<script>alert('You have successfully updated the record.');</script>";
			echo "<script>document.location='product.php';</script>";
			die;
		
}}
else{
	$pic_name=$_POST['hidpic'];
	$query = "UPDATE `product` SET `brand`='$brandname',`model`='$model',`category`='$category',`dateofarrival`='$dateofarrival',`expdate`='$expirationdate',`sellingprice`='$sellingprice',`origprice`='$originalprice',`profit`='$profit',`supplier`='$supplier',`qty`='$qty',`image`='$pic_name',`remarks`='$remarks'WHERE `pro_id`='$pro_id1'";
			users_logs($_SESSION['users_username'], "Updated Product", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
			mysqli_query($conn, $query);
			echo "<script>alert('You have successfully updated the record.');</script>";
			echo "<script>document.location='product.php';</script>";
			die;
}
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
	<style>
	input[type=text], select, textarea {
  		width: 100%;
  		padding: 12px;
  		border: 1px solid #ccc;
  		border-radius: 4px;
  		resize: vertical;
	}

	label {
  		padding: 12px 12px 12px 0;
  		display: inline-block;
	}

	input[type=submit] {
	background-color: #04AA6D;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: right;
	}

	input[type=submit]:hover {
	background-color: #00c2cb;
	}

	.container {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
	}

	.col-25 {
	float: left;
	width: 25%;
	margin-top: 6px;
	}

	.col-75 {
	float: left;
	width: 75%;
	margin-top: 6px;
	}

	/* Clear floats after the columns */
	.row:after {
	content: "";
	display: table;
	clear: both;
	}

	/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {
	.col-25, .col-75, input[type=submit] {
		width: 100%;
		margin-top: 0;
	}
	}
	button {
	padding: 12px;
	border: none;
	margin: 3px;
	border-radius: 10%;
	float: right;
	width: 200px;
	color: white;
	cursor: pointer;
	}								
	
	.btn-can { background-color: #DB504A;}
	.btn-upd { background-color : #4CAF50}
	.btn-can:hover { background-color:#FD7238; }
	.btn-upd:hover { background-color:#00c2cb; }
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
</head>
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
			<li class="active">
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
			<div class="dropdown2">
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">
				<?php 
				$query = mysqli_query($conn, "SELECT COUNT(*) as total from client_inquiries, product  WHERE inquiries_status = '2' AND qty <=10 AND pro_status ='2'");
					while($result=mysqli_fetch_array($query)){
					echo $result['total']; 
				}			
				?>
						  </span>			  
			</a>
			<?php

if (isset($_GET['id'])) {
	$users_id=$_GET['id'];

	$query = "UPDATE `client_inquiries` SET inquiries_status = '1' WHERE inquiries_id = '$users_id'";
	mysqli_query($conn, $query);
	
			}
			?>
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
			   require_once("../db/notification/notifdisplay.php");
              while($row = mysqli_fetch_assoc($query)){
				  
            ?>
				<tr>
					<th><h4>Inquiry:</h4></th><p><td><?php echo $row['inquiries_message']; ?></p></td><td><a href="?id=<?php echo $row['inquiries_id'];?>"><button class="btn-remove" name="btnremove" style="cursor: pointer;">Clear</button></a></td><hr color="wheat">
			  </tr>
			  <?php
			  }
			  ?>
			  
			  <?php
			$sql1 = "SELECT * FROM `product` WHERE pro_status='2'  LIMIT 6";
			$result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){ 
					$qty = $row['qty'];
					$model = $row['model'];
			  ?>
			  <tr>
					<th><h4>Product:</h4></th>
			  <td><p><?php 
					if ($qty<=10) {
						echo $row['model'] ."&nbsp";		
						echo $row['qty'];
							}
			  ?>
				</p></td><td><a href="?eid=<?php echo $row['pro_id'];?>"><button class="btn-remove" name="btnremove" style="cursor: pointer;">Clear</button></a></td>
							</tr>
							<?php
				  }}
			  ?>
			  </table>
			  
					
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
					<h1>Update Product</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="product.php">Back</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="product-add .php">Update Product</a>
						</li>
					</ul>
				</div>
			
			</div>

			
		<div class="table-data">
			<div class="order">
				<?php
				$id=$_GET['id'];
				$sql1 = "SELECT * FROM `product` WHERE `pro_id`= '$id'";
 				$result1 = $conn->query($sql1);  
				if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){
  					$brand =$row['brand'];
  					$model =$row['model'];
  					$category =$row['category'];
					$origprice =$row['origprice'];
					$sellingprice =$row['sellingprice'];
					$qty =$row['qty'];
					$remarks =$row['remarks'];
					$image =$row['image'];
					$supp1 =$row['supplier'];


  				}}
  					
				?>
			
				<form method="post" enctype="multipart/form-data">
				<div class="row">
						<div class="row">
						<div class="col-25">
							<label for="brand">Brand Name</label>
						</div>
						<div class="col-75">
							<input type="text" id="brand" name="brand" placeholder="Enter brand name.." value="<?php echo $brand;?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="model">Model</label>
						</div>
						<div class="col-75">
							<input type="text" id="model" name="model" placeholder="Enter model name.." value="<?php echo $model;?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="category">Category</label>
						</div>
						<div class="col-75">
							<select id="category" name="category">
							<option disabled="" selected="">Select your option..</option>
							<option value="Accessories" 
							<?php
							if ($category=="Accessories") {
								echo "selected";
							}
							?>	

							>Accessories</option>

							<option value="Contact Lenses"
							<?php
							if ($category=="Contact Lenses") {
								echo "selected";
							}
							?>	
							>Contact Lenses</option>

							<option value="Eyewear for Adults"
							<?php
							if ($category=="Eyewear for Adults") {
								echo "selected";
							}
							?>	
							>Eyewear for Adults</option>

							<option value="Eyewear for Kids"
							<?php
							if ($category=="Eyewear for Kids") {
								echo "selected";
							}
							?>	
							>Eyewear for Kids</option>

							<option value="Seen Wear"
							<?php
							if ($category=="Seen Wear") {
								echo "selected";
							}
							?>	
							>Seen Wear</option>

							<option value="Sunglasses"
							<?php
							if ($category=="Sunglasses") {
								echo "selected";
							}
							?>	
							>Sunglasses</option>
							</select>
							
						</div>
						</div>
						<?php 
						$id=$_GET['id'];
						$sql3 = "SELECT * FROM `product` WHERE `pro_id`= '$id'";
 						$result3 = $conn->query($sql3);  
						if($result3->num_rows > 0){
  						while($row = $result3 -> fetch_assoc()){
						?>
						<div class="row">
						<div class="col-25">
							<label for="dtarrival">Date of Arrival</label>
						</div>
						<div class="col-75">
							<input type="date" id="dtarrival" name="dtarrival" placeholder="Enter Arrival Date.." style="width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;" value="<?php echo $row['dateofarrival'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="expdate">Expiration Date</label>
						</div>
						<div class="col-75">
							<input type="date" id="expdate" name="expdate" placeholder="Enter Expiration date.." style="width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;" value="<?php echo $row['expdate'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="lname">Original Price</label>
						</div>
						<div class="col-75">
							<input type="number" id="origp" name="orig" placeholder="Enter original price.." style="width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;" value="<?php echo $origprice;?>">
						</div>
						</div>
					<?php }} ?>	
						<div class="row">
						<div class="col-25">
							<label for="sell">Selling Price</label>
						</div>
						<div class="col-75">
							<input type="number" id="sell" name="sell" placeholder="Enter selling price.." style="width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;" value="<?php echo $sellingprice;?>">
						</div>
						</div>
						
						<div class="row">
						<div class="col-25">
							<label for="supplier">Supplier</label>
						</div>
						<div class="col-75">
							<select id="supplier" name="supplier">
								
							<option disabled="" >Select your option..</option>
							<?php 
						$sql9 = "SELECT * FROM `supplier`";
 						$result9 = $conn->query($sql9);  
						if($result9->num_rows > 0){
  						while($row = $result9 -> fetch_assoc()){

  						$supp=$row['supp_cname'];
  						
						?>
							<option value="<?php echo $supp; ?>"
							<?php
							if ($supp==$supp1) {
								echo "selected";
							}
							
							?>	
							><?php echo $supp; ?> </option>
							<?php 
					}}
						?>
							</select>
						</div>
						</div>

						<div class="row">
						<div class="col-25">
							<label for="qty">Qty</label>
						</div>
						<div class="col-75">
							<input type="number" id="qty" name="qty"  placeholder="Enter quantity.." style="width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;" value="<?php echo $qty;?>">

						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="subject">Remarks</label>
						</div>
						<div class="col-75">
							<textarea id="remarks" name="remarks" placeholder="Write something.." style="height:200px"><?php echo $remarks;?></textarea>
						</div>
						</div>
						<div class="col-25">
							<label for="fname">Update Image <input type="checkbox" name="chkpic" id="myCheck" onclick="myFunction()"></label>
							<script type="text/javascript">
								function myFunction() {
 							 // Get the checkbox
 							 var checkBox = document.getElementById("myCheck");
 							 // Get the output text
							  var text = document.getElementById("uploadfile");

 							 // If the checkbox is checked, display the output text
 							 if (checkBox.checked == true){
							    text.style.display = "block";
							  } else {
							    text.style.display = "none";
							  }
							}
							</script>
						</div>
						<div class="col-75">
							<input type="file" name="picture" id="uploadfile" accept="image/*" onchange="loadFile(event)" style="
							width: 40%;
  							padding: 8px;
							border: 1px solid #ccc;
							border-radius: 4px;display: none;
							" value="<?php echo $image;?>">
							
						</div>
						<input type="text" name="hidpic" value="<?php echo $image;?>" hidden>
						<img src="images/product_img/<?php echo $image;?>" id="output" alt="" style="width: 30%; height: 30%">
							<!--Image Viewer-->
								<script>
									var loadFile = function(event) {
										var image = document.getElementById('output');
										image.src = URL.createObjectURL(event.target.files[0]);
									};
								</script>
						</div>
						<div class="row">
							<a href="product.php"><button onclick="product.php" class="btn-can" name="btncancel">Cancel</button></a>
							<button class="btn-upd" name="btnupdate">Update</button>
						
						</div>
				</form>
			<?php
		//}}
			?>
			</div>
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