<?php
session_start(); 
include "../conn.php";
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');

$cname = $_POST['cname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$description = $_POST['description'];
       

        $sql = "INSERT INTO supplier (supp_cname, supp_contactperson, supp_contact, supp_email, supp_desc) values ('$cname','$lname','$contact','$email','$description')";
          
        if(mysqli_query($conn, $sql)){
            users_logs($_SESSION['users_username'], "Added Supplier", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
            echo '<script language="javascript">';
	        echo 'alert("Supplier added successfully!");';
	        echo 'window.location="supplier.php";';
	        echo '</script>';
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

