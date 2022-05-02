<?php 

include("conn.php");

if (isset($_POST['btnrem'])) {
$pro_id1 = $_GET['id'];
$sql_query  =  "INSERT INTO archive_products select * from product where `pro_id` = $pro_id1 "; 
$sql_query1 = "DELETE from product where `pro_id` = $pro_id1";
    if ($conn->query($sql_query) === true)
{ 
    $conn->query($sql_query1);
    echo '<script language="javascript">';
	        echo 'alert("Products Move to Recycle Bin");';
	        echo 'window.location="archive.php";';
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