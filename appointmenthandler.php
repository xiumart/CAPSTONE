<?php
session_start();
$db = mysqli_connect("localhost", "root","", "capstone");

	// initialize variables
	$appuser = "";
	$name = "";
	$email = "";
	$contact = "";
    $date = "";
	$time = "";
    $purpose = "";
    $status = "";

        $appuser = $_POST['Appointment'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$contact = $_POST['Contact'];
		$date = $_POST['Date'];
        $time = $_POST['Time'];
        $purpose = $_POST['Purpose'];
        $status = "Pending";
            

		
        $sql ="INSERT INTO appointment (app_user, app_name, app_email, app_contact, app_date, app_time, app_purpose, app_remarks) VALUES ('$appuser', '$name', '$email', '$contact', '$date', '$time', '$purpose', '$status' )";
		if(mysqli_query($db, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Appointment Added!");';
	echo 'window.location="users-appointment.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Please Try Again");';
	echo 'window.location="users-appointment-set.php";';
	echo '</script>';
}
?> 	





?>