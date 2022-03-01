
<?php session_start()


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
    <title>RNL Vision Care
    </title>
    <link rel="shorcut icon" type="img/png" href="logo.png">
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

            <button class="btn btn-primary" name='login' <?php if(!ISSET($_SESSION['msg'])){ echo $_SESSION['msg'];}?>>Login</button>
            <p id="demo"></p>

          </form>

          <form action="#" class="sign-up-form">
            <h2 class="title">REGISTER HERE ! </h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Contact No." />
            </div>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            
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
          <img src="logo.png" class="image" alt="" />
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
          <img src="logo.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>

<?php


  if(ISSET($_POST['login'])){
    require 'conn.php'; 
 
    $username=$_POST['username'];
    $password=$_POST['password'];
 
    $query=mysqli_query($conn, "SELECT * FROM `users_account` WHERE `username`='$username' AND `password`='$password'") or die(mysqli_error());
    $row=mysqli_num_rows($query);
 
    if($row > 0){
      echo "<center><label class='text-success'>Login success!</label></center>";
      session_destroy();
    }else{
      if(!ISSET($_SESSION['attempt'])){
        $_SESSION['attempt'] = 0;
      }
 
      $_SESSION['attempt'] += 1;
 
      if($_SESSION['attempt'] === 3){
        $_SESSION['msg'] = "disabled";
        echo '<script>alert("To many failed login attempts. Please login after 45 sec")</script>';
        header("Refresh:1;url=wait.php");
      }
 
 
      echo '<script>alert("Invalid username or password")</script>';
    }
  }
?>




