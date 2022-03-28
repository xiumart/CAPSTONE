<?php
include("session.php");
include("conn.php");

            
        $fsubject =  $_REQUEST['w3lSubject'];
        $fcomment = $_REQUEST['w3lMessage'];
        $rate = $_REQUEST['rate'];


        $client_id = $_SESSION['login_user'];
       

           $sql = "INSERT INTO feedback (feed_subj, feed_comments, feed_rate, client_id) VALUES ('$fsubject','$fcomment','$rate','$client_id')";
          
        if(mysqli_query($conn, $sql)){
            echo '<script language="javascript">';
	        echo 'alert("Thank you for your feedback!");';
	        echo 'window.location="users.php";';
	        echo '</script>';
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>