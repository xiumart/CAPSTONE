<?php
include('conn.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$error = "";

if (!$email) {
   $error ="Invalid email address please type a valid email address!";
   echo "<script>alert('$error')</script>";
   }else{

   $sel_query = "SELECT * FROM client_user_info WHERE client_email='".$email."'";
   $results = mysqli_query($conn, $sel_query);
   $row = mysqli_num_rows($results);

   


   if ($row=="0"){
   $error = "No user is registered with this email address!";
   echo "<script>alert('$error')</script>";
   }
 }
  

  
   if($error!=""){
   echo "<div class='error'>".$error."";
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2+(int)$email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
// Insert Temp Table
   mysqli_query($conn,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");
 
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="localhost/CAPSTONE/change_password.php?
key='.$key.'&email='.$email.'&action=reset" target="_blank">
localhost/CAPSTONE/change_password.php
?key='.$key.'&email='.$email.'&action=reset</a></p>'; 
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   
$output.='<p>Thanks,</p>';
$output.='<p>RNL Care Team</p>';
$body = $output; 
$subject = "Password Recovery - RNL Vision Care";
 
$email_to = $email;



require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
$mail = new PHPMailer();;
$mail->Host = "smtp.gmail.com";
$mail->isSMTP();
//$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->Username = "rnlvisioncareteam@gmail.com";
$mail->Password = "RNL12345678";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;;
$mail->Port = 587;
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->From='rnlvisioncareteam@gmaiil.com';
$mail->FromName='RNL Vision Care Team';





$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
  $error = "An email has been sent to you with instructions on how to reset your password.";
  echo "<script>alert('$error')</script>";
 }
   }
}else{
  
?>




<?php
} ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>RNL Vision Care | About </title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="shorcut icon" type="img/png" href="assets\images\logo.png">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark stroke">
      <h1>
        <a class="navbar-brand" href="index.php">
          <img src="assets\images\logo.png" height="80px">RNL Vision Care</span></a>
      </h1>

      <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-lg-auto">
          <li class="nav-item @@home__active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item @@courses__active">
            <a class="nav-link" href="product.php?prod=ALL">Product</a>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

       
        <div class="top-quote mr-lg-2 text-center">
          <a href="login.php" class="btn login mr-2"><span class="fa fa-user"></span> login</a>
        </div>
      </div>    
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container py-1">
                <i class="gg-sun" style="cursor:pointer;"></i>
                <i class="gg-moon" style="cursor:pointer;"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!--/header-->
<!-- about breadcrumb -->
<section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
            
            <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-5">
               
            </ul>
        </div>
    </div>
    <div class="waveWrapper waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
        </svg>
    </div>
</section>
<!-- //about breadcrumb -->
<section id="about" class="home-services pt-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
         
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
            <h5>ENTER YOU EMAIL</h5>
            <p></p>
            <form action="#" method="post" name="reset">
            <input type="email" name="email" placeholder="username@email.com" />
            <button type="submit" value="Reset Password"/>Send</button>
            </form>
            </div>
            <style>
              h5 {
                margin:5px;
                margin-top:70px;
              }
              input[type="email"] {
                border:1px solid #00c2cb;
                padding:2px;
                margin:5px;
                width:100%;
              }
              button {
                width:100%;
                padding:2px;
                margin:5px;
                background-color: #00c2cb;
                color: white;
              }
              p {
                margin:5px;
              }
            </style>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
               
            </div>
        </div>
    </div>
</section>
<section class="w3l-aboutblock1 py-5" id="about">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            
        </div>
    </div>
</section>

  <!-- copyright -->
  <section class="w3l-copyright text-center">
    <div class="container">
      <p class="copy-footer-29">© 2022 RNL Vision Care. All rights reserved.</p>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
</section>
<!-- //footer -->

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
          loop: true,
          margin: 20,
          nav: false,
          responsiveClass: true,
          responsive: {
              0: {
                  items: 1,
                  nav: false
              },
              768: {
                  items: 2,
                  nav: false
              },
              1000: {
                  items: 3,
                  nav: false,
                  loop: false
              }
          }
      })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>


</body>
<style>
  :root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #00c2cb;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #00c2cb;
  --secondary: #1545CB;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #00c2cb;
  --light: #f8f9fa;
  --dark: #343a40; 
}
  .step-wizard {
    height: 1000px;
    width: 10%;
    display: flex; 
}
.step-wizard-list{
    background: transparent;
    color: var(--font-color);
    list-style-type: none;
    border-radius: 10px;
    display: flex;
    padding: 20px 10px;
    position: relative;
    z-index: 10;
}

.step-wizard-item{
    padding: 0 20px;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive:1;
    flex-grow: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    min-width: 170px;
    position: relative;
}
.step-wizard-item + .step-wizard-item:after{
    content: "";
    position: absolute;
    left: 0;
    top: 19px;
    background: #21d4fd;
    width: 100%;
    height: 2px;
    transform: translateX(-50%);
    z-index: -10;
}
.progress-count{
    height: 40px;
    width:40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 600;
    margin: 0 auto;
    position: relative;
    z-index:10;
    color: transparent;
}
.progress-count:after{
    content: "";
    height: 40px;
    width: 40px;
    background: #21d4fd;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -10;
}
.progress-count:before{
    content: "";
    height: 10px;
    width: 20px;
    border-left: 3px solid #fff;
    border-bottom: 3px solid #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -60%) rotate(-45deg);
    transform-origin: center center;
}
.progress-label{
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
}
.current-item .progress-count:before,
.current-item ~ .step-wizard-item .progress-count:before{
    display: none;
}
.current-item ~ .step-wizard-item .progress-count:after{
    height:10px;
    width:10px;
}
.current-item ~ .step-wizard-item .progress-label{
    opacity: 0.5;
}
.current-item .progress-count:after{
    background: var(--bg-color);
    border: 2px solid #21d4fd;
}
.current-item .progress-count{
    color: #21d4fd;
}
</style>

</html>