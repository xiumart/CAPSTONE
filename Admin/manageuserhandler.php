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


        $last =  $_REQUEST['lname'];
        $first = $_REQUEST['fname'];
        $middle =  $_REQUEST['mname'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $password = $_REQUEST['password'];
        $position = $_REQUEST['position'];
       

           $sql = "INSERT INTO users (users_last,users_first,users_mid,users_username,users_email,users_contact,users_password,user_role) VALUES ('$last', 
            '$first','$middle','$username','$email', '$contact', '$password', '$position')";
          
        if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
                header("Location: manage_users.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>