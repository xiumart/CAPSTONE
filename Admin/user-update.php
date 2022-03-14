<?php



include("../conn.php");


$eid= $_GET['users_id'];

if (isset($_REQUEST['btnsubmit'])) {
		//something was posted
		
		$lname = $_REQUEST['lname'];
		$fname = $_REQUEST['fname'];
		$mname = $_REQUEST['mname'];
		$role = $_REQUEST['position'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		$username = $_REQUEST['uname'];
		$password = $_REQUEST['cpass'];
			$sql = mysqli_query($conn,"UPDATE users_account SET 
				`users_lastname`='$lname ' , 
				`users_firstname`='$fname ' , 
				`users_middlename`='$mname ',
				`users_email`='$email ',  
				`users_username`='$username' , 
				`users_contact`='$contact' , 
				`users_password`='$password',  
				`users_roles`='$role'
				WHERE `users_id` = '$eid'");
			if($sql){
				echo "<script>alert('you have successfully updated the record');</script>";
				echo "<script>document.location='manage-user.php';</script>";
				
			}
			else{
				echo "<script>alert('something went wrong!!!')</script>";
			}

	
		}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="css\sys_style.css">
  <link rel="shorcut icon" type="img/png" href="images\logo.png">
  <title>RNL Vision Care | Admin</title>
</head>
<style>
    button {
    background-color: #00c2cb;
    padding: 12px;
    border: none;
    margin: 3px;
    border-radius: 10%;
  }

  .btn-upd:hover { background-color: #4CAF50;}
  .btn-rem:hover { background-color: red;}
  .btn-print:hover { background-color:#00a2a3;}
  .btn-addpt:hover { background-color: #00a2a3}
  .btn-addpt {float:right; margin-bottom: 20px;}
  .btn-print {
    margin-top: 20px;
    float: right;
    width: 10%;
  }
</style>
<body>


  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
      <img src="images\logo.png" alt="" width="60px;">
      <span class="text" style="text-shadow:0.5px 0px #000;">RNL Vision Care</span>
    </a>
    <ul class="side-menu top">
      <li>
        <a href="dashboard.php">
          <i class='bx bxs-dashboard' ></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="patient-record.php">
          <i class='bx bxs-user' ></i>
          <span class="text">Patient Record</span>
        </a>
      </li>
      <li>
        <a href="point-of-sale.php">
          <i class='bx bxs-cart' ></i>
          <span class="text">Point of Sale</span>
        </a>
      </li>
      <li>
        <a href="sales-report.php">
          <i class='bx bxs-download' ></i>
          <span class="text">Sales Report</span>
        </a>
      </li>
      <li>
        <a href="product.php">
          <i class='bx bxs-shopping-bag-alt' ></i>
          <span class="text">Product</span>
        </a>
      </li>
      <li>
        <a href="supplier.php">
          <i class='bx bxs-truck' ></i>
          <span class="text">Supplier</span>
        </a>
      </li>
      <li class="active">
        <a href="manage-user.php">
          <i class='bx bxs-group' ></i>
          <span class="text">Manage User</span>
        </a>
      </li>
      <li>
        <a href="audit.php">
          <i class='bx bxs-book' ></i>
          <span class="text">Audit Logs</span>
        </a>
      </li>
    </ul>
    <!--
    <ul class="side-menu">
      <li>
        <a href="#" class="logout">
          <i class='bx bxs-log-out-circle' ></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  -->
  </section>
  <!-- SIDEBAR -->



  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu' ></i>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
        </div>
      </form>

      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>
      <a href="#" class="notification">
        <i class='bx bxs-bell' ></i>
        <span class="num">8</span>
      </a>
      <a href="#" class="profile">
        <img src="img/people.png">
      </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Update User</h1>
          <ul class="breadcrumb">
            <li>
              <a  class="active" href="manage-user.php">Back</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
              <a href="manage-user.php">Update User</a>
            </li>
          </ul>
        </div>
      
      </div>
      <style>
  input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
  }
  input[type=tel], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
  }
  input[type=email], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
  }
  input[type=password], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
  }

  label {
      padding: 12px 12px 12px 0;
      display: inline-block;
  }

  input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  font-size: 20px;
  }

  input[type=submit]:hover {
  background-color: #00c2cb;
  }

  .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  }

  .col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  }

  .col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
  }

  /* Clear floats after the columns */
  .row:after {
  content: "";
  display: table;
  clear: both;
  }

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  }
</style>

              <div class="table-data">
            <div class="order">
                <form action="" method="post">
				<?php 
			  		$eid= $_GET['users_id'];
			  		$sql=mysqli_query($conn, "SELECT * from users_account WHERE users_id='$eid'");
			  		while($row=mysqli_fetch_array($sql)){
			  	?>
                <div class="row">
                        <div class="row">
                        <div class="col-25">
                            <label for="lname">Last Name</label>
                        </div>
                        <div class="col-75">
              <input type="text" id="lname" name="id" placeholder="Enter last name" required="" value= "<?php echo $row['users_id'];?>"hidden>
                            <input type="text" id="lname" name="lname" placeholder="Enter last name" required="" value= "<?php echo $row['users_lastname'];?>" >
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="fname">First Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="fname" placeholder="Enter first name" required="" value= "<?php echo $row['users_firstname'];?>">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="mname">Middle Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="mname" name="mname" placeholder="Enter middle name" required="" value= "<?php echo $row['users_middlename'];?>">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="uname">Username</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="uname" name="uname" placeholder="Enter middle name" required="" value= "<?php echo $row['users_username'];?>">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="cpass">Change Password</label>
                        </div>
                        <div class="col-75">
                            <input type="password" id="cpass" name="cpass" placeholder="Enter new password" value= "<?php echo $row['users_password'];?>">
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-25">
                            <label for="contact">Contact Number</label>
                        </div>
                        <div class="col-75">
                            <input type="tel" id="contact" name="contact" placeholder="Enter contact number" required="" value= "<?php echo $row['users_contact'];?>">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="email" id="email" name="email" placeholder="Enter email" required="" value= "<?php echo $row['users_email'];?>">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="position">Position</label>
                        </div>
                        <div class="col-75">
                            <select id="position" name="position">
                            <option value="Doctoe">Doctor</option>
                            <option value="Sales Staff">Sales Staff</option>
                            <option value="Inventory Clerk">Inventory Clerk</option>
                            </select>
                        </div>
                        </div>
                        
        
                        </div>
                        <center>
                        <div class="row">
                        <input type="submit" name="btnsubmit" value="UPDATE"></center></a>
                        </div>
            </form>
            </div>
        </div>
            <?php
              }
            ?>
      <div class="table-data">
  
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->
  

  <script src="script.js"></script>
</body>
</html>