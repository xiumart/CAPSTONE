<?php
session_start();
$qwe = $_SESSION['login_user'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Change your Password | RNL Vision Care</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets\css\user-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
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
        <a href="users.php"><img src="assets\images\logo.png" alt="" style="position:absolute;width:80px;top:-1%;left:5%;pointer:cursor;"></a>
          <div class="logo">
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
button:hover{
  background-color: #00c2cb;
}
input[type="password"]{
  border: 2px solid #ccc; 
  width: 55%; 
  padding: 10px; 
  margin: 10px auto; 
  border-radius: 5px;
  font-size: 18px;
}
</style>
          <div class="admin flex">
            <!-- <div class="text flex"> -->
            <div class="dropdown">
  <button class="dropbtn" style="background-color: #01969e;">
    <?php 
if($_SESSION["login_user"]) {
  $qwe = $_SESSION['login_user'];?>
<label style="cursor:pointer; text-transform: uppercase">Hello, <?php echo $_SESSION['login_user'];?> <i class="fa fa-angle-down"></i> </label></button>
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

          
        </div>
      </div>
    </section>
  </header><div style="margin:50px;"></div>
  <section class="table">
    <div class="container">
    <a href="users.php" style="float:right;font-size:17px;color:#1545CB;">Back</a>
      <h1>Change your Password</h1>
      <?php if(isset($_GET['error'])) { ?>
        <p class="erorr"><?php echo $_GET['error']; ?> </p>
      <?php } ?>
      <!-- Page Content -->
      
        <div class="row">
            <div class="col-lg-12 text-center">
             <form name="chngpwd" action="" method="post" onSubmit="return valid();">
      <table align="center">
        <br>
        <h3>Old Password</h3>
        <input type="password" name="opwd" id="opwd">

        <h3>New Password</h3>
        <input type="password" name="npwd" id="npwd">


        <h3>Confirm New Password</h3>
        <input type="password" name="cpwd" id="cpwd">

        <td><button type="submit" name="submit" style="font-size: 120%; cursor: pointer;">Change Password </button></td>
     

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





