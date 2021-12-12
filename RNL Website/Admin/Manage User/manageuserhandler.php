<?php
$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "capstone";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if ($conn->connect_error) {
	# Display an error mesage if the connection fails
	die("Connection failed: " . $conn->connect_error);
}


        $last =  $_REQUEST['last'];
        $first = $_REQUEST['first'];
        $middle =  $_REQUEST['middle'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $password = $_REQUEST['password'];
        $position = $_REQUEST['position'];
       

           $sql = "INSERT INTO users (users_last,users_first,users_mid,users_username,users_email,users_contact,users_password,user_role) VALUES ('$last', 
            '$first','$middle','$username','$email', '$contact', '$password', '$position')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
                header("Location: manageuser.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>