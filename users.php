<?php
session_start();
include "conn.php";
if (isset($_SESSION['login_user'])) {
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
<style>
.dropbtn {
  background-color: #4287f5;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  
  width: 200%;
  border-radius: 10px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #2770e6;
  border-radius: 10px;
}

.dropdown:hover .dropdown-content {
  display: block;
  border-radius: 10px;
}

.dropdown:hover .dropbtn {
  background-color: #2770e6;
  border-radius: 10px;
}
          </style>
          <div class="admin flex">
            <img src="assets\images\a1.jpg" alt="">
            <!-- <div class="text flex"> -->
<div class="dropdown">
  <button class="dropbtn">
    <?php 
        if($_SESSION["login_user"]) {?>
<label><?php echo $_SESSION['login_user'];  ?>&nbsp;</label></button>
  <div class="dropdown-content">
  <a href="#">Edit Profile</a>
  <a href="#">Change Password</a>
  <a href="logout.php">Logout</a>
  <?php
}else echo "<h1>Please login first .</h1>";
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

      <h3>Check-up History</h3>

      <table>
        <thead>
          <tr>
            <th>Check-up Id</th>
            <th>Date and Time </th>
            <th>Check-up by<th>
            <th>View Details</th>
          </tr>
        </thead>

       <?php 
       $user=$_SESSION['login_user'];
       $sql1 = "SELECT * FROM `client_user` WHERE `client_username`='$user'";
      $result = $conn->query($sql1);
      if($result->num_rows > 0){
      while($row = $result -> fetch_assoc()){
       ?>
       <input type="text" name="bam" value="<?php echo $row['client_id']; ?>" hidden>
        <?php 
        $id=$row['client_id'];
       $sql1 = "SELECT * FROM `patient_records` WHERE `ID`='$id'";
      $result = $conn->query($sql1);
      if($result->num_rows > 0){
      while($row = $result -> fetch_assoc()){
       ?>
       <tbody>
         <tr>
           <td>gh</td><td>gh</td><td>gh</td><td>gh</td>
            <?php
          }}
      else{
        echo "NO RECORDS";
      }
         ?>
         </tr>
       </tbody>
        <?php
     
      }}
      ?>
      </table>
      

      
      <div class="pagination">
        <ul>
          <li><i class="fas fa-chevron-left"></i> </li>
          <li class="active">1</li>
          <li>2</li>
          <li>3</li>
          <li><i class="fas fa-chevron-right"></i> </li>
        </ul>
      </div>
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
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>