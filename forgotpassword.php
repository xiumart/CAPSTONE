<?php
include('conn.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);

if (!$email) {
   $error ="<p>Invalid email address please type a valid email address!</p>";
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
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
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
$mail->Host = "tls://smtp.gmail.com";
$mail->isSMTP();
//$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->Username = "rnlvisioncare@gmail.com";
$mail->Password = "RNLVISIONCARE";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;;
$mail->Port = 587;
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->From='rnlvisioncare@gmaiil.com';
$mail->FromName='RNL Vision Care Team';





$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
 }
   }
}else{
  
?>




<?php
} ?>


<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
 <link rel = "idb" href = "https://mail.google.com/mail/u/0?ui=2&ik=75e158bc8b&attid=0.2&permmsgid=msg-a:r-9758299206723971&th=1772997d80632932&view=fimg&sz=s0-l75-ft&attbid=ANGjdJ-RaswNT-HZ4Z9H737rLwIYcSUsJ03OE_NW6s0uZHBrdvdh074Zx3NAl1Ml3ZXE6FKCwt8sOkpc7TtLXk55rjy3Ff9TeE4jeIow5FIrIZtK3CgdS65kqwMaZHA&disp=emb&realattid=ii_kk84p4bi1" type = "image/x-idb"> 
<!-- Meta tag Keywords -->
<meta name="viewport" dbtent="width=device-width, initial-scale=1">
<meta http-equiv="dbtent-Type" dbtent="text/html; charset=utf-8" />
<meta name="keywords" dbtent="Course Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Meta tag Keywords -->

<link href="css/signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body>
    <!-- banner --> 
    <div class="video">

                <div class="center-dbtainer">
                    <div class="w3ls-agileinfo">
                    </div>
                    <div class="bg-agile">
                             <a for="show" class="close-btn fas fa-times" title="close" href="login.html"></a>
                        <h2>Forgot Password? </h2>
                        <div class="login-form">
                            <form action="#" method="post" name="reset">
                                <input type="email" name="email" placeholder="username@email.com" />         
                                <button type="submit" value="Reset Password"/>Send</button>

                            </form>

                        </div>
                    </div>
                    </div>
                </div>
        </div>
</body>
</html>