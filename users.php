<?php

include ('session.php');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <title>Home | RNL Vision Care</title>
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
<label style="cursor:pointer; text-transform:uppercase;">Hello, <?php echo $_SESSION['login_user']; ?> <i class="fa fa-angle-down"></i> </label></button>
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
                <a href="users.php"style="color:#1545CB;">
                  <i class="fa fa-medkit"></i>
                  <h5>Check-ups</h5>
                </a>
              </li>
              <li>
                <a href="users-appointment.php">
                  <i class="fa fa-calendar"></i>
                  <h5>Appointments</h5>
                  
                </a>
              </li>
              <li>
                <?php
                 $mensahe = "";
                 $user = $_SESSION['login_user'];

                  $sql1 = mysqli_query($conn, "SELECT app_contact from appointment where app_user = '$user'");
                  
                  while($sagot = mysqli_fetch_assoc($sql1))

                  $kontak = $sagot['app_contact'];

                
                    
                  $sql2 = mysqli_query($conn, "SELECT COUNT(*) as total from appointment_history where app_contact = '$kontak' AND app_remarks = 'FINISH'");

                    while ($risulta = mysqli_fetch_array($sql2))
                      if($risulta['total']>=1){
                         $mensahe = "users-feedback.php";
                       }else{
                        echo "<div class='alert'>
      <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
      <center>You can only leave a feedback after finishing an appointment.
      </div>";
    } 
                         
                 ?>
                  <a href="<?php echo $mensahe ?>">
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

    $user = $_SESSION['login_user'];

      $sql = mysqli_query($conn, "SELECT client_id from client_user where client_username = '$user'");

      while ($sagot = mysqli_fetch_array($sql)) {

       $id = $sagot['client_id'];
        // code...
   
    
     
        $result = mysqli_query($conn, "SELECT * from client_user_info where client_id = '$id'");

        while ($row = mysqli_fetch_array($result)) {


       // code...
          $firstname =  $row['client_fname'];
          $lastname = $row['client_lname'];
          $middlename = $row['client_mname'];
          $bday = $row['client_bday'];
          $address = $row['client_address'];
           if ($firstname == " " or $lastname == " "){

    
      echo "<div class='alert'>
      <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
      <center><strong>Update your profile!</strong> Click your username and go to edit profile.
      </div>";

      }elseif($address == "" or $bday == ""){

        echo "<div class='alert'>
      <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
      <center><strong>Update your profile!</strong> Click your username and go to edit profile.
      </div>";


        

    }
      }
    }
  
    
   
    ?>
  
  <style>
.alert {
  padding: 10px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 15px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
  


  <section class="table">
    <div class="container" id="result">

      <h3>Check-up History</h3>
      
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Check-up by<th>
            <th>Action</th>
          </tr>
        </thead>

       <?php 
       $sql1 = "SELECT * FROM `client_user` WHERE `client_username`='$user'";
      $result = $conn->query($sql1);
      if($result->num_rows > 0){
      while($row = $result -> fetch_assoc()){
       ?>
       <input type="text" name="bam" value="<?php echo $row['client_id']; ?>" hidden>
        <?php 
        $id=$row['client_id'];
       $sql1 = "SELECT * FROM `patient_history` WHERE `patient_id`='$id'";
      $result = $conn->query($sql1);
      if($result->num_rows > 0){
      while($row = $result -> fetch_assoc()){
       ?>
       <tbody>
         <tr>
           <td><?php echo $row['patient_no']; ?></td><td><?php echo $row['date_up']; ?></td><td><?php echo $row['doctor']; ?></td><td></td><td><a href="users-view-history.php?id=<?php echo $row['patient_no']; ?>"><button class="btn-view" style="cursor:pointer;">View</button></a></td>
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