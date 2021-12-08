<?php 
 
include "../../db_conn.php";

if (isset($_POST['supply']) && isset($_POST['contactperson'])
    && isset($_POST['contactno']) && isset($_POST['address'])
    && isset($_POST['note']) && isset($_POST['id'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    $id = validate($_POST['id']);
	$supply = validate($_POST['supply']);
	$contactperson = validate($_POST['contactperson']);
	$contactno = validate($_POST['contactno']);
  $address = validate($_POST['address']);
  $note = validate($_POST['note']);

	if (empty($supply)) {
		header("Location: ../Supplier/supplier.php?error=User Name is required");
	    exit();
  }else if(empty($contactperson)){
      header("Location: ../Supplier/supplier.php?error=Invalid Contact Number");
    exit();
  }else if(empty($contactno)){
    header("Location: ../Supplier/supplier.php?error=Address is required");
  exit();
	}else if(empty($address)){
        header("Location: ../Supplier/supplier.php?error=Password is required");
	    exit();
	}
	else if(empty($id)){
        header("Location: ../Supplier/supplier.php?error=ID is required");
	    exit();
	}
    else if(empty($note)){
        header("Location: ../Supplier/supplier.php?error=ID is required");
	    exit();
	}
	else{

	    $sql = "SELECT * FROM supplier WHERE id='$id' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../Supplier/supplier.php?error=The username is taken try another");
	        exit();
		}else {
           $sql2 = "INSERT INTO supplier(id, supply, contactperson, contactno, address, note) VALUES('$id','$supply', '$contactperson', '$contactno')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: ../Supplier/supplier.php?success=      Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: ../Supplier/supplier.php?error=unknown error occurred");
		        exit();
           }
		}
	}
}
  ?>