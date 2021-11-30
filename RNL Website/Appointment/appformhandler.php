<?php
include "../db_conn.php";


 $fname =  $_REQUEST['fname'];
        $email = $_REQUEST['email'];
        $contact =  $_REQUEST['contact'];
        $date = $_REQUEST['date'];
        $purpose = $_REQUEST['purpose'];

           $sql = "INSERT INTO appointment (app_name,app_email,app_contact,app_date,app_purpose) VALUES ('$fname', 
            '$email','$contact','$date','$purpose')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
                header("Location: appointment.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
?>