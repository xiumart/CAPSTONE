<?php 
include("config.php");	

if (isset($_POST['btnsubmit'])) {
		//something was posted
		$brandname = $_POST['bname'];
		$model = $_POST['model'];
		$category = $_POST['category'];
		$dateofarrival = $_POST['dateofarrival'];
		$expirationdate = $_POST['expirationdate'];
		$sellingprice = $_POST['sellingprice'];
		$originalprice = $_POST['originalprice'];
		$profit = $sellingprice - $originalprice;
		$supplier = $_POST['supplier'];
		$qty = $_POST['qty'];	
		//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"productImage/".$pic_name);
        
        
	
			//save to database
			//$user_id = random_num(20);
			$query = "insert into product (brand,model,category,dateofarrival,expdate,sellingprice,origprice,profit,supplier,qty,image) values ('$brandname','$model','$category','$dateofarrival','$expirationdate','$sellingprice','$originalprice','$profit','$supplier','$qty','$pic_name')";

			mysqli_query($con, $query);
			move_uploaded_file($tempname, $folder);

			header("Location: products.php");
			die;
		
}
		
	}
?>



<html>
<body>

	  
	<div id="n_New_Product">
		<button id="myBtn" style="margin-left: 916%;">+ New Product</button>

			<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
			  <span class="close">&times;</span>
			  <form method="post" enctype="multipart/form-data">
				<center><h2 style="color: #000;">New Product</h2><br><br></center>
				<label style="color: #000;padding-right: 15%;">Brand Name:</label>
				<input type="text" id="fname" name="bname" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required" ><br><br>
				<label style="color: #000;padding-right: 27%;">Model:</label>
				<input type="text" id="fname" name="model" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right: 21.5%;">Category:</label>
				<select name="category" id="Category"style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required">
					<option value="Frame">Frame</option>
					<option value="Lens">Lens</option>
				  </select><br><br>
				<label style="color: #000;padding-right: 12%;">Date of Arrival:</label>
				<input type="date" id="fname" name="dateofarrival" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000; padding-right: 10%;">Expiration Date:</label>
				<input type="date" id="fname" name="expirationdate" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right:  15%;">Selling Price:</label>
				<input type="text" id="fname" name="sellingprice" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>
				<label style="color: #000;padding-right:  14%;">Orignal Price:</label>
				<input type="text" id="fname" name="originalprice" style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;" required="required"><br><br>

				<label style="color: #000;padding-right: 23%;">Supplier:</label>
				<select name="supplier" id="Category"style="border: #000 2px; border-style:solid; font-size: 20px; border-radius: 8px; padding: 3px;"required="required">



					<?php 
					$resulta = mysqli_query($con, "SELECT * from supplier");


					while($rowsh = $resulta->fetch_assoc()){
							$suppliers = $rowsh['supp_supply'];
							echo"<option value='$suppliers'>$suppliers</option>";
								}
					

					?>
					
				  </select><br><br>
				<label style="color: #000;padding-right: 30%;">QTY:</label>
				<input type="number" id="tentacles" name="qty" min="1" max="10000" placeholder="Quantity" style="background-color: white; font-size: 20px; border:solid black 2px; width: 200px;; height:43px;  text-transform:lowercase; padding-left: 10px; border-radius: 8px; padding: 3px;" ><br><br>
				<label for="photo" style="color: #000;padding-right: 30%;">Image:</label>
				<input type="file" id="uploadfile" name="picture" accept="image/*" style="font-size: 20px;" ><br><br>


				<br><br>
				<center><button type="submit" name="btnsubmit" onclick="return confirm('Are you sure')">Submit</button></center>

			
			  </form> 
			</div>
		  
		  </div>

		  <script>
			var modal = document.getElementById("myModal");
			var btn = document.getElementById("myBtn");
			var span = document.getElementsByClassName("close")[0]; 
			btn.onclick = function() {
			  modal.style.display = "block";
			}
			span.onclick = function() {
			  modal.style.display = "none";
			}
			window.onclick = function(event) {
			  if (event.target == modal) {
				modal.style.display = "none";
			  }
			}
			</script>


	</div>
	<a href="products.php">
	<div id="n_New_Product">
		<button type="submit" name="back" 
		style='width: 110%; background-color: #1566a8; color: white;
	padding: 15px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 10px;
	cursor: pointer;
	position: relative;
	top: -90%;
	margin-left: 796%;
	margin-top: -9%;
	font-size: large;'>Refresh</button>
	</div>









</body>
</html>