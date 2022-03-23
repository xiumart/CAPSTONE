
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
          <form method="post" class="sign-in-form">
            <h2 class="title">CODE HERE !</h2>


            <div class="input-field">
              <?php 
include('conn.php');
error_reporting(0);
              $username=$_POST['username'];
      if (isset($_POST['login'])) {
              $query1= mysqli_query($conn,"SELECT * FROM client_user_info WHERE client_lname= '$username'");
    if(mysqli_num_rows ($query1)>0)
    {
      echo $username;
      if ($_POST['username']==$username) {
          echo '<script language="javascript">';
      echo 'alert("You can now login to your account.");';
      echo 'window.location="login.php";';
      echo '</script>';

      }
      else{
        echo '<script>alert("Wrong Confirmation Code")</script>';
      }
      }


    }
              ?>
              <i class="fas fa-user"></i>
              <input type="text" placeholder=" Enter Confirmation code.." name="username" required="required" autocomplete="off"/>
             
            </div>
            <button class="btn btn-primary" name='login'>Confirm</button>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome to RNL Vision Care</h3>
            <p>
              Your Confirmation code is send to your email.
              <br>Thank you
            </p>
            <p style="color:red; font-size: 12px;">
              <b>
                <i>
              *If you dont see the email please check your spam message.
                </i>
              </b>
            </p>
            <br>
          </div>
          <img src="assets\images\logo.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets\js\app.js"></script>
  </body>
</html>

  



