<?php
$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "capstone";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}



 		$patlastname =  $_REQUEST['patlastname'];
        $patfirstname = $_REQUEST['patfirstname'];
        $patmidname =  $_REQUEST['patmidname'];
        $patage = $_REQUEST['patdate'];
        $patsex = $_REQUEST['patsex'];
        $pataddress = $_REQUEST['pataddress'];
        $patcontact = $_REQUEST['patcontact'];
        $patmedhx = $_REQUEST['patmedhx'];
        $patdate = $_REQUEST['patdate'];
           $sql = "INSERT INTO patients VALUES ('$patlastname', 
            '$patfirstname','$patmidname','$patage','$patsex','$pataddress','$patcontact','$patmedhx','$patdate')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
                header("Location: newpatients.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
?>