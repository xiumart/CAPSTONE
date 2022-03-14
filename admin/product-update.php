<?php
error_reporting(0);
include("../conn.php");
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
			mysqli_query($conn, $query);

			header("Location: product.php");
			die;
		
}}
else{
	$pic_name=$_POST['hidpic'];
	$query = "UPDATE `product` SET `brand`='$brandname',`model`='$model',`category`='$category',`dateofarrival`='$dateofarrival',`expdate`='$expirationdate',`sellingprice`='$sellingprice',`origprice`='$originalprice',`profit`='$profit',`supplier`='$supplier',`qty`='$qty',`image`='$pic_name',`remarks`='$remarks'WHERE `pro_id`='$pro_id1'";
			mysqli_query($conn, $query);

			header("Location: product.php");
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

</style>
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
				?>
			
				<form method="post" enctype="multipart/form-data">
				<div class="row">
						<div class="row">
						<div class="col-25">
							<label for="brand">Brand Name</label>
						</div>
						<div class="col-75">
							<input type="text" id="brand" name="brand" placeholder="Enter brand name.." value="<?php echo $row['brand'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="model">Model</label>
						</div>
						<div class="col-75">
							<input type="text" id="model" name="model" placeholder="Enter model name.." value="<?php echo $row['model'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="category">Category</label>
						</div>
						<div class="col-75">
							<select id="category" name="category">
							<option disabled="" selected="">Select your option..</option>
							<option value="Contact Lens Solution" 
							<?php
							if ($row['category']=="Contact Lens Solution") {
								echo "selected";
							}
							?>	

							>Contact Lens Solution</option>
							<option value="Contact Lenses"
							<?php
							if ($row['category']=="Contact Lenses") {
								echo "selected";
							}
							?>	
							>Contact Lenses</option>
							<option value="Reading Glasses"
							<?php
							if ($row['category']=="Reading Glasses") {
								echo "selected";
							}
							?>	
							>Reading Glasses</option>
							<option value="Accessories"
							<?php
							if ($row['category']=="Accessories") {
								echo "selected";
							}
							?>	
							>Accessories</option>
							</select>
						</div>
						</div>
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
							<input type="number" id="origp" name="orig" placeholder="Enter original price.." style="width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;" value="<?php echo $row['origprice'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="sell">Selling Price</label>
						</div>
						<div class="col-75">
							<input type="number" id="sell" name="sell" placeholder="Enter selling price.." style="width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;" value="<?php echo $row['sellingprice'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="supplier">Supplier</label>
						</div>
						<div class="col-75">
							<select id="supplier" name="supplier">
							<option disabled="" selected="">Select your option..</option>
							<option value="Supplier"
							<?php
							if ($row['supplier']=="Supplier") {
								echo "selected";
							}
							?>	
							>Supplier </option>
							<option value=""></option>
							<option value=""></option>
							</select>
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="qty">Qty</label>
						</div>
						<div class="col-75">
							<input type="number" id="qty" name="qty" placeholder="Enter quantity.." style="width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;" value="<?php echo $row['qty'];?>">
						</div>
						</div>
						<div class="row">
						<div class="col-25">
							<label for="subject">Remarks</label>
						</div>
						<div class="col-75">
							<textarea id="remarks" name="remarks" placeholder="Write something.." style="height:200px"><?php echo $row['remarks'];?></textarea>
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
							" value="<?php echo $row['image'];?>">
							
						</div>
						<input type="text" name="hidpic" value="<?php echo $row['image'];?>" hidden>
						<img src="images/product_img/<?php echo $row['image'];?>" id="output" alt="" style="width: 30%; height: 30%">
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
		}}
			?>
			</div>
	    </div>	
	</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>