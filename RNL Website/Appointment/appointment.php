<?php 
include "../db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>APPOINTMENT | RNL VISION CARE</title>
<link rel="shorcut icon" type="img/png" href="../logo.png">
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css/style.css"/>
<script id="applicationScript" type="text/javascript" src="script/script.js"></script>
</head>
<body>
<div id="appointment">

	<div id="APPOINMENT_ck" style="top: 230px;">
		<span>APPOINTMENT</span>
	</div>
	<div id="Home____Appoinment_page_cl" style="top: 290px; left: 830px;">
		<span>Home  »  Appoinment page</span>
	</div>
</svg>
	<img id="Untitled_design_23_cm" src="Untitled_design_23_cm.png" srcset="Untitled_design_23_cm.png 1x, Untitled_design_23_cm@2x.png 2x" style="top:100px;">
		
	<svg class="Rectangle_103">
		<rect id="Rectangle_103" rx="0" ry="0" x="0" y="70" width="1920" height="250">
		</rect>
	</svg>
	<div id="RNL_Vision_Care_co">
		<span>RNL Vision Care</span>
	</div>
	<svg class="Line_14" viewBox="0 0 1920 1">
		<path id="Line_14" d="M 0 0 L 1920 0">
		</path>
	</svg>
	<div id="n_2021_RNL_Vision_Care_All_Rig_cq">
		<span>© 2021 RNL Vision Care All Rights Reserved</span>
	</div>
	<div id="n_09123456789_cr">
		<span>☏ 09123456789</span>
	</div>
	<div id="n_RNLVisionCaregmailcom_cs">
		<span>✉ RNLVisionCare@gmail.com</span>
	</div>
	<div id="Our_Social_Media___cx">
		<span>Our Social Media : </span>
	</div>

	<a href="https://www.instagram.com/explore/locations/105816414916277/rnl-vision-care-center-optical-clinic/">
		<img id="Untitled_design_19_cu" src="Untitled_design_19_cu.png" srcset="Untitled_design_19_cu.png 1x, Untitled_design_19@2x.png 2x">
		</a>
	
		<a href="https://www.facebook.com/RNL-Vision-Care-Center-Optical-Clinic-105816414916277">
		<img id="Untitled_design_17_cv" src="Untitled_design_17_cv.png" srcset="Untitled_design_17_cv.png 1x, Untitled_design_17@2x.png 2x">
		</a>
		
		<a href="https://twitter.com/shumart4">
		<img id="Untitled_design_18_cw" src="Untitled_design_18_cw.png" srcset="Untitled_design_18_cw.png 1x, Untitled_design_18@2x.png 2x">
		</a>
	<div id="Feedback_Us___cy">
		<span>Feedback Us ! </span>
	</div>
	<svg class="Rectangle_104">
		<rect id="Rectangle_104" rx="18" ry="18" x="0" y="0" width="485" height="55">
		</rect>
	</svg>
	<div id="Describe_your_issue_or_idea_c">
		<span>Describe your issue or idea..</span>
	</div>
	<svg class="Rectangle_105">
		<rect id="Rectangle_105" rx="18" ry="18" x="0" y="0" width="97" height="55">
		</rect>
	</svg>
	<div id="Send_c">
		<span>Send</span>
	</div>
	<style>
		.Rectangle_107{
		margin-left: -450px;
		}
			</style>
	<svg class="Rectangle_107">
		<rect id="Rectangle_107" rx="20" ry="20" x="0" y="0" width="806" height="646">
			
		</rect>
	</svg>
	
