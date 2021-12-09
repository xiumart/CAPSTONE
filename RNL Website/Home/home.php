<?php 
include "../db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>home</title>
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
	<style>
	input[type=tel], select {
					width: 200%;
					padding: 19px 10px;
					margin: 8px 0;
					display: inline-block;
					border: 1px solid #ccc;
					border-radius: 8px;
					box-sizing: border-box;
					background-color: transparent;
					font-size: 20px;
					color: white;
				  }
				  </style>
	<div id="CONTACT_">
		<label>Contact No.:</label><br>
		<input type="tel" pattern="[0-9]{11}" id="contact" name="contact" placeholder="Contact No."><br>
	</div>
	<style>
		input[type=date], select {
		width: 200%;
		padding: 19px 10px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 8px;
		box-sizing: border-box;
		background-color: transparent;
		font-size: 20px;
		color: white;
	  }
	  </style>
	<div id="ddmmyyyy">
		<label for="date">Date:</label><br>
  		<input type="date" id="date" name="date">
	</div>
	<div id="PURPOSE">
		<label>Purpose:</label><br>
		<input type="text" id="purpose" name="purpose" placeholder="Purpose"><br>
	</div>
	<div id="Set_Appointment">
		<input type="submit" value="Set Appointment">
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
		<span>Kung ikaw ay masaya tumawa ka <br/>HA HA.</span>
	</div>
	<div id="Super_Saya_">
		<span>Super Saya 〞</span>
	</div>
	<div id="n__Marliardo_Umbao">
		<span>- Marliardo Umbao</span>
	</div>
	<svg class="Rectangle_34">
		<rect id="Rectangle_34" rx="43" ry="43" x="0" y="0" width="505" height="376">
		</rect>
	</svg>
	<div id="Text_fj">
		<span>❝</span>
	</div>
	<div id="Kung_ikaw_ay_masaya_tumawa_ka__fk">
		<span>Kung ikaw ay masaya tumawa ka <br/>HA HA.</span>
	</div>
	<div id="Super_Saya__fl">
		<span>Super Saya 〞</span>
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
		<span>Kung ikaw ay masaya tumawa ka <br/>HA HA.</span>
	</div>
	<div id="Super_Saya__fq">
		<span>Super Saya 〞</span>
	</div>
	<div id="n__Marliardo_Umbao_fr">
		<span>- Marliardo Umbao</span>
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
	<a href="../Home/home.php">
	<img id="Untitled_design_12" src="Untitled_design_12.png" srcset="Untitled_design_12.png 1x, Untitled_design_12@2x.png 2x">
		
	</a>
	<a href="../Home/home.php">
	<div id="RNL_Vision_Care_gc">
		<span>RNL Vision Care</span>
	</div>
	</a>
	<svg class="Icon_ionic-md-eye" viewBox="2.25 7.383 53.692 36.194">
		<path id="Icon_ionic-md-eye" d="M 29.09608459472656 7.3828125 C 16.89549827575684 7.3828125 6.516610145568848 14.86136245727539 2.25 25.47994995117188 C 6.516610145568848 36.09852981567383 16.89549827575684 43.57708740234375 29.09608459472656 43.57708740234375 C 41.29667282104492 43.57708740234375 51.67556381225586 36.09852981567383 55.94216918945312 25.47994995117188 C 51.67556381225586 14.86136245727539 41.29667282104492 7.3828125 29.09608459472656 7.3828125 Z M 29.09608459472656 37.54870223999023 C 22.38456153869629 37.54870223999023 16.89549827575684 32.11956405639648 16.89549827575684 25.47994995117188 C 16.89549827575684 18.8403377532959 22.38456153869629 13.41119575500488 29.09608459472656 13.41119575500488 C 35.8076057434082 13.41119575500488 41.29667282104492 18.8403377532959 41.29667282104492 25.47994995117188 C 41.29667282104492 32.11956405639648 35.8076057434082 37.54870223999023 29.09608459472656 37.54870223999023 Z M 29.09608459472656 18.2410945892334 C 25.06916999816895 18.2410945892334 21.77333450317383 21.50097846984863 21.77333450317383 25.47994995117188 C 21.77333450317383 29.45891952514648 25.06916999816895 32.71880722045898 29.09608459472656 32.71880722045898 C 33.12299346923828 32.71880722045898 36.41883087158203 29.45892524719238 36.41883087158203 25.47994995117188 C 36.41883087158203 21.5009765625 33.12299346923828 18.2410945892334 29.09608459472656 18.2410945892334 Z">
		</path>
	</svg>
	<a href="../About/about.php">
	<div id="ABOUT">
		<span>ABOUT</span>
	</div>
	</a>
	<a href="../Home/home.php">
	<div id="HOME_gf">
		<span>HOME</span>
	</div>
	</a>
	<a href="../Services/services.php">
	<div id="SERVICES">
		<span>SERVICES</span>
	</div>
	</a>
	<a href="../Product/product.php">
	<div id="PRODUCT">
		<span>PRODUCT</span>
	</div>
	</a>
	<a href="../Appointment/appointment.php">
	<div id="APPOINTMENT">
		<span>APPOINTMENT</span>
	</div>
	</a>
</div>

<style>	
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: teal;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
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