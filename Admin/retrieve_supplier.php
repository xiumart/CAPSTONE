<?php 

include("conn.php");

if (isset($_POST['btn-upd'])) {
//sql query to perform copying data from one table to another
$supp_id1 = $_GET['id'];
$sql_query  =  "INSERT supplier select * from archive_supplier where `supp_id` = $supp_id1 "; 
$sql_query1 = "DELETE from archive_supplier where `supp_id` = $supp_id1";
    if ($conn->query($sql_query) === true) 
{ 
    $conn->query($sql_query1);
    echo '<script language="javascript">';
	        echo 'alert("Supplier Move to Recycle Bin");';
	        echo 'window.location="supplier.php";';
	        echo '</script>'; 
} 
else
{ 
    echo "ERROR: Could not able to proceed $sql_query. "
        .$conn->error; 
} 
}
// Close the  connection 
$conn->close(); 
?>