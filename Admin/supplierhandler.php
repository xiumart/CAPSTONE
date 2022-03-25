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


$cname = $_POST['cname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$description = $_POST['description'];
       

        $sql = "insert into supplier (supp_cname, supp_contactperson, supp_contact, supp_email, supp_desc) values ('$cname','$lname','$contact','$email','$description')";
          
        if(mysqli_query($con, $sql)){
         
            echo '<script language="javascript">';
	        echo 'alert("Supplier added successfully!");';
	        echo 'window.location="supplier.php";';
	        echo '</script>';
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>

