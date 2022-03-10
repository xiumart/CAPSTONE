<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <title>Update your Profile | RNL Vision Care</title>
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
            <h3><a href="users.php" style="color:white;">RNL Vision Care</a></h3>
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

button:hover{
  background-color: #00c2cb;
}
</style>
          <div class="admin flex">
            <img src="assets\images\a1.jpg" alt="">
            <!-- <div class="text flex"> -->
            <div class="dropdown">
  <button class="dropbtn" style="background-color: #01969e;">
    <?php 
include('conn.php');
if($_SESSION["login_user"]) {?>
<label style="cursor: pointer;"><?php echo $_SESSION['login_user'];  ?>&nbsp;</label></button>
  <div class="dropdown-content">
    <a href="users-profile.php">Edit Profile</a>
    <a href="users-changepassword.php">Change Password</a>
    <a href="logout.php">Logout</a>
    <?php
}else echo "<h1>Please login first .</h1>";
$user=$_SESSION['login_user'];
?>
  </div>
</div>  
            </div>
    </section>
<!--
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
                <a href="users-appointment.php">
                  <i class="fa fa-calendar"></i>
                  <h5>Appoinments</h5>
                  
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
          <label class="fa fa-bars" onclick="menutoggle()"></label>
        </div>
      </div>
    </section>
-->
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

      <h1>Update your Profile</h1>

      <!-- Page Content -->

        <div class="row">
            <div class="col-lg-12 text-center">
             <form name="chngpwd" action="" method="post" onSubmit="return valid();">
      <table align="center">
        <br>

          <h3>Upload your Photo</h3>
          <image src="assets\images\a1.jpg" width="149px" height="149px"></image>
          <br>
          <input type="file" name="" id="file" accept="image/*">

        <h3>First Name </h3>
        <input type="text" name="firstname" style="font-size: 18px;border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;" required>

        <h3>Middle Name </h3>
        <input type="text" name="middlename" style="font-size: 18px;border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;" required>

        <h3>Last Name </h3>
        <input type="text" name="lastname" style="font-size: 18px;border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;" required>

        <h3>Birthday </h3>
        <input type="date" name="bday" style="font-size: 18px;border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;" required>

        <h3>Age </h3>
        <input type="number" name="age" style="font-size: 18px;border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;" required>

        <h3>Address </h3>
        <input type="text" name="address" style="font-size: 18px;border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;" required>

        <h3>Contact No.</h3>
        <input type="tel" name="contactno" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" style="font-size: 18px;border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;" required>

        <h3>Email</h3>
        <input type="email" name="email" style="font-size: 18px;border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;" required>

        <td><button type="submit" style="font-size: 120%; cursor:pointer;">Save Profile </button></td>

                <tr>
              <td></td>
              <td></td>
              </tr>
        </table>
        </form>
            </div>
        </div>
        <!-- /.row -->  
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

</html>