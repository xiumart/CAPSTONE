<?php
$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "capstone";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con) {
	echo "Connection failed!";
}


        $fname =  $_REQUEST['fname'];
        $email = $_REQUEST['email'];
        $contact =  $_REQUEST['contact'];
        $date = $_REQUEST['date'];
        $time = $_REQUEST['time'];
        $purpose = $_REQUEST['purpose'];
        $remarks = "ONGOING";

           $sql = "INSERT INTO appointment (app_name,app_contact,app_email,app_date,app_time,app_purpose,app_remarks) VALUES ('$fname', 
            '$contact','$email','$date','$time','$purpose', '$remarks')";
          
        if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
                header("Location: index.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>