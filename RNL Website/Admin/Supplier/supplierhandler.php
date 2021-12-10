
<?php 
 
include "../../db_conn.php";


	$supply = $_REQUEST['supply'];
	$contactperson = $_REQUEST['contactperson'];
	$contactno = $_REQUEST['contactno'];
  	$adress = $_REQUEST['adress'];
 	$note = $_REQUEST['note'];

	if (empty($supply)) {
		header("Location: supplier.php?error=Supplier is required");
	    exit();
  }else if(empty($contactperson)){
      header("Location: supplier.php?error=Invalid Contact Person");
    exit();
  }else if(empty($contactno)){
    header("Location: supplier.php?error=Contact no is required");
  exit();
  }else if(empty($adress)){
        header("Location: supplier.php?error=Address is required");
	    exit();
	}
  else if(empty($note)){
        header("Location: supplier.php?error=ID is required");
	    exit();
	}
  else{

	    $sql = "SELECT * FROM supplier WHERE supp_id='$supp_id' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: supplier.php?error=The username is taken try another");
	        exit();
		}else {
           $sql2 = "INSERT INTO supplier( supp_supply, supp_contactperson, supp_contactno, supp_address, supp_note) VALUES('$supply', '$contactperson', '$contactno', '$adress', '$note')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: supplier.php");
	         exit();
           }else {
	           	header("Location: supplier.php");
		        exit();
           }
		}
	}

  ?>

