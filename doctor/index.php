<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login | RNL Vision Care</title>
<link rel="shorcut icon" type="img/png" href="images\logo.png">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<!--/start-login-one-->
<h1></h1>

		<div class="login">	
			<div class="ribbon-wrapper h2 ribbon-red">
				<div class="ribbon-front">
					<h2>RNL Vision Care</h2>
				</div>
				<div class="ribbon-edge-topleft2"></div>
				<div class="ribbon-edge-bottomleft"></div>
			</div>
			<form action="loginhandler.php" method="post">
				<ul>
					<li>
						<input type="text" class="text" name="users_username" value="" autocomplete="off" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" ><a class=" icon user"></a>
					</li>
					 <li>
						<input type="password" name="users_password" value="" autocomplete="off" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a class=" icon lock"></a>
					</li>
				</ul>
			<div class="submit">
				<input type="submit" onclick="myFunction()" value="Log in" >
			</div>
		</div>
		</form>
<!--start-copyright-->
   		<div class="copy-right">
				<p> &copy; 2022  All rights  Reserved | RNL Vision Care</a></p>
		</div>
	<!--//end-copyright-->
</body>
</html>