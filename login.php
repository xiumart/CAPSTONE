<?php
session_start();
include('conn.php');
$msg1='';
$msg='';
if(isset($_POST['login'])){
  $time=time()-45;
  $ip_address=getIpAddr();
// Getting total count of hits on the basis of IP
  $query=mysqli_query($conn,"select count(*) as total_count from loginlogs where TryTime > $time and IpAddress='$ip_address'");
 $check_login_row=mysqli_fetch_assoc($query);
  $total_count=$check_login_row['total_count'];
  //Checking if the attempt 3, or youcan set the no of attempt her. For now we taking only 3 fail attempted
  if($total_count==3){
    $msg1='disabled';
    $msg="To many failed login attempts. Please login after 60 sec";
  }else{
    //Getting Post Values
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    // Coding for login
    $res=mysqli_query($conn,"select * from user where username='$username' and password='$password'");
    if(mysqli_num_rows($res)){ 
      $_SESSION['IS_LOGIN']='yes';
      mysqli_query($conn,"delete from loginlogs where IpAddress='$ip_address'");
      
     echo "<script>window.location.href='../Admin/dashboard.php';</script>";

    }else{
      $total_count++;
      $rem_attm=3-$total_count;
      if($rem_attm==0){
        $msg1='disabled';
        $msg="To many failed login attempts. Please login after 45 sec";
      }else{
        $msg="Please enter valid login details.<br/>$rem_attm attempts remaining";
      }
      $try_time=time();
      mysqli_query($conn,"insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");
      
    }
  }
}

// Getting IP Address
function getIpAddr(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
       $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
       $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
       $ipAddr=$_SERVER['REMOTE_ADDR'];
    }
   return $ipAddr;
   }



  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/style.css" />
     <style type="text/css">
      #result{color:red;}
     </style>
    <title>RNL Vision Care
    </title>
    <link rel="shorcut icon" type="img/png" href="assets\images\logo.png">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="" class="sign-in-form">
            <h2 class="title">LOGIN HERE !</h2>
            


            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required="required" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required="required" />
            </div>

            <button class="btn btn-primary" name='login' <?php echo $msg1; ?>>Login</button>
            
           <div id="result"><?php echo $msg; ?></div>

          </form>

          <form action="login.php" method = "POST" class="sign-up-form">
            <h2 class="title">REGISTER HERE ! </h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name = "username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Contact No." name = "contactno"/>
            </div>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name = "email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name = "password" />
            </div>
            <input type="submit" class="btn" value="Sign up" name = 'signup'/>
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome to RNL Vision Care</h3>
            <p style="margin-bottom: 29px;">
              New here? click the sign up button! <br>
            </p>
            <button class="btn transparent" id="sign-up-btn"> 
              Sign up
            </button>


            <br>
            <br>
            <h5><u> <a href="index.php" style="color: rgb(255, 255, 255);">BACK TO HOME PAGE</a></u></h5>
          </div>
          <img src="assets\images\logo.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have an account?</h3>
            <p style="margin-bottom: 29px;">
              Please click the sign in button!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
            <br>
            <br>
            <h5><u> <a href="index.php" style="color: rgb(255, 255, 255);">BACK TO HOME PAGE</a></u></h5>
          </div>
          <img src="assets\images\logo.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets\js\app.js"></script>
  </body>
</html>





  <?php
  


//sign up 
if (isset($_POST['signup']))
{

 require 'conn.php';
    $username = $_POST['username'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $password = $_POST['password'];

  

  $query_signup = "INSERT INTO user(username,contactno,email,password) VALUES ('$username','$contactno', '$email', '$password')" ;

  $result = mysqli_query($conn, $query_signup);
  
  if ($result)
  {
    echo '<script>alert("Data Inserted ")</script>';
 
  }
  else{
    echo '<script>alert("Data not Inserted")</script>';
  }
  mysqli_close($conn);

}


?>




