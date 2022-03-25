<?php
include ('session.php');
include "conn.php";
$call = $_SESSION["login_user"];
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
            <a href="users.php" style="color: white;"><h3>RNL Vision Care</h3></a>
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
  <?php 
			  		$clientid= $_SESSION['client_id'];
			  		$query=mysqli_query($conn, "SELECT * from client_user_info WHERE client_id='$clientid'");
			  		while($row=mysqli_fetch_array($query)){
			  	?>
  <section class="table">
    <div class="container">

      <h3> <u><a href="users-appointment.php"> <font color="blue"> Appointment</font></a></u> / Set an appointment</a></h3>
      <div class="map-content-9">
                    <form action="appointmenthandler.php" method="post">
                        <div class="twice">
                             <h3 style="text-transform:uppercase;">Appointment User : <input type="text" name="AppUser" value="<?php echo $call;?>" id="w3lSubject" style="border:none;width:500px;font-weight:bold;"></h3><br>
                             <h3>Name</h3>
                            <input type="text " class="form-control" name="Name" id="w3lSubject"
                                 required="">
                             <h3>Contact No.</h3>
                            <input type="tel" class="form-control" maxlength="11" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" name="Contact" id="w3lSubject"
                                 autocomplete="off" required="" value= "<?php echo $row['client_contact'];?>" >
                                <h3>Email</h3>
                            <input type="email" class="form-control" name="Email" autocomplete="off" id="w3lSubject"
                                 required="" value= "<?php echo $row['client_email'];?>">
                                <h3>Purpose</h3>
                            <select class="form-control" name="Purpose" id="w3lSubject"
                                placeholder="Subject" required="" style="width: 40%; padding: 10px; border-radius: 8px; font-size: 16px;">
                                <option>Check Up</option>
                                <option>Eye Exams</option>
                                <option>Vision Tests</option>
                                <option>Vision Therapy</option>
                                <option>Eyeglasses and Contact Lenses</option>
                                <option>Dry Eye and Glaucoma</option>
                                <option>Adjust and Repair Glasses, Frames</option>
                                
                              </select>
                                <h3>Date and Time</h3>
                                
                                  <input type="date" class="form-control" name="Date" id="w3lSender" placeholder="Date" required="1" min="<?= date('Y-m-d'); ?>" step="1" style="width:300px;margin-bottom:20px;">
                                    <select id="w3lSender" class="form-control" name="Time" required="1" style="width: 300px; padding: 10px; border-radius: 8px; font-size: 16px;">
                                      <option value="08:00 AM">08:00 AM</option>
                                      <option value="08:30 AM">08:30 AM</option>
                                      <option value="09:00 AM">09:00 AM</option>
                                      <option value="09:30 AM">09:30 AM</option>
                                      <option value="10:00 AM">10:00 AM</option>
                                      <option value="10:30 AM">10:30 AM</option>
                                      <option value="11:00 AM">11:00 AM</option>
                                      <option value="11:30 AM">11:30 AM</option>
                                      <option value="01:00 PM">01:00 PM</option>
                                      <option value="01:30 PM">01:30 PM</option>
                                      <option value="02:00 PM">02:00 PM</option>
                                      <option value="02:30 PM">02:30 PM</option>
                                      <option value="03:00 PM">03:00 PM</option>
                                    </select>
                                    <div>
                                      <h1>Available Time</h1>
                                      <p></p>
                                    </div>
                            <input type ="hidden" class ="form-control" name='App_User' value='<?php echo $call; ?>'>
                              
                        
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-style mt-4" style="cursor: pointer;">Set Appointment</button>
                        </div>
                    </form>
                </div>
  </section>
  <?php
            }
  ?>


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
  #w3lSender {
  }
  }

</style>
</html>