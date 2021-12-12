<?php



include("config.php");


$eid= $_GET['editid'];

if (isset($_POST['btnsubmit'])) {
		//something was posted


		
		$brandname = $_POST['bname'];
		$model = $_POST['model'];
		$category = $_POST['category'];
		$dateofarrival = $_POST['dateofarrival'];
		$expirationdate = $_POST['expirationdate'];
		$sellprice = $_POST['sellingprice'];
		$originalprice = $_POST['originalprice'];
		$profit = $sellprice - $originalprice;
		$supplier = $_POST['supplier'];
		$qty = $_POST['qty'];

			$sql = mysqli_query($con,"UPDATE product SET brand = '$brandname', 
				model = '$model' , 
				category = '$category' , 
				dateofarrival = '$dateofarrival',
				expdate = '$expirationdate' ,  
				sellingprice = '$sellprice' , 
				origprice = '$originalprice' , 
				profit = '$profit' , 
				supplier = '$supplier' , 
				qty = '$qty' 
				WHERE pro_id = '$eid'");
			if($sql){
				echo "<script>alert('you have successfully updated the record');</script>";
				echo "<script>document.location='adminproduct.php';</script>";
				
			}
			else{
				echo "<script>alert('something went wrong!!!')</script>";
			}

	
		}else
		{
			echo "Please enter some valid information!";
		}

?>



<html>
<body>
<div id="n_New_Product">
			<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			  <span class="close">&times;</span>
			  <form method="post">

			  	<?php 


			  		$eid= $_GET['editid'];
			  		$sql=mysqli_query($con, "SELECT * from product WHERE pro_id='$eid'");
			  		while($row=mysqli_fetch_array($sql)){


			  	?>
				<center><h2 style="color: #000;">Edit Product</h2><br><br></center>
				<label style="color: #000;padding-right: 15%;">Brand Name:</label>
				<input type="text" id="fname" value="<?php echo $row['brand'];?>" name="bname" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required" ><br><br>
				<label style="color: #000;padding-right: 27%;">Model:</label>
				<input type="text" id="fname" value="<?php echo $row['model'];?>" name="model" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right: 21.5%;">Category:</label>
				<select name="category" id="Category" value="<?php echo $row['brand'];?>" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required">
					<option value="Frame">Frame</option>
					<option value="Lens">Lens</option>
				  </select><br><br>
				<label style="color: #000;padding-right: 12%;">Date of Arrival:</label>
				<input type="date" id="fname" value="<?php echo $row['dateofarrival'];?>" name="dateofarrival" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000; padding-right: 10%;">Expiration Date:</label>
				<input type="date" id="fname" value="<?php echo $row['expdate'];?>" name="expirationdate" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right:  15%;">Selling Price:</label>
				<input type="text" id="fname" value="<?php echo $row['sellingprice'];?>" name="sellingprice" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right:  14%;">Orignal Price:</label>
				<input type="text" id="fname" value="<?php echo $row['origprice'];?>" name="originalprice" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				
				<label style="color: #000;padding-right: 23%;">Supplier:</label>
				<select name="supplier" id="Category" value="<?php echo $row['supplier'];?>"style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;"required="required">
					<option value="Supplier">Supplier 1</option>
					<option value="Supplier">Supplier 2</option>
				  </select><br><br>
				<label style="color: #000;padding-right: 30%;">QTY:</label>
				<input type="number" id="tentacles" value="<?php echo $row['qty'];?>" name="qty" min="1" max="10000" placeholder="Quantity" style="background-color: white; font-size: 20px; border:solid black 2px; width: 200px;; height:43px;  text-transform:lowercase; padding-left: 10px; border-radius: 8px; padding: 3px;" ><br><br><br><br>
				<center><button type="submit" name="btnsubmit">UPDATE</button></center>
			
			  </form> 
			</div>
		  
		  </div>

		<?php 

	} 

		?>


</body>
</html

