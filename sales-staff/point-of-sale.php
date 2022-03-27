<?php
include("../admin/session.php");  
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
error_reporting(0);
if (isset($_GET['id'])) {
	$idd=$_GET['id'];
	$query1 = "DELETE FROM `sales_order` WHERE `id`='$idd'";
	mysqli_query($conn, $query1);
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
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="src/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<style>
	.btn-t {
		background-color: #00c2cb;
		border-radius: 5px;
		border:none;
		padding: 10px;
	}

	.btn-t:hover {
		background-color: red;
	}
	.btn-p {
		background-color: #00c2cb;
		border-radius: 5px;
		border:none;
		padding: 10px;
		width: 100%;
	}

	.btn-p:hover {
		background-color: #4CAF50;
		color: black;
	}
	.btn-a {
		background-color: #00c2cb;
		border-radius: 5px;
		border:none;
		padding: 12px 20px;
	}

	.btn-a:hover {
		background-color: lightslategray;
		color: black;
	}


	.cust{
		width: 320px;
		padding:5px;
		font-size:20px;
	}

	.sel {
		width: 400px;
		padding:5px;
		font-size:20px;
	}
	.num {
		width:100px;
		padding:5px;
		font-size:20px;
	}

	.btn-remove {
		background-color: #00c2cb;
		border: none;
		border-radius: 10%;
		margin-left: 60%;
		padding:8px;
	}
	.btn-remove:hover { background-color: red;}

</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="point-of-sale.php?id=cash&invoice=<?php echo $finalcode ?>" class="brand">
			<img src="images\logo.png" alt="" width="60px;">
			<span class="text" style="text-shadow:0.5px 0px #000; color: black;">RNL Vision Care</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
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
					<h1>Point of Sale</h1>
					<ul class="breadcrumb">
						<li>
							<a href="point-of-sale.php">Point of Sale</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="point-of-sale.php">Home</a>
						</li>
					</ul>
				</div>
			
			</div>
			<div>

			<div>
				
				<div class="order">
					<form id="my-form" method="post">
							<br><select class="sel" name='categoryy' id="price-sort" style="width:250px;cursor:pointer;font-size:17px;" onchange="location = this.value;">
							<option disabled="" selected="">Select your category..</option>
							<option value="?id=<?php echo $_GET['id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&cat=Services"
								<?php
								if ($_GET['cat']=='Services') {
									echo "selected";
								}
								 ?>>Services</option>
							<option value="?id=<?php echo $_GET['id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&cat=Accessories"
								<?php
								if ($_GET['cat']=='Accessories') {
									echo "selected";
								}
								 ?>>Accessories</option>
							<option value="?id=<?php echo $_GET['id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&cat=Contact Lenses"
								<?php
								if ($_GET['cat']=='Contact Lenses') {
									echo "selected";
								}
								 ?>>Contact Lenses</option>
							<option value="?id=<?php echo $_GET['id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&cat=Eyewear for Adults"
								<?php
								if ($_GET['cat']=='Eyewear for Adults') {
									echo "selected";
								}
								 ?>>Eyewear for Adults</option>
							<option value="?id=<?php echo $_GET['id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&cat=Eyewear for Kids"
								<?php
								if ($_GET['cat']=='Eyewear for Kids') {
									echo "selected";
								}
								 ?>>Eyewear for Kids</option>
							<option value="?id=<?php echo $_GET['id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&cat=Seen Wear"
								<?php
								if ($_GET['cat']=='Seen Wear') {
									echo "selected";
								}
								 ?>>Seen Wear</option>
							<option value="?id=<?php echo $_GET['id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&cat=Sunglasses"
								<?php
								if ($_GET['cat']=='Sunglasses') {
									echo "selected";
								}
								 ?>>Sunglasses</option>
							</select>
					</form>
					
				<form name='myForm' action="incoming.php" method="post">
					

					<input type="hidden" name="pt" value="cash" />
					<input type="hidden" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
					<input type="number" name="discount" hidden>
					<input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>" />
					<select name="product" class="sel" style="cursor: pointer;font-size:17px;" required>
						<option disabled="" selected="">Select product/services...</option>
						<?php 
						include("connect.php");
						$cat=$_GET['cat'];
						
						if (isset($cat)) {
						$result=$db->prepare("SELECT * FROM product WHERE category='$cat'");
						}
						else{
							$result=$db->prepare("SELECT * FROM product");
						}
						$result->bindParam(':userid', $res);
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
						?>
						<option value="<?php echo $row['pro_id'];?>"><?php echo $row['model']; ?> - <?php echo $row['brand']; ?> - <?php echo $row['category']; ?> | Expires at: <?php echo $row['expdate']; ?></option>
											<?php
						} 
						?>
					</select>
					<input type="number" class="num" name="qty" value="1" min="1" autocomplete="off" required style="font-size:17px;">
					
					<input type="submit" name="btnadd" value="+ Add" class="btn-a" style="cursor:pointer;">
				</form>
				
					<br><br>
					<table class="table" id="resultTable" data-responsive="table">
						<thead>
							<tr>
							<th>Product Name</th>
							<th>Generic Name</th>
							<th>Category</th>
							<th>Price</th>
							<th>Qty</th>
							<th>Amount</th>
							<th hidden>Profit</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$id=$_GET['invoice'];
							$result12 = $db->prepare("SELECT * FROM sales_order WHERE order_no= :userid");
							$result12->bindParam(':userid', $id);
							$result12->execute();
							for($i=1; $row = $result12->fetch(); $i++){
								
							?>
							<tr class="record">
								<input type="text" value="<?php echo $row['product']; ?>" hidden>
								<td data-label="Product name" class="brandd"><?php echo $row['model']; ?></td>
								<td data-label="Generic name"><?php echo $row['brand']; ?></td>
								<td data-label="Category"><?php echo $row['category']; ?></td>
								<td data-label="Price">
									<?php
										$ppp=$row['price'];
										echo formatMoney($ppp, true);
									?></td>
								<td data-label="Qty"><?php echo $row['qty']; ?></td>
								<td data-label="Amount">
									<?php
										$dfdf=$row['amount'];
										echo formatMoney($dfdf, true);
									?></td>
								<td data-label="Profit" hidden>
									<?php
										$profit=$row['profit'];
										echo formatMoney($profit, true);
									?></td>
									<td width="90"><a href="?id=<?php echo $row['id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&dle=<?php echo $_POST['pt']; ?>&qty=<?php echo $row['qty'];?>&code=<?php echo $row['product'];?>"><button class="btn-t" onclick="return confirm('Are you sure you want to cancel this item?')"><i class="icon icon-remove"></i> Cancel </button></a></td>
							</tr>
								<?php
								}
								?>
							<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									
									<th> Total Amount: </th>
									<th hidden> Total Profit: </th>
									<td></td>
							</tr>
							<tr>
								<th colspan="5">Total:</th>
								<td>
									<?php
									function formatMoney($number, $fractional=false) {
										if ($fractional) {
											$number = sprintf('%.2f', $number);
										}
										while (true) {
											$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
											if ($replaced != $number) {
												$number = $replaced;
											} else {
												break;
											}
										}
										return $number;
									}
									$sdsd=$_GET['invoice'];
									$resultas = $db->prepare("SELECT sum(amount) FROM sales_order WHERE order_no= :a");
									$resultas->bindParam(':a', $sdsd);
									$resultas->execute();
									for($i=0; $rowas = $resultas->fetch(); $i++){
									$fgfg=$rowas['sum(amount)'];
									echo formatMoney($fgfg, true);
									}
									?>
								</td>
								<td colspan="1" hidden>
								<?php 
								$resulta = $db->prepare("SELECT sum(profit) FROM sales_order WHERE order_no= :a");
								$resulta->bindParam(':a', $sdsd);
								$resulta->execute();
								for($i=0; $qwe = $resulta->fetch(); $i++){
								$asd=$qwe['sum(profit)'];
								echo formatMoney($asd, true);
								}
								?>
		
				</td>
							</tr>

						</tbody>

					</div>
					</div>
				</table>
				<div><br><br>
					<a rel="facebox" href="checkout.php?pt=<?php echo $_GET['id']?>&invoice=<?php echo $_GET['invoice']?>&total=<?php echo $fgfg ?>&totalprof=<?php echo $asd ?>"><button class="btn-p" style="cursor: pointer;"><i class="icon icon-save icon-large"></i> PAY</button></a>
					<div class="clearfix"></div>
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