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

<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
 <link rel = "iconn" href = "https://mail.google.com/mail/u/0?ui=2&ik=75e158bc8b&attid=0.2&permmsgid=msg-a:r-9758299206723971&th=1772997d80632932&view=fimg&sz=s0-l75-ft&attbid=ANGjdJ-RaswNT-HZ4Z9H737rLwIYcSUsJ03OE_NW6s0uZHBrdvdh074Zx3NAl1Ml3ZXE6FKCwt8sOkpc7TtLXk55rjy3Ff9TeE4jeIow5FIrIZtK3CgdS65kqwMaZHA&disp=emb&realattid=ii_kk84p4bi1" type = "image/x-iconn"> 
<!-- Meta tag Keywords -->
<meta name="viewport" conntent="width=device-width, initial-scale=1">
<meta http-equiv="conntent-Type" conntent="text/html; charset=utf-8" />
<meta name="keywords" conntent="Course Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> ntListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Meta tag Keywords -->

<link href="css/signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!-- //web-fonts --> 
    <!-- banner --> 
    <div class="video">

                <div class="center-conntainer">
                    <div class="w3ls-agileinfo">
                    </div>
                    <div class="bg-agile">
                             <a for="show" class="close-btn fas fa-times" title="close" href="login.php"></a>
                        <h2>Change Password </h2>
                        <div class="login-form">
                            <form action="" method="post">
                                <input type="password" name="pass1" maxlength="15" required />
                                <input type="password" name="pass2" maxlength="15" required/>
                                <div class="right-agileits">

                                </div>
                                <input type="hidden" name="email" value="<?php echo $email;?>"/>
                                <button type="submit" name="submit" value="Reset Password">Submit</button>
                            </form>

                        </div>
                    </div>
                    <div class="copy w3ls">
                        <p>&copy; 2020 CoreEnergym . All rights reserved | SIA GROUP 2</p>
                    </div>
                </div>
        </div>
</body>
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