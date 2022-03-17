<?php
error_reporting(0);
include("../conn.php");
if (isset($_GET['id'])) {
	$pro_id1=$_GET['id'];
	$query = "DELETE FROM `product` WHERE pro_id='$pro_id1'";
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

	.btn-upd:hover { background-color: #4CAF50;}
	.btn-rem:hover { background-color: red;}
	.btn-print:hover { background-color:#00b2b3;}
	.btn-addp:hover { background-color: #e5eaf0}

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

	.brandd{
		margin-top: 8%;
	}
</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="product.php" class="brand">
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
			<div id="digital-clock"></div>
			<script src="time.js"></script>
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
					<h1>Product Inventory</h1>
					<ul class="breadcrumb">
						<li>
							<a href="product.php">Product</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="product.php">Home</a>
						</li>
					</ul>
				</div>
			
			</div>

			<a href="product-add.php"><button class="btn-addp" style="float:right; margin-bottom:10px;">+ Add Product </button></a>
			<div class="table-data">
			<div class="order">
					<div class="head">
						<form method="post">
						<input type="text" name="txtsearch" id="txtsearch" placeholder="Search by Category/Id" style="padding: 12px;border: 1px solid #ccc;border-radius: 4px;font-family: var(poppins);">
						<button  id="btnsearch" name="btnsearch" class="page"><i class='bx bx-search' ></i></button>
						</form>
						<i class='bx bx-filter' ></i>
					</div>
<div id="printing">
					<table class="table">

     <thead>
     	<tr>
     	<th>Id</th>
     	 <th>Brand Name</th>
     	 <th>Model</th>
     	 <th>Category</th>
     	 <th>Original Price</th>
		 <th>Selling Price</th>
		 <th>Exp. Date</th>
		 <th>Qty.</th>
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
     	$sql2 =$conn->query("SELECT count(pro_id) AS id FROM `product`");
     	if (isset($_POST['btnsearch'])) {
        $sql1 = "SELECT * FROM `product` WHERE `category` LIKE '%$search%' OR `pro_id` LIKE'%$search%'  LIMIT $start, $limit ";
        	}
        else{
        		$sql1 = "SELECT * FROM `product` LIMIT $start, $limit ";
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
     	  	<td data-label="Id"><?php echo $row['pro_id'];?></td>
     	  	<td data-label="Brand"><?php echo $row['brand'];?></td>
     	  	<td data-label="Model"><?php echo $row['model'];?></td>
     	  	<td data-label="Category"><?php echo $row['category'];?></td>
     	  	<td data-label="Orig."><?php echo $row['origprice'];?></td>
			  	<td data-label="Selling"><?php echo $row['sellingprice'];?></td>
			  	<td data-label="Expire"><?php echo $row['expdate'];?></td>
			  	<td data-label="Qty" id="qq"><?php echo $row['qty'];?></td>
			  	<td data-label="Action"><a href="product-update.php?id=<?php echo $row['pro_id'];?>"><button class="btn-upd">Update</button></a><a href="?id=<?php echo $row['pro_id'];?>"><button class="btn-rem" name="btnremove">Remove</button></a></td>
     	  </tr>
    
     	 <?php
     	}}

     	?>


     </tbody>

   </table>
</div>
   <!--page-->
  	<br>
   <a class="page" id="pre" href="product.php?page=<?=$prev; ?>">< Prev</a>
    	  <?php  for($i=1; $i <=$pages ; $i++): ?>
    <a class="page" href="product.php?page=<?=$i; ?>"><?=$i; ?></a>
                      <?php endfor; ?>
    <a class="page" id="pnext" href="product.php?page=<?=$next; ?>">Next ></a>
	
	<a href="javascript:Clickheretoprint()">
   	<button class="btn-print"><i class='bx bxs-printer' ></i> Print </button></a>
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
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
					

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