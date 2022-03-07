<?php
$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "capstone";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if ($con->connect_error) {
	# Display an error mesage if the connection fails
	die("Connection failed: " . $con->connect_error);
}


        $fsubject =  $_REQUEST['w3lSubject'];
        $fcomment = $_REQUEST['w3lMessage'];

       

           $sql = "INSERT INTO feedback (feed_subj,feed_comments) VALUES ('$fsubject','$fcomment')";
          
        if(mysqli_query($con, $sql)){
            echo '<script language="javascript">';
	        echo 'alert("Thank you for your feedback!");';
	        echo 'window.location="users.php";';
	        echo '</script>';
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>