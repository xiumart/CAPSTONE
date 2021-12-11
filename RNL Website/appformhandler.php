
<?php
include "../db_conn.php";


        $fname =  $_REQUEST['fname'];
        $email = $_REQUEST['email'];
        $contact =  $_REQUEST['contact'];
        $date = $_REQUEST['date'];
        $purpose = $_REQUEST['purpose'];
        $remarks = "ONGOING";

        if (empty($fname)) {
            header("Location: home.php?error=Fullname is required");
            exit();
        }else if(empty($email)){
          header("Location: home.php?error=Email is required");
            exit();
        }else if(empty($contact)){
            header("Location: home.php?error=Contact No. is required");
            exit();
        }else if(empty($date)){
            header("Location: home.php?error=Date is required");
            exit();
        }else if(empty($purpose)){
            header("Location: home.php?error=Purpose is required");
            exit();
        }else{
    
            $sql = "SELECT * FROM appointment WHERE app_id='$app_id' ";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0) {
                header("Location: home.php?error=Name is taken try another");
                exit();
            }else{
            
            $sql1 = "INSERT INTO appointment (app_name,app_email,app_contact,app_date,app_purpose,app_remarks) VALUES ('$fname', 
            '$email','$contact','$date','$purpose', '$remarks')";
          
                if(mysqli_query($conn, $sql1)){
                    echo "<h3>data stored in a database successfully." 
                    . " Please browse your localhost php my admin" 
                    . " to view the updated data</h3>"; 
                    header("Location: home.php");
                }else{
                    echo "ERROR: Hush! Sorry $sql1. " 
                    . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        }
        }
      ?>