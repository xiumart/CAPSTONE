<?php
session_start();
$qwe = $_SESSION['login_user'];
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

  <script type="text/javascript">
    function valid(){
      if(document.chngpwd.opwd.value==""){
        alert("Old Password Field is Empty !!");
        document.chngpwd.opwd.focus();
        return false;
      }
      else if(document.chngpwd.npwd.value==""){
        alert("New Password Field is Empty !!");
        document.chngpwd.npwd.focus();
        return false;
      }
      else if(document.chngpwd.cpwd.value==""){
        alert("Confirm Password Field is Empty !!");
        document.chngpwd.cpwd.focus();
        return false;
      }
      else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value){
        alert("Password and Confirm Password Field do not match  !!");
        document.chngpwd.cpwd.focus();
        return false;
      }
        return true;
}
</script>
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

if($_SESSION["login_user"]) {
  $qwe = $_SESSION['login_user'];?>
              <label><?php echo $qwe;  ?>&nbsp;</label>
              <i class="fas fa-chevron-down"></i>
              <?php
}else echo "<h1>Please login first .</h1>";
$user=$_SESSION['login_user'];
?>
            </div>
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
<!--
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
-->
  
  <section class="table">
    <div class="container">

      <h1>Change your Password</h1>

      <!-- Page Content -->

        <div class="row">
            <div class="col-lg-12 text-center">
             <form name="chngpwd" action="" method="post" onSubmit="return valid();">
      <table align="center">
        <br>
        <h3>Old Password</h3>
        <input type="password" name="opwd" id="opwd" style="border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;">

        <h3>New Password</h3>
        <input type="password" name="nwpd" id="npwd" style="border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;">


        <h3>Confirm Password</h3>
        <input type="password" name="cpwd" id="cpwd" style="border: 2px solid #ccc; width: 55%; padding: 10px; margin: 10px auto; border-radius: 5px;">

        <td><button type="submit" name="submit" style="font-size: 120%;">Change Password </button></td>
     

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

<?php 
include('conn.php');

  if(isset($_POST['submit'])){
    
    //get POST data
    $old = $_POST['opwd'];
    $new = $_POST['npwd'];
    $retype = $_POST['cpwd'];

    $sql = "SELECT * FROM client_user WHERE client_username = '$qwe'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    //check if old password is correct
   if($old == md5($row['client_password']))

   {
      echo '<script>alert("MATCHED!!!")</script>';
        //update the new password
       /*$sql = "UPDATE client_user SET client_password = '$new' WHERE client_username = '$qwe'";
        if($conn->query($sql)){
          echo '<script>alert("Password Changed")</script>';
        }
        else{
          echo '<script>alert("Password not Changed")</script>';
        }*/
      }else{
        echo '<script>alert("Password not matched")</script>';
      }
    }

    
      
  


?>





