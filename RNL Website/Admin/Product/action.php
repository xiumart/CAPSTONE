<?php 
include("config.php");
// include "../logs_conn.php";
sleep(1);
if(isset($_POST['pro_id'])){
	$value = $_POST['value'];
	$column = $_POST['column'];
	$pro_id = $_POST['pro_id'];

	$sql="UPDATE product SET $column = '$value' WHERE pro_id = '$pro_id'";

// for logs
// 	if(mysqli_query($conn,$sql)){
// 		logs($_SESSION['name'], "Update", date("Y-m-d h:i:sa"));
		
// }
}
for delete
if (isset($_GET['delete'])) {
	$studaccid = $_GET['delete'];

	$sql = "UPDATE product WHERE pro_id = $pro_id";
	$result = mysqli_query($con,$sql);

	header("location: adminproduct.php");
}

?>