<?php 

$connection_link = new mysqli("localhost", "root", "","capstone"); 
  
if ($connection_link === false) { 
    die("ERROR: Not connected. ".$connection_link->connect_error); 
} 

if (isset($_POST['btnrem'])) {
//sql query to perform copying data from one table to another
$supp_id1 = $_GET['id'];
$sql_query  =  "INSERT archive_supplier select * from supplier where `supp_id` = $supp_id1 "; 
$sql_query1 = "DELETE from supplier where `supp_id` = $supp_id1";
    if ($connection_link->query($sql_query) === true) 
{ 
    $connection_link->query($sql_query1);
    echo '<script language="javascript">';
	        echo 'alert("Supplier Move to Recycle Bin");';
	        echo 'window.location="archive.php";';
	        echo '</script>'; 
} 
else
{ 
    echo "ERROR: Could not able to proceed $sql_query. "
        .$connection_link->error; 
} 
}
// Close the  connection 
$connection_link->close(); 
?>