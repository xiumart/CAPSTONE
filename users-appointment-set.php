<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
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
            <h3>RNL Vision Care</h3>
          </div>

          <div class="search flex">
          
          </div>
          <div class="select">
            
          </div>
        </div>

        <div class="right flex ">
          
          </div>

         

          
          <div class="admin flex">
            <img src="assets\images\a1.jpg" alt="">
            <div class="text flex">
              <?php 
              if($_SESSION["login_user"]) {?>
<label><?php echo $_SESSION['login_user'];  ?>&nbsp;</label>
              <a href ="logout.php"> <label> | Log Out </label> </a> <?php
}else echo "<h1>Please login first .</h1>";
?>
            </div>
          </div>

          
        </div>
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
          <label class="fa fa-bars" onclick="menutoggle()"></label>
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

      <h3> <u><a href="users-appointment.php"> <font color="blue"> Appointment</font></a></u> / Set an appointment</a></h3>
      <div class="map-content-9">
                    <form action="" method="post">
                        <div class="twice">
                             <h3>Name</h3>
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                placeholder="Subject" required="">
                             <h3>Contact No.</h3>
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                placeholder="Subject" required="">
                                <h3>Email</h3>
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                placeholder="Subject" required="">
                                <h3>Purpose</h3>
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                placeholder="Subject" required="">
                                <h3>Date and Time</h3>
                                <div class="twice-two">

                            <input type="time" class="form-control" name="Time" id="w3lName" placeholder="Date"
                                required="1">
                            <input type="date" class="form-control" name="Date" id="w3lSender" placeholder="Time"
                                required="1">
                            <input type ="hidden" class ="form-control" name='App_User' value='<?php echo $call; ?>'>


                    <form action="users-appointmenthandler.php" method="post"></form>
                        <div class="twice">
                             <h3>Name</h3>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Subject" required="">
                             <h3>Contact No.</h3>
                            <input type="tel" class="form-control" name="contact" id="contact"
                                placeholder="Subject" required="">
                                <h3>Email</h3>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Subject" required="">
                                <h3>Purpose</h3>
                            <input type="text" class="form-control" name="purpose" id="purpose"
                                placeholder="Subject" required="">
                                <h3>Date</h3>
                                <!-- <div class="twice-two"> -->
                            <input type="date" class="form-control" name="date" 
                                id="date" placeholder="Date" style="width: 30%;" required="">
                                <h3>Time</h3>
                            <input type="time" class="form-control" name="time" 
                                id="time" placeholder="Time" style="width: 30%;" required="">


                            <input type="time" class="form-control" name="w3lName" id="w3lName" placeholder="Date"
                                required="">
                            <input type="date" class="form-control" name="w3lSender" id="w3lSender" placeholder="Time"
                                required="">

                        </div>  
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-style mt-4">Set Appointment</button>
                        </div>
                    </form>
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