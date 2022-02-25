<?php



include("config.php");


$eid= $_GET['supp_id'];

if (isset($_POST['btnsubmit'])) {
		//something was posted


		/*
		$brandname = $_POST['bname'];
		$model = $_POST['model'];
		$category = $_POST['category'];
		$dateofarrival = $_POST['dateofarrival'];
		$expirationdate = $_POST['expirationdate'];
		$sellprice = $_POST['sellingprice'];
		$originalprice = $_POST['originalprice'];
		$profit = $sellprice - $originalprice;
		$supplier = $_POST['supplier'];
		$qty = $_POST['qty'];*/


		$supplier = $_POST['supplier'];
		$contactperson = $_POST['contactperson'];
		$contactnumber = $_POST['contactnumber'];
		$address = $_POST['address'];
		$note = $_POST['note'];

			$sql = mysqli_query($con,"UPDATE supplier SET supp_supply = '$supplier', 
				supp_contactperson = '$contactperson' , 
				supp_contactno = '$contactnumber' , 
				supp_address = '$address',
				supp_note = '$note' 
				WHERE supp_id = '$eid'");
			if($sql){
				echo "<script>alert('you have successfully updated the record');</script>";
				echo "<script>document.location='supplier.php';</script>";
				
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


			  		$eid= $_GET['supp_id'];
			  		$sql=mysqli_query($con, "SELECT * from supplier WHERE supp_id='$eid'");
			  		while($row=mysqli_fetch_array($sql)){


			  	?>
				<center><h2 style="color: #000;">Edit Product</h2><br><br></center>
				<label style="color: #000;padding-right: 15%;">Supplier:</label>
				<input type="text" id="fname" value="<?php echo $row['supp_supply'];?>" name="supplier" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required" ><br><br>
				<label style="color: #000;padding-right: 27%;">Contact Person:</label>
				<input type="text" id="fname" value="<?php echo $row['supp_contactperson'];?>" name="contactperson" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right: 21.5%;">Contact Number:</label>
				<input type="text" id="fname" value="<?php echo $row['supp_contactno'];?>" name="contactnumber" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right: 12%;">Address:</label>
				<input type="text" id="fname" value="<?php echo $row['supp_address'];?>" name="address" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000; padding-right: 10%;">Note:</label>
				<input type="text" id="fname" value="<?php echo $row['supp_note'];?>" name="note" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<center><button type="submit" name="btnsubmit">UPDATE</button></center>
			
			  </form> 
			</div>
		  
		  </div>

		<?php 

	} 

		?>


</body>
</html

