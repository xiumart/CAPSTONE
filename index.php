<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> RNL Vision Care Center | Home</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
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
          <img src="assets\images\logo.png" height="80px">RNL Vision Care</a>
      </h1>

      <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.php">
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item @@courses__active">
            <a class="nav-link" href="product.php?prod=ALL">Product</a>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

      
        <div class="search-right">
          
        
        </div>
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
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>When Life Gets Blurry <br>See Your Eye Doctor</h5>
                                    <p class="mt-4 pr-lg-4">RNL Vision Care is with you </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="login.php"> Set an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            
</section>
<!-- /main-slider -->
<section class="w3l-courses">
    <div class="blog pb-5" id="courses">
        <div class="container py-lg-5 py-md-4 py-2">
            <h5 class="title-small text-center mb-1">See our product</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">Featured <span>Product</span></h3>
            <div class="row">
              
<?php
include "conn.php";
error_reporting(0);
  $sql1 = "SELECT * FROM `product` LIMIT 3 ";
   $result = $conn->query($sql1);


                                    if($result->num_rows > 0){
                                        while($row = $result -> fetch_assoc()){
?>
                <div class="col-lg-4 col-md-6 item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#course-single" class="zoom d-block">
                              <img src="admin/images/product_img/<?php echo $row['image'];?>" alt="<?php echo $row['image'];?>" class="card-img-bottom d-block" style="width:100%; height:300px;" >
                              
                            </a>
                           
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p>???<?php echo $row['sellingprice'];?>.00</p>
                              
                            </div>
                            <h5><?php echo $row['brand'];?>&nbsp<?php echo $row['model'];?>&nbsp<?php echo $row['category'];?></h5>
                            <div class="course-meta mt-4">
                               
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
<?php
}}
?>
            </div>
            <div class="mt-5 text-more">
                <p class="pt-md-3 sample text-center">
            
                    <a href="product.php">View All Product <span class="pl-2 fa fa-long-arrow-right"></span></a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="w3l-features py-5" id="facilities">
    <div class="call-w3 py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-5 feature-grid-left">
                    <h5 class="title-small mb-1">We Offers</h5>
                    <h3 class="title-big mb-4">Complete Eyeglass (Frame + Lens) </h3>
                    
                    <p class="mt-3">
                        <ul>
                            <li>- Ordinary Lens ???499</li>
                            <li>- Double Vision Lens ???599</li>
                            <li>- Multicoated Lens ???999</li>
                            <li>- Blueblocker Lens ???1799</li>
                            <li>- Photochromic/Transition Lens ???1999</li>
                            <li>- Progressive Lens ???1999</li>
                        </ul>
                    <a href="contact.php" class="btn btn-primary btn-style mt-md-5 mt-4">Contact Us !</a>
                </div>
                <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-eye"></span></a>
                            <h4><a href="#feature" class="title-head">Free Computerized Eye Exam
                            </a></h4>
                            <p>We offer free eye exam for those who avail our product.</p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-calendar-o"></span></a>
                            <h4><a href="#feature" class="title-head">Availability</a></h4>
                            <p> Our clinic is open Monday to Friday, 8:00am to 5:00pm</p>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="middle py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="welcome-left text-center py-lg-4">
            <h5 class="title-small mb-1">Online Appointment</h5>
            <h3 class="title-big">See our free online appointment.</h3>
            <a href="login.php" class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2">Set an Appointment now!</a>
            <a href="contact.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a>
        </div>
    </div>
</div>
<!-- //middle -->

<!-- testimonials -->
<section class="w3l-testimonials" id="clients">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
        <div class="container py-lg-4 py-md-3 pb-lg-0">

            <h5 class="title-small text-center mb-1">Testimonials</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">Happy Clients & Feedbacks</h3>
            <!-- /grids -->
            <div class="testimonial-width">
                <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                <?php
              require_once("db/feedback/feedbackdisplay.php");
              while($row = mysqli_fetch_assoc($query)){
            ?>
              <div class="item" >
                        <div class="testimonial-content">
                            <div class="testimonial" style="height:250px;">
                                <blockquote>
                                   <h6><?php echo $row['feed_subj'];?></h6>
                                    <q><?php echo $row['feed_comments'];?></q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="peopl align-self">
                                       
                                        <p>-<?php echo $row['client_id'];?></p>
                                        <p class="indentity"><?php echo $row['feedbackdate'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
              }
            ?>
                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>
<!-- //testimonials -->



<!-- footer -->
<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-md-4">
      <div class="row footer-top-29">
        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
          <h6 class="footer-title-29">Contact Info </h6>
          <p>Address : Stall #13 2nd floor Inno Block Mall Zabarte Road Cor Camarin-Susano Road, North Caloocan City</p>
          <p class="my-2">Phone : <a href="tel:(+63)998 218 1412">(+63)998 218 1412</a></p>
          <p>Email : <a href="mailto:rnlvisioncare@gmail.com">rnlvisioncare@gmail.com</a></p>
          <div class="main-social-footer-29 mt-4">
            <a href="https://www.facebook.com/RNL-Vision-Care-Center-Optical-Clinic-110677344428412" class="facebook"><span class="fa fa-facebook"></span></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

          <ul>
            <h6 class="footer-title-29">RNL Vision Care</h6>
            <li><a href="about.php">About company</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
     
        
      </div>
    </div>
  </div>
  <!-- copyright -->
  <section class="w3l-copyright text-center">
    <div class="container">
      <p class="copy-footer-29">?? 2022 RNL Vision Care. All rights reserved</p>
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

</html>