<form name="form1" method="post" action="appformhandler.php" >

        <p class="error"><?php echo $_GET['error']; ?></p>
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
		  
	<div id="FULL_NAME_db">
		<label>Full Name:</label><br>
			<input type="text" id="fname" name="fname" placeholder="Fullname" required="required"><br>
			<style>
			  input[type=text], select {
				margin-left: -440px;
			  }
			  label {
				margin-left: -440px;
			  }
			  </style>
	</div>
	<div id="EMAIL_dc">
		<label>Email:</label><br>
		<input type="email" id="email" name="email" placeholder="Email" required="required"><br>
		<style>
			  input[type=email], select {
				margin-left: -440px;
			  }
			  </style>
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
					margin-left: -440px;
				  }
				  </style>
	<div id="CONTACT__dd">
		<label>Contact No.:</label><br>
		<input type="tel" pattern="[0-9]{11}"id="contact" name="contact" placeholder="Contact No." required="required" style="width:320px;"><br>
	</div>
	<div id="ddmmyyyy_de">
		<label for="date">Appointment Date:</label><br>
  		<input type="date" id="date" name="date" required="required">
		  <style>
			  input[type=date], select {
				margin-left: -440px;
				width: 285px;
			  }
			  label[for=date] {
				margin-left: -440px;
			  }
			  </style>
	</div>
	<div id="PURPOSE_df" style="width: 150px;">
		<label>Purpose:</label><br>
		<select name="purpose" style="margin-left:-294%;">
    <option value="Eye Check Up">Eye Check-Up</option>
			</select>
		
	</div>
	<div id="time" style="opacity: 0.5;
	left: 1474.5px;
	top: 779px;
	position: absolute;
	overflow: visible;
	width: 113px;
	white-space: nowrap;
	text-align: left;
	font-family: Arial;
	font-style: normal;
	font-weight: normal;
	font-size: 21px;
	color: rgba(255,255,255,1);">
	<style>
		input[type=time], select {
	width: 140%;
	padding: 19px 10px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid white;
	border-radius: 8px;
	box-sizing: border-box;
	background-color: transparent;
	font-size: 20px;
	color: white;
	margin-left: -422%;
	
  }
  </style>
		<label>Time:</label><br><br>
		<input type="time" id="time" name="time" style="margin-left: -390%; margin-top: -45%;">
		
		
	</div>
	
	<div id="Set_Appointment_dh">
		<input type="submit" name="submit" value="Set Appointment" onclick="return confirm('Are you sure set an appointment?')">
		<style>
			input[type=submit] {
				margin-left: -465px;
			}
			</style>
		</div>
        </form>
	<!-- </div>
		<div id="Calendar_Schedule_d">
			<input type="submit" id="date"value="Calendar Schedule">
		</div> -->
		
	
	
	
	<svg class="Rectangle_1">
		<rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1920" height="100">
		</rect>
	</svg>
		
	</a>
	<a href="../home.php">
	<div id="RNL_Vision_Care_ei" style="top: 30px;">
		<span>RNL Vision Care</span>
	</div>
	</a>

	<div id="ABOUT">
		<span>ABOUT</span>
	</div>
	<a href="../home.php">
	<div id="HOME_el">
		<span>HOME</span>
	</div>
	</a>
	<svg class="Rectangle_106">
		<rect id="Rectangle_106" rx="0" ry="0" x="0" y="0" width="1920" height="100">
		</rect>
	</svg>
	<a href="../home.php">
	<img id="Untitled_design_12_eh" src="Untitled_design_12_eh.png" srcset="Untitled_design_12_eh.png 1x, Untitled_design_12_eh@2x.png 2x" style="width:150px;height:100px;">
		
	</a>
	<a href="../home.php">
	<div id="RNL_Vision_Care_ei" style="top: 35px;">
		<span>RNL Vision Care</span>
	</div>
	</a>

	<a href="../About/about.php">
	<div id="ABOUT_ek" style="top:35px; font-size:26px; left:1035px;">
		<span>ABOUT</span>
	</div>
	</a>
	<a href="../home.php">
	<div id="HOME_el" style="top:35px; font-size:26px; left:900px;">
		<span>HOME</span>
	</div>
	</a>
	<a href="../Services/services.php">
	<div id="SERVICES_em" style="top:35px; font-size:26px; left:1179px;">
		<span>SERVICES</span>
	</div>
	</a>
	<a href="../Product/product.php">
	<div id="PRODUCT_en" style="top:35px; font-size:26px; left:1355px;">
		<span>PRODUCT</span>
	</div>
	</a>
	<a href="../Appointment/appointment.php">
	<div id="APPOINTMENT_eo" style="top:35px; font-size:26px; left:1518px;">
		<span>APPOINTMENT</span>
	</div>

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