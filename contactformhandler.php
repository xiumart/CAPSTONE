<?php

$db = mysqli_connect("localhost", "root","", "capstone");

	// initialize variables
	$name = "";
	$email = "";
	$subject = "";
	$message = "";
	


		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$subject = $_POST['Subject'];
		$message = $_POST['Message'];

		$sql = "INSERT INTO client_inquiries (inquiries_name, inquiries_email, inquiries_subject, inquiries_message) VALUES ('$name', '$email', '$subject', '$message')";
		if(mysqli_query($db, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Thank you for Contacting Us!");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Please Try Again");';
	echo 'window.location="Contact.php";';
	echo '</script>';
}
?> 	





?>