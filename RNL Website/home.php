<?php 
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RNL VISION CARE</title>
<link rel="shorcut icon" type="img/png" href="logo.png">
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css/style.css"/>
<script id="applicationScript" type="text/javascript" src="script/script.js"></script>
</head>
<body>
	
<div id="home">
	<img id="background" src="background.png" srcset="background.png 1x, background@2x.png 2x">
		
	<div id="WHEN_LIFE_GETS_BLURRY_SEE_YOUR">
		<b><span>WHEN LIFE GETS</span><span style="color:rgba(0,194,203,1);"> BLURRY</span><br/><span>SEE YOUR</span><span style="color:rgba(0,194,203,1);"> EYE DOCTOR</span><b>
	</div>
	<!--Featured-->
	<div id="FEATURED_PRODUCT">
		<b><span>FEATURED PRODUCT</span></b>
		<div class="slide hi-slide">
		  <div class="hi-prev "></div>
			<div class="hi-next "></div>
			<ul>
				<li><img src="1.jpg" alt="Img 2" /></li>
				<li><img src="2.png" alt="Img 3" /></li>
				<li><img src="3.jpg" alt="Img 4" /></li>
				<li><img src="4.jpg" alt="Img 5" /></li>
				<li><img src="5.jpg" alt="Img 6" /></li>
				<li><img src="6.jpg" alt="Img 7" /></li>
        <li><img src="7.png" alt="Img 8" /></li>
			</ul>
		</div>
	
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.hislide.js" ></script>
		<script>
			$('.slide').hiSlide();
		</script>
	</div>
	<svg class="Path_1" viewBox="0 0 300 10">
		<path id="Path_1" d="M 0 0 L 300 0">
		</path>
	</svg>
	
	<!--Latest-->
	<div id="LATEST_PRODUCT">
		<b><span>LATEST PRODUCT</span></b>
		<div class="slide hi-slide">
			<div class="hi-prev "></div>
			  <div class="hi-next "></div>
			  <ul>
				  <li><img src="1.jpg" alt="Img 2" /></li>
				  <li><img src="2.png" alt="Img 3" /></li>
				  <li><img src="3.jpg" alt="Img 4" /></li>
				  <li><img src="4.jpg" alt="Img 5" /></li>
				  <li><img src="5.jpg" alt="Img 6" /></li>
				  <li><img src="6.jpg" alt="Img 7" /></li>
		  <li><img src="7.png" alt="Img 8" /></li>
			  </ul>
		  </div>
		  
		  
		  
	  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		  <script type="text/javascript" src="js/jquery.hislide.js" ></script>
		  <script>
			  $('.slide').hiSlide();
		  </script>
	</div>
	<svg class="Path_2" viewBox="0 0 300 10">
		<path id="Path_2" d="M 0 0 L 300 0">
		</path>
	</svg>

	
	<div id="WE_OFFERS">
		<b><span>WE OFFERS</span></b>
	</div>
	<svg class="Path_3" viewBox="0 0 300 10">
		<path id="Path_3" d="M 0 0 L 300 0">
		</path>
	</svg>
	<div id="Ordinary_Lens">
		<span>Ordinary Lens</span>
	</div>
	<div id="COMPLETE_EYEGLASS__FRAME__LENS">
		<span>COMPLETE EYEGLASS ( FRAME + LENS )</span>
	</div>
	<div id="FOR_AS_LOW_AS">
		<span>FOR AS LOW AS:</span>
	</div>
	<div id="n_99">
		<span>₱499</span>
	</div>
	<div id="Double_Vision_Lens">
		<span>Double Vision Lens</span>
	</div>
	<div id="n_99_dv">
		<span>₱599</span>
	</div>
	<div id="Multicoated_Lens">
		<span>Multicoated Lens</span>
	</div>
	<div id="n_99_dx">
		<span>₱999</span>
	</div>
	<div id="Blue_Blocker_Lens">
		<span>Blue Blocker Lens</span>
	</div>
	<div id="n_799">
		<span>₱1799</span>
	</div>
	<div id="Photochromic__Transition_Lens">
		<span>Photochromic / Transition Lens</span>
	</div>
	<div id="n_999">
		<span>₱1999</span>
	</div>
	<div id="Progressive_Lens">
		<span>Progressive Lens</span>
	</div>
	<div id="n_999_d">
		<span>₱1999</span>
	</div>
	<svg class="Line_4" viewBox="0 0 768 1">
		<path id="Line_4" d="M 0 0 L 768 0">
		</path>
	</svg>
	<svg class="Line_5" viewBox="0 0 768 1">
		<path id="Line_5" d="M 0 0 L 768 0">
		</path>
	</svg>
	<div id="FREE_COMPUTERIZE_EYE_EXAM">
		<span>FREE COMPUTERIZE EYE EXAM</span>
	</div>
	<img id="Untitled_design_7" src="Untitled_design_7.png" srcset="Untitled_design_7.png 1x, Untitled_design_7@2x.png 2x">
		
	
	<div id="MAKE_AN_APPOINTMENT">
		<b><span>MAKE AN APPOINTMENT</span></b>
	</div>
	<svg class="Path_4" viewBox="0 0 300 10">
		<path id="Path_4" d="M 0 0 L 300 0">
		</path>
	</svg>
	<svg class="Rectangle_5">
		<rect id="Rectangle_5" rx="20" ry="20" x="0" y="0" width="806" height="678">
		</rect>
	</svg>
	<form name="form1" method="post" action="appformhandler.php" >
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
	<div id="FULL_NAME">
		<label>Full Name:</label><br>
			<input type="text" id="fname" name="fname" placeholder="Fullname"><br>
	</div>
	<div id="EMAIL">
		<label>Email:</label><br>
		<input type="email" id="email" name="email" placeholder="Email"><br>
	</div>
	<!-- <style>
	input[type=tel], select {
					width: 200%;
					padding: 19px 10px;
					margin: 8px 0;
					display: inline-block;
					border: 1px solid black;
					border-radius: 8px;
					box-sizing: border-box;
					background-color: transparent;
					font-size: 20px;
					color: white;
				  }
				  </style> -->
	<div id="CONTACT_" style="width: 160px;">
		<label>Contact No.:</label><br>
		<input type="tel" pattern="[0-9]{11}" id="contact" name="contact" placeholder="Contact No."><br>
	</div>
	<!-- <style>
		input[type=date], select {
		width: 200%;
		padding: 19px 10px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid black;
		border-radius: 8px;
		box-sizing: border-box;
		background-color: transparent;
		font-size: 20px;
		color: white;
	  }
	  </style> -->
	<div id="ddmmyyyy" style="width: 140px;">
		<label for="date">Appointment Date:</label><br>
  		<input type="date" id="date" name="date">
	</div>
	<style>
		option {
			color: black;
		}
		</style>
	<div id="PURPOSE"  style="width: 260px;">
		<label>Purpose:</label><br><br>
		<select name="purpose">
    <option>Eye Check-Up</option>
	<option>Mata Check-Up</option>
			</select>
	</div>
	<div id="time"  style="width: 230px;opacity: 0.5;
	left: 1419.5px;
	top: 4281px;
	position: absolute;
	overflow: visible;
	white-space: nowrap;
	text-align: left;
	font-family: Arial;
	font-style: normal;
	font-weight: normal;
	font-size: 21px;
	color: rgba(255,255,255,1);">
		<label>Time:</label><br><br>
		<input type="time" id="time" name="time">
		<style>
		input[type=time], select {
	width: 80%;
	padding: 19px 10px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid white;
	border-radius: 8px;
	box-sizing: border-box;
	background-color: transparent;
	font-size: 20px;
	color: white;
  }
  </style>
		<!-- <select name="time" >
    <option value="8:00am" style="color:black;">08:00am</option>
	<option value="9:00am" style="color:black;">09:00am</option>
	<option value="9:00am" style="color:black;">10:00am</option>
	<option value="9:00am" style="color:black;">11:00am</option>
	<option value="9:00am" style="color:black;">01:00pm</option>
	<option value="9:00am" style="color:black;">02:00pm</option>
	<option value="9:00am" style="color:black;">03:00pm</option>
	<option value="9:00am" style="color:black;">04:00pm</option>
			</select> -->
	</div>
	<div id="Set_Appointment">
		<input type="submit" value="Set Appointment" onclick="return confirm('Are you sure set an appointment?')">
		</div>
	<div id="Contact_Us">
		<input type= "submit" id="contactus" value="Contact Us"> 
	</div>
	<div id="We_believe_in_providing_the_be">
		<span>We believe in providing the best possible care <br/>to all our existing patients and welcome new <br/>patients to sample.</span>
	</div>
	<div id="ENJOY_OUR_SERVICES">
		<span>ENJOY OUR SERVICES</span>
	</div>
	<svg class="Rectangle_65">
		<rect id="Rectangle_65" rx="0" ry="0" x="0" y="0" width="1920" height="950">
		</rect>
	</svg>
	<div id="TESTIMONIALS">
		<b><span>TESTIMONIALS</span></b>
	</div>
	<svg class="Path_5" viewBox="0 0 300 10">
		<path id="Path_5" d="M 0 0 L 300 0">
		</path>
	</svg>
	<div id="HAPPY_CLIENTS">
		<span>HAPPY CLIENTS</span>
	</div>
	<svg class="Rectangle_33">
		<rect id="Rectangle_33" rx="43" ry="43" x="0" y="0" width="505" height="376">
		</rect>
	</svg>
	<div id="Text">
		<span>❝</span>
	</div>
	<div id="Kung_ikaw_ay_masaya_tumawa_ka_">
		<span>The Doctors are <br> very sensitive that
		make you<br> feel comfortable. Love them!</span>
	</div>
	<div id="Super_Saya_">
		<span>Excellent! 〞</span>
	</div>
	<div id="n__Marliardo_Umbao">
		<span>-Gail Delima</span>
	</div>
	<svg class="Rectangle_34">
		<rect id="Rectangle_34" rx="43" ry="43" x="0" y="0" width="505" height="376">
		</rect>
	</svg>
	<div id="Text_fj">
		<span>❝</span>
	</div>
	<div id="Kung_ikaw_ay_masaya_tumawa_ka__fk">
		<span>I find that this pair is quite <br>comfortable on the eyes. I wore it<br> and it didn’t irritate my eyes.</span>
	</div>
	<div id="Super_Saya__fl">
		<span>Comfortable 〞</span>
	</div>
	<div id="n__Marliardo_Umbao_fm">
		<span>- Marliardo Umbao</span>
	</div>
	<svg class="Rectangle_35">
		<rect id="Rectangle_35" rx="43" ry="43" x="0" y="0" width="505" height="376">
		</rect>
	</svg>
	<div id="Text_fo">
		<span>❝</span>
	</div>
	<div id="Kung_ikaw_ay_masaya_tumawa_ka__fp">
		<span>Lightweight eyewear <br>and welcoming staff. <br>Fairview branch</span>
	</div>
	<div id="Super_Saya__fq">
		<span>Quality 〞</span>
	</div>
	<div id="n__Marliardo_Umbao_fr">
		<span>- Raymart Gahopo</span>
	</div>
	<svg class="Ellipse_1_fs">
		<ellipse id="Ellipse_1_fs" rx="10" ry="10" cx="10" cy="10">
		</ellipse>
	</svg>
	<svg class="Ellipse_2_ft">
		<ellipse id="Ellipse_2_ft" rx="10" ry="10" cx="10" cy="10">
		</ellipse>
	</svg>
	<svg class="Ellipse_3_fu">
		<ellipse id="Ellipse_3_fu" rx="10" ry="10" cx="10" cy="10">
		</ellipse>
	</svg>
	<div id="RNL_Vision_Care">
		<span>RNL Vision Care</span>
	</div>
	<svg class="Line_9" viewBox="0 0 1920 1">
		<path id="Line_9" d="M 0 0 L 1920 0">
		</path>
	</svg>
	<div id="n_2021_RNL_Vision_Care_All_Rig">
		<span>© 2021 RNL Vision Care All Rights Reserved</span>
	</div>
	<div id="n_09123456789">
		<span>☏ 09123456789</span>
	</div>
	<div id="n_RNLVisionCaregmailcom">
		<span>✉ RNLVisionCare@gmail.com</span>
	</div>
	<div id="Our_Social_Media___f">
		<span>Our Social Media : </span>
	</div>
	<a href="https://www.instagram.com/explore/locations/105816414916277/rnl-vision-care-center-optical-clinic/">
	<img id="Untitled_design_19" src="Untitled_design_19.png" srcset="Untitled_design_19.png 1x, Untitled_design_19@2x.png 2x">
	</a>

	<a href="https://www.facebook.com/RNL-Vision-Care-Center-Optical-Clinic-105816414916277">
	<img id="Untitled_design_17" src="Untitled_design_17.png" srcset="Untitled_design_17.png 1x, Untitled_design_17@2x.png 2x">
	</a>
	
	<a href="https://twitter.com/shumart4">
	<img id="Untitled_design_18" src="Untitled_design_18.png" srcset="Untitled_design_18.png 1x, Untitled_design_18@2x.png 2x">
	</a>

	<div id="Feedback_Us__">
		<span>Feedback Us ! </span>
	</div>
	
	<div id="Describe_your_issue_or_idea">
		<input type="text" id="describeidea" placeholder="Describe your issue or idea..">
	</div>
	
	<div id="Send">
		<input type="button" value="Send" id="feedback_s">
	</div>
	<svg class="Rectangle_1">
		<rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1920" height="100">
		</rect>
	</svg>
	<a href="home.php">
	<img id="Untitled_design_12" src="logo.png">
		
	</a>
	<a href="home.php">
	<div id="RNL_Vision_Care_gc">
		<span>RNL Vision Care</span>
	</div>
	</a>



	<a href="About/about.php">
	<div id="ABOUT">	
		<span>ABOUT</span>
	</div>
	</a>
	<a href="home.php">
	<div id="HOME_gf">
		<span>HOME</span>
	</div>
	</a>
	<a href="Services/services.php">
	<div id="SERVICES">
		<span>SERVICES</span>
	</div>
	</a>
	<a href="Product/product.php">
	<div id="PRODUCT">
		<span>PRODUCT</span>
	</div>
	</a>
	<a href="Appointment/appointment.php">
	<div id="APPOINTMENT">
		<span>APPOINTMENT</span>
	</div>
	</a>

<button class="btn btn-light" onclick="swapStyle('css/light.css')" id="wow" style="font-size:50px; background-color:rgba(18,18,18,1); color:white; margin-left: 50px;">👁</button>
		<button class="btn btn-dark" onclick="swapStyle('css/style.css')" id="wew" style="font-size:50px; color:black; background-color:rgb(248, 248, 248);">👁</button>
		<script type="text/javascript">

		var setTheme = localStorage.getItem('theme')
		console.log('theme:', setTheme)

		if (setTheme == null){
			swapStyle('css/style.css')
		}else{
			swapStyle(setTheme)
		}

		function swapStyle(sheet){
			document.getElementById('applicationStylesheet').href = sheet
			localStorage.setItem('theme', sheet)
		}
		
	</script>

</div>

<style>	
#myBtn {
  display: none;
  position: fixed;
  bottom: 10px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: teal;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 5px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
<script>
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>