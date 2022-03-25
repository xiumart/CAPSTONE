<?php
include('conn.php');
if (isset($_GET["email"])){
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $error = "";  
  $query = mysqli_query($conn,
  "SELECT * FROM password_reset_temp WHERE email='$email'");
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="https://www.allphptricks.com/forgot-password/index.php">
Click here</a> to reset password.</p>';
echo "<script>alert('link invalid')</script>";
header('refresh:0;url=forgotpassword.php');
 }else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which 
as valid only 24 hours (1 days after request).<br /><br /></p>";
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  } 
}

?>

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
            <h5>Change Password</h5><br>
            <p></p>
            <form action="#" method="post" name="reset">
             <p>New Password</p> 
             <input type="password" name="pass1" maxlength="15" required />
            <p>Confirm Password</p> 
            <input type="password" name="pass2" maxlength="15" required/>
            <input type="hidden" name="email" value="<?php echo $email;?>"/>
            <button type="submit" name="submit" value="Reset Password">Submit</button>
            </form>
            </div>
            <style>
              h5 {
                margin:5px;
                margin-top:70px;
              }
              input[type="password"] {
              
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
                margin-top:25px;
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

<?php
include('conn.php');
if(isset($_POST['submit'])){
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");

if($pass1!=$pass2){

    echo "<script>alert('not the same password')</script>";
   
}else{
    
    $sql ="SELECT * from client_user_info where client_email = '$email'";
    $result = mysqli_query($conn, $sql);
    while ($bow = mysqli_fetch_row($result)){
        $id = $bow[1];

    $pass1 = md5($pass1);
    mysqli_query($conn, "UPDATE client_user set client_password = '$pass1' where client_id = '$id'");
    mysqli_query($conn,"DELETE FROM password_reset_temp WHERE email ='$email'");
    echo "<script>alert('Password Updated')</script>";
    header('refresh:0;url=login.php');
}

}
}
    ?>