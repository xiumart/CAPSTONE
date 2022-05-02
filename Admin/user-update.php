<?php
include("../conn.php");
include("session.php");
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
function createRandomPassword() {
  $chars = "003232303232023232023456789";
  srand((double)microtime()*1000000);
  $i = 0;
  $pass = '' ;
  while ($i <= 7) {

    $num = rand() % 33;

    $tmp = substr($chars, $num, 1);

    $pass = $pass . $tmp;

    $i++;

  }
  return $pass;
}
$finalcode='RS-'.createRandomPassword();
$eid= $_GET['id'];

if (isset($_REQUEST['btnsubmit'])) {
    //something was posted
    $lname = $_REQUEST['lname'];
    $fname = $_REQUEST['fname'];
    $mname = $_REQUEST['mname'];
    $role = $_REQUEST['position'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $username = $_REQUEST['uname'];
    $password = md5($_REQUEST['cpass']);

    
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
        users_logs($_SESSION['users_username'], "Updated User", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
        echo "<script>alert('You have successfully updated the record.');</script>";
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
        <a href="point-of-sale.php?id=cash&invoice=<?php echo $finalcode ?>">
          <i class='bx bxs-cart' ></i>
          <span class="text">Point of Sale</span>
        </a>
      </li>
      <li>
        <a href="sales-report.php">
          <i class='bx bxs-chart' ></i>
          <span class="text">Sales Report</span>
        </a>
      </li>
      <li>
        <a href="product.php">
          <i class='bx bxs-shopping-bag-alt' ></i>
          <span class="text">Product Inventory</span>
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
      <li>
        <a href="inquiries.php">
          <i class='bx bxs-phone' ></i>
          <span class="text">Client Inquiries</span>
        </a>
      </li>
      <li>
        <a href="archive.php">
          <i class='bx bxs-download' ></i>
          <span class="text">Back-up and Restore</span>
        </a>
      </li>
    </ul>
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
      <div id="digital-clock"></div>
      <script src="time.js"></script>
      
      <div class="dropdown2">
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">
				<?php 
				$query = mysqli_query($conn, "SELECT COUNT(*) as total from product  WHERE qty <=10 AND pro_status ='2'");
					while($result=mysqli_fetch_array($query)){
					echo $result['total']; 
				}			
				?>
						  </span>			  
			</a>
			<?php

if (isset($_GET['eid'])) {
	$pro_id=$_GET['eid'];

	$query1 = "UPDATE `product` SET pro_status = '1' WHERE pro_id = '$pro_id'";
	mysqli_query($conn, $query1);
			}
			?>
			
				<div class="dropdown-content2">
					<h4 id="textnotif">Notification</h4><br><hr>
					
			<table>
			  
			  <?php
			$sql1 = "SELECT * FROM `product` WHERE pro_status='2' AND qty <=10 LIMIT 6";
			$result1 = $conn->query($sql1);  
  			if($result1->num_rows > 0){
  				while($row = $result1 -> fetch_assoc()){ 
					$qty = $row['qty'];
					$model = $row['model'];
			  ?>
			  <tr>
			  <th><h4 style="color: red;">Low Product:</h4></th>
			  <td><p><?php 
					if ($qty<=10) {
						echo "Model: " . $row['model'] ."&nbsp<br>";		
						echo "QTY: " . $row['qty'];
							}
			  ?>
				</p></td><td><a href="?eid=<?php echo $row['pro_id'];?>"><button class="btn-remove" name="btnremove" style="cursor: pointer;">Clear</button></a></td>
							</tr>
							<?php
				  }}
			  ?>
			  </table>

				</div>
			</div>
      <!-- DROP DOWN NG EDIT PROFILE AND CHANGE PASS OK-->
      <div class="dropdown1">
      <img src="img\user.png" alt="" width="40px" class="userlogo">
        <div class="dropdown-content1">
          <a href="#" id="myBtn">Change Password</a>
          <a href="logout.php" style="color:red;">Logout</a>
        </div>
      </div>
      <!-- Modal -->
      <div id="myModal" class="modal">
        <div class="modal-content">
        <form action="changepasshandler.php" method="POST">
        <span class="close">&times;</span>
        <h3>CHANGE PASSWORD</h3>
        <br><hr><br>
        <h4>OLD PASSWORD</h4>
        <input type="password" name="currentPassword" class="oldpw">
        <h4>NEW PASSWORD</h4>
        <input type="password" minlenght="6" name="newPassword" class="newpw">
        <h4>CONFIRM PASSWORD</h4>
        <input type="password" minlenght="6" name="confirmPassword" class="conpw">
        <button type="submit" value="Submit" name="submit" class="cpBtn">Submit</button><br><br><br><br>
        </div>
      </div>
</form>
      <script src="js\modal.js"></script>
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
  form i {
    margin-left: -30px;
    cursor: pointer;
}
</style>

              <div class="table-data">
            <div class="order">
                <form action="" method="post">
        <?php 
            $eid= $_GET['id'];
            $sql=mysqli_query($conn, "SELECT * from users_account WHERE users_id='$eid'");
            while($row=mysqli_fetch_array($sql)){
              $roles = $row['users_roles'];
              $pass = md5($row['users_password']);
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
                            <label for="mname">Middle Name (optional)</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="mname" name="mname" placeholder="Enter middle name" value= "<?php echo $row['users_middlename'];?>">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-25">
                            <label for="uname">Username</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="uname" name="uname" placeholder="Enter middle name" minlenght="6" required="" value= "<?php echo $row['users_username'];?>">
                        </div>
                        </div>
                        <!-- <div class="row">
                        <div class="col-25">
                            <label for="cpass">Change Password</label>
                        </div>
                        <div class="col-75">
                        
                            <input type="password" name="cpass" placeholder="Enter new password" minlenght="6" id="password" value= "">
                            <i class="bi bi-eye-slash" id="togglePassword"></i>
                          </div>
                        </div> -->
                        
                        <div class="row">
                        <div class="col-25">
                            <label for="contact">Contact Number (Ex. 09xxxxxxxxx)</label>
                        </div>
                        <div class="col-75">
                            <input type="tel" id="contact" name="contact" maxlenght="11" minlenght="11" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" maxlenght = "11" placeholder="Enter contact number" required="" value= "<?php echo $row['users_contact'];?>">
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
                            <option value="Admin" <?php
							                if ($roles=="Admin") {
								                echo "selected";
							                }
							                ?>>Admin</option>
                            <option value="Doctor" <?php
							                if ($roles=="Doctor") {
								                echo "selected";
							                }
							                ?>>Doctor</option>
                            <option value="Sales Staff" <?php
							                if ($roles=="Sales Staff") {
								                echo "selected";
							                }
							                ?>>Sales Staff</option>
                            <option value="Inventory Clerk" <?php
							                if ($roles=="Inventory Clerk") {
							                	echo "selected";
							                }
							                ?>>Inventory Clerk</option>
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
  <!-- show password -->
  <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('signup', function (e) {
            e.preventDefault();
        });
    </script>
</body>
<style>
  .btn-apph {
    background-color: #00c2cb;
    padding: 15px;
    border: none;
    border-radius: 10%;
    float: right;
    margin-left: 10px;

    
  }
  .btn-f, .btn-c {
    background-color: #00c2cb;
    border: none;
    border-radius: 10%;
    margin-left: 10px;
    padding:4px;
  }
  .btn-remove {
    background-color: #00c2cb;
    border: none;
    border-radius: 10%;
    margin-left: 60%;
    padding:8px;
  }
  .btn-f:hover { background-color: #4CAF50;}
  .btn-c:hover { background-color: red;}
  .btn-apph:hover { background-color: #00a2a3;}
  .btn-remove:hover { background-color: red;}
  .namee{
    margin-top: 4.5%;
  }
  table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  background-color: #00c2cb;
  margin-top:20px;  
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
  background-color: #9dd1d4;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
</style>
</html>