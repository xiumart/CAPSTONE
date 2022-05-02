<?php 

include("conn.php");
if (isset($_POST['btnrem'])) {
//sql query to perform copying data from one table to another
$pro_id1 = $_GET['id'];
$sql_query  =  "INSERT archive_patients select * from patient_distancerx where `patient_no` = $pro_id1 "; 
$sql_query1 = "DELETE from patient_distancerx where `patient_no` = $pro_id1";
    if ($conn->query($sql_query) === true) 
{ 
    $conn->query($sql_query1);
    echo '<script language="javascript">';
	        echo 'alert("Patient Record Moved to Recycle Bin");';
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