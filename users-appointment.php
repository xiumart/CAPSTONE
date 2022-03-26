<?php
include ('session.php');
$con = mysqli_connect("localhost","root","","capstone");
$sql = "SELECT DISTINCT app_id, app_date, app_time, app_purpose  FROM appointment,client_user where appointment.app_user = client_user.client_username";
$result = mysqli_query($con, $sql) or die( mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Appointments | RNL Vision Care</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets\css\user-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <title>RNL Vision Care</title>
  <script src="script.js" charset="utf-8"></script>
  <link rel="shorcut icon" type="img/png" href="assets\images\logo.png">
</head>

<body>
  <header>
    <section class="head">
      <div class="container flex1">
        <div class="left flex1">
        
          <div class="logo">
          <a href="users.php"><img src="assets\images\logo.png" alt="" style="position:fixed;width:80px;top:-3%;left:5%;pointer:cursor;" id="icnlogo"></a>
            <h3><a href="users.php" style="color: white;">RNL Vision Care</a></h3>
          </div>

          <div class="search flex">
          
          </div>
          <div class="select">
            
          </div>
        </div>

        <div class="right flex ">
          
          </div>
          <style>
.dropbtn {
  background-color: #00c2cb;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  width: 120%;
}

.dropdown {
  position: relative;
  display: inline-block;
  border-radius: 8px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 8px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-radius: 8px;
}

.dropdown-content a:hover {
	background-color: #00c2cb;
	
}

.dropdown:hover .dropdown-content {
  display: block;
  border-radius: 8px;
}

.dropdown:hover .dropbtn {
  background-color: #2881e0;
  border-radius: 8px;
} 

</style>
          <div class="admin flex">
            <!-- <div class="text flex"> -->
            <div class="dropdown">
  <button class="dropbtn" style="background-color: #01969e;">
    <?php 
include('conn.php');
if($_SESSION["login_user"]) {?>
<label style="cursor:pointer; text-transform:uppercase;">Hello, <?php echo $_SESSION['login_user'];  ?><i class="fa fa-angle-down"></i> </label></button>
  <div class="dropdown-content">
    <a href="users-profile.php">Edit Profile</a>
    <a href="users-changepassword.php">Change Password</a>
    <a href="logout.php" style="color:red;">Logout</a>
    <?php
}else echo "<h1>Please login first .</h1>";
$user=$_SESSION['login_user'];
?>
  </div>
</div>  
            </div>
    </section>

    <section class="menu">
      <div class="container">
        <div class="navbar">
          <nav>
            <ul id="menuitem">
              <li>
                <a href="users.php">
                  <i class="fa fa-medkit"></i>
                  <h5>Check-ups</h5>
                </a>
              </li>
              <li>
                <a href="users-appointment.php" style="color:#1545CB;">
                  <i class="fa fa-calendar"></i>
                  <h5>Appointments</h5>
                  
                </a>
              </li>
              <li>
                <a href="users-feedback.php">
                  <i class="fa fa-bullhorn" aria-hidden="true"></i>
                  <h5> Feedback Us</h5>
            
                </a>
              </li>

            </ul>
          </nav>
          <label class="fa fa-bars" onclick="menutoggle()" style="margin-left:11%; top: 16%;background-color: transparent;color:white;border:none;"></label>
        </div>
      </div>
    </section>
  </header>

  <script>
    var menuitem = document.getElementById("menuitem");
    menuitem.style.maxHeight = "0px";

    function menutoggle() {
      if (menuitem.style.maxHeight == '0px') {
        menuitem.style.maxHeight = "30vh"
      } else {
        menuitem.style.maxHeight = "0px"
      }
    }

    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 50);
    })
  </script>

  <section class="home">
  
  </section>



  


  <section class="table">
    <div class="container">

      <h3>Appoinments</h3>
      <div class="text-right" style="float:right;margin-bottom:14px;">
        <a href="users-appointment-set.php"><button type="submit" class="btn btn-primary btn-style mt-4" style="cursor:pointer;">Set an Appointment</button></a>

      </div>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Purpose</th>
            <th>Status</th>
            <th>Action</th>
          
          </tr>
        </thead>
        <?php
error_reporting(0);
include("../conn.php");
if (isset($_GET['id'])) {
	$app_id=$_GET['id'];
	$query = "DELETE FROM `appointment` WHERE app_id='$app_id'";
			mysqli_query($conn, $query);
}
?>
        <?php
    $con=mysqli_connect("localhost","root","","capstone");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM appointment where app_user = '$user_check'");
      
    while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td>". $row['app_id'] . "</td>";
      echo "<td>" . $row['app_date'] . "</td>";
      echo "<td>" . $row['app_time'] . "</td>";
      echo "<td>" . $row['app_purpose'] ."</td>";
      echo "<td>" . $row['app_remarks'] ."</td>";
      echo "<td><form method='post' action='?id=".$row["app_id"]."'>"?>
      <button class="btn-upd" style="cursor: pointer;" onclick="return confirm('Are you sure you want to cancel your appointment?')">Cancel</button></form>
      <?php "</td></tr>";
      }

    mysqli_close($con);
    ?>

       
        </tbody>
      </table>

       
        </tbody>
      </table>

     
    </div>
  </section>


  <footer>
    <div class="container flex1">
      <span>2022 © RNL Vision Care.</span>
     
    </div>
  </footer>
  <!-- chart js-->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="script.js" charset="utf-8"></script>
  <!-- chart js-->
</body>
<style>
 @media only screen and (max-width:768px) {
    #icnlogo {
    display: none;
  }
  }

</style>
</html>