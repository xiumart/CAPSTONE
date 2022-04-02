  <?php
include ('session.php');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets\css\user-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <title>RNL Vision Care</title>
  <script src="script.js" charset="utf-8"></script>
  <link rel="shorcut icon" type="img/png" href="assets\images\logo.png">
</head>

<body>
  <header>
    <section class="head">
      <div class="container flex1">
        <div class="left flex1">
        <div class="logo">
        <a href="users.php"><img src="assets\images\logo.png" alt="" style="position:fixed;width:80px;top:-3%;left:5%;pointer:cursor;" id="icnlogo"></a>
            <h3><a href="users.php" style="color:white;">RNL Vision Care</a></h3>
          </div>

          <div class="search flex">
          
          </div>
          <div class="select">
            
          </div>
        </div>

        <div class="right flex ">
          
          </div>
          <style>
.dropbtn {
  background-color: #00c2cb;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  width: 120%;
}

.dropdown {
  position: relative;
  display: inline-block;
  border-radius: 8px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 8px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-radius: 8px;
}

.dropdown-content a:hover {
  background-color: #00c2cb;
  
}

.dropdown:hover .dropdown-content {
  display: block;
  border-radius: 8px;
}

.dropdown:hover .dropbtn {
  background-color: #2881e0;
  border-radius: 8px;
}

button:hover{
  background-color: #00c2cb;
}
</style>
          <div class="admin flex">
            <!-- <div class="text flex"> -->
            <div class="dropdown">
  <button class="dropbtn" style="background-color: #01969e;">
    <?php 
include('conn.php');
if($_SESSION["login_user"]) {?>
<label style="cursor: pointer; text-transform: uppercase;">hello, <?php echo $_SESSION['login_user'];?> <i class="fa fa-angle-down"></i> </label></button>
  <div class="dropdown-content">
    <a href="users-profile.php">Edit Profile</a>
    <a href="users-changepassword.php">Change Password</a>
    <a href="logout.php" style="color:red;">Logout</a>
    <?php
}else echo "<h1>Please login first .</h1>";
$user=$_SESSION['login_user'];
?>
  </div>
</div>  
            </div>
    </section>

    <section class="menu">
      <div class="container">
        <div class="navbar">
          <nav>
            <ul id="menuitem">
              <li>
                <a href="users.php">
                  <i class="fa fa-medkit"></i>
                  <h5>Check-ups</h5>
                </a>
              </li>
              <li>
                <a href="users-appointment.php">
                  <i class="fa fa-calendar"></i>
                  <h5>Appointments</h5>
                  
                </a>
              </li>
              <li>
                <?php
                 $mensahe = "";
                 $user = $_SESSION['login_user'];

                  $sql1 = mysqli_query($conn, "SELECT app_contact from appointment where app_user = '$user'");
                  
                  while($sagot = mysqli_fetch_assoc($sql1))

                  $kontak = $sagot['app_contact'];

                
                    
                  $sql2 = mysqli_query($conn, "SELECT COUNT(*) as total from appointment_history where app_contact = '$kontak' AND app_remarks = 'FINISH'");

                    while ($risulta = mysqli_fetch_array($sql2))
                      if($risulta['total']>=1){
                         $mensahe = "users-feedback.php";

                       }
                         
                 ?>
                  <a href="<?php echo $mensahe ?>">
                  <i class="fa fa-bullhorn" aria-hidden="true"></i>
                  <h5> Feedback Us</h5>
                    
                  
                </a>
              </li>

            </ul>
          </nav>

          <label class="fa fa-bars" onclick="menutoggle()" style="margin-left:11%; top: 16%;background-color: transparent;color:white;border:none;"></label>
        </div>
      </div>
    </section>
  </header>
  <script>
    var menuitem = document.getElementById("menuitem");
    menuitem.style.maxHeight = "0px";

    function menutoggle() {
      if (menuitem.style.maxHeight == '0px') {
        menuitem.style.maxHeight = "30vh"
      } else {
        menuitem.style.maxHeight = "0px"
      }
    }

    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 50);
    })
  </script><div style="margin:50px;"></div>
  
  <section class="home">
  
  </section>



  


  <section class="table">
    <div class="container">
       <!-- Page Content -->
       <a href="users.php" style="float:right;font-size:17px;color:#1545CB;">Back</a>
        <div class="row">
            <?php 
              error_reporting(0);
$id=$_GET['id'];
$sql1 = "SELECT * FROM `patient_history` WHERE `patient_no`='$id'";
 $result1 = $conn->query($sql1);  
        if($result1->num_rows > 0){
          while($row = $result1 -> fetch_assoc()){
            $pat_id=$row['patient_id'];
            $type=$row['type'];
            $name=$row['patient_name'];
            $bday=$row['patient_bday'];
            $contact=$row['patient_contact'];
            $email=$row['patient_email'];
            $address=$row['patient_address'];
            $medhx=$row['patient_medhx'];
            $bp=$row['patient_bp'];

            $D_OD_SPH=$row['D_OD_SPH'];
            $D_OD_CYL=$row['D_OD_CYL'];
            $D_OD_AXIS=$row['D_OD_AXIS'];
            $D_OD_VA=$row['D_OD_VA'];
            $D_OD_ADD=$row['D_OD_ADD'];

            $D_OS_SPH=$row['D_OS_SPH'];
            $D_OS_CYL=$row['D_OS_CYL'];
            $D_OS_AXIS=$row['D_OS_AXIS'];
            $D_OS_VA=$row['D_OS_VA'];
            $D_OS_ADD=$row['D_OS_ADD'];

            $I_SPH=$row['I_SPH'];
            $I_CYL=$row['I_CYL'];
            $I_AXIS=$row['I_AXIS'];
            $I_PD=$row['I_PD'];
            $I_ADD=$row['I_ADD'];

            $dc=$row['doctor'];

            
          }}
            ?>
            <h3 style="text-transform: uppercase;"><?php echo $name;?></h3>
            <br>
              <div class="row">
            <div class="col-25">
              <label for="firstname">Doctor</label>
            </div>
            <div class="col-75">
              <select style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;">
                <option ><?php echo $dc;?></option>
              </select>
            </div>
            </div>

            <div class="row">
            <div class="col-75">
              <input type="text" name="pat_id" value="<?php echo $id1; ?>" hidden>
              <input type="text" id="firstname" name="firstname" placeholder="Enter first name.." value="<?php echo $name;?>" hidden>
            </div>
            </div>

            <div class="row">
            <div class="col-25">
              <label for="bday">Birthdate</label>
            </div>
            <div class="col-75">
              <input type="date" id="bday" name="bday" value="<?php echo $bday;?>" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly>
            </div>
            </div>

            <div class="row">
            <div class="col-25">
              <label for="contact">Contact No.</label>
            </div>
            <div class="col-75">
              <input type="tel" id="contact" name="contact"  placeholder="Enter contact no.." value="<?php echo $contact;?>" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;" readonly>
            </div>
            </div>

            <div class="row">
            <div class="col-25">
              <label for="email">Email</label>
            </div>
            <div class="col-75">
              <input type="email" id="email" name="email" placeholder="Enter email.." value="<?php echo $email;?>" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly>
            </div>
            </div>

            <div class="row">
            <div class="col-25">
              <label for="address">Address</label>
            </div>
            <div class="col-75">
              <input type="text" id="address" name="address" placeholder="Enter address.." value="<?php echo $address;?>" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;" readonly>
            </div>
            </div>

            <div class="row">
            <div class="col-25">
              <label for="address">Medical Hx</label>
            </div>
            <div class="col-75">
              <textarea name="medhx" placeholder="Enter medical history" id="pat" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly><?php echo $medhx;?> </textarea>
            </div>
            </div>

            <div class="row">
            <div class="col-25">
              <label for="address">B.P.</label>
            </div>
            <div class="col-75">
              <input type="text" name="bp" placeholder="Enter blood pressure.." id="bp" value="<?php echo $bp;?>" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;" readonly>
            </div>
            </div>

            <div class="row">
            <div class="col-25">
            </div>
            <style type="text/css">
              #divdis{
                display: none;
              }
              #divcl{
                display: none;
              }
              #divread{
                display: none;
              }
            </style>
            <div class="col-75">
              <input type="radio" name="med" value="Distance" id="chkdis"  <?php 
                if ($type=="Distance") {
                  echo "checked";
                }
                ?> readonly> DISTANCE
                
               <?php 
                if ($type=="Distance") {
                  echo "<style type='text/css'>
                  #divdis{
                    display: block;
                      }
                  #divcl{
                    display: none;
                      }
                  #divread{
                    display: none;
                      }
              
                  </style>";

                }
              ?>

              <input type="radio" name="med" value="Contact Lens" id="chkcl"  <?php 
                if ($type=="Contact Lens") {
                  echo "checked";
                }
                ?> readonly> CONTACT LENS
                <?php 
                if ($type=="Contact Lens") {
                  echo "<style type='text/css'>
                  #divcl{
                    display: block;
                      }
                  #divread{
                    display: none;
                      }
                  #divdis{
                    display: none;
                      }
              
                  </style>";
                }
              ?>
              <input type="radio" name="med" value="Reading" id="chkread" 
              <?php 
                if ($type=="Reading") {
                  echo "checked";
                }
                ?> readonly> READING
                <?php 
                if ($type=="Reading") {
                  echo "<style type='text/css'>
                  #divcl{
                    display: none;
                      }
                  #divread{
                    display: block;
                      }
                  #divdis{
                    display: none;
                      }
              
                  </style>";
                }
              ?>
            </div>
            </div>
            <!--script-->
            <script type="text/javascript">
                function myFunction2() {
               // Get the checkbox
               var checkBox = document.getElementById("chkdis");
               // Get the output text
                var text = document.getElementById("divdis");
                var text1 = document.getElementById("divcl");
                var text2 = document.getElementById("divread");

               // If the checkbox is checked, display the output text
               if (checkBox.checked == true){
                document.getElementById('d1').value = '';
                document.getElementById('d2').value = '';
                document.getElementById('d3').value = '';
                document.getElementById('d4').value = '';
                document.getElementById('d5').value = '';
                document.getElementById('d6').value = '';
                document.getElementById('d7').value = '';
                document.getElementById('d8').value = '';
                document.getElementById('d9').value = '';
                document.getElementById('d10').value = '';

                document.getElementById('cl1').value = '';
                document.getElementById('cl2').value = '';
                document.getElementById('cl3').value = '';
                document.getElementById('cl4').value = '';
                document.getElementById('cl5').value = '';
                document.getElementById('cl6').value = '';
                document.getElementById('cl7').value = '';
                document.getElementById('cl8').value = '';
                document.getElementById('cl9').value = '';
                document.getElementById('cl10').value = '';

                document.getElementById('r1').value = '';
                document.getElementById('r2').value = '';
                document.getElementById('r3').value = '';
                document.getElementById('r4').value = '';
                document.getElementById('r5').value = '';
                document.getElementById('r6').value = '';
                document.getElementById('r7').value = '';
                document.getElementById('r8').value = '';
                document.getElementById('r9').value = '';
                document.getElementById('r10').value = '';

                  text.style.display = "block";
                  text1.style.display = "none";
                  text2.style.display = "none";
                } 
                else{
                  text.style.display = "none";
                }
              }
              function myFunction3() {
               // Get the checkbox
               var checkBox = document.getElementById("chkcl");
               // Get the output text
                var text = document.getElementById("divcl");
                var text1 = document.getElementById("divdis");
                var text2 = document.getElementById("divread");

               // If the checkbox is checked, display the output text
               if (checkBox.checked == true){
                document.getElementById('d1').value = '';
                document.getElementById('d2').value = '';
                document.getElementById('d3').value = '';
                document.getElementById('d4').value = '';
                document.getElementById('d5').value = '';
                document.getElementById('d6').value = '';
                document.getElementById('d7').value = '';
                document.getElementById('d8').value = '';
                document.getElementById('d9').value = '';
                document.getElementById('d10').value = '';

                document.getElementById('cl1').value = '';
                document.getElementById('cl2').value = '';
                document.getElementById('cl3').value = '';
                document.getElementById('cl4').value = '';
                document.getElementById('cl5').value = '';
                document.getElementById('cl6').value = '';
                document.getElementById('cl7').value = '';
                document.getElementById('cl8').value = '';
                document.getElementById('cl9').value = '';
                document.getElementById('cl10').value = '';

                document.getElementById('r1').value = '';
                document.getElementById('r2').value = '';
                document.getElementById('r3').value = '';
                document.getElementById('r4').value = '';
                document.getElementById('r5').value = '';
                document.getElementById('r6').value = '';
                document.getElementById('r7').value = '';
                document.getElementById('r8').value = '';
                document.getElementById('r9').value = '';
                document.getElementById('r10').value = '';
                  text.style.display = "block";
                  text1.style.display = "none";
                  text2.style.display = "none";
                } 
                else{
                  text.style.display = "none";
                }
              }
              function myFunction4() {
               // Get the checkbox
               var checkBox = document.getElementById("chkread");
               // Get the output text
                var text = document.getElementById("divread");
                var text1 = document.getElementById("divcl");
                var text2 = document.getElementById("divdis");
               // If the checkbox is checked, display the output text
               if (checkBox.checked == true){
                document.getElementById('d1').value = '';
                document.getElementById('d2').value = '';
                document.getElementById('d3').value = '';
                document.getElementById('d4').value = '';
                document.getElementById('d5').value = '';
                document.getElementById('d6').value = '';
                document.getElementById('d7').value = '';
                document.getElementById('d8').value = '';
                document.getElementById('d9').value = '';
                document.getElementById('d10').value = '';

                document.getElementById('cl1').value = '';
                document.getElementById('cl2').value = '';
                document.getElementById('cl3').value = '';
                document.getElementById('cl4').value = '';
                document.getElementById('cl5').value = '';
                document.getElementById('cl6').value = '';
                document.getElementById('cl7').value = '';
                document.getElementById('cl8').value = '';
                document.getElementById('cl9').value = '';
                document.getElementById('cl10').value = '';

                document.getElementById('r1').value = '';
                document.getElementById('r2').value = '';
                document.getElementById('r3').value = '';
                document.getElementById('r4').value = '';
                document.getElementById('r5').value = '';
                document.getElementById('r6').value = '';
                document.getElementById('r7').value = '';
                document.getElementById('r8').value = '';
                document.getElementById('r9').value = '';
                document.getElementById('r10').value = '';
                  text.style.display = "block";
                  text1.style.display = "none";
                  text2.style.display = "none";
                } 
                else{
                  text.style.display = "none";
                }
              }
              </script>
            <!--end of script-->
            <!--table for distance-->
            <div id="divdis">
            <div class="row">
            <div class="col-25">
              <label for="address">NEW RX</label>
            </div>
            <div class="col-75">
              <table>
                <thead>
                <tr>
                  <th colspan="3">&nbsp</th>
                  <th>SPH</th>
                          <th>CYL</th>
                          <th>AXIS</th>
                          <th>VA</th>
                          <th>ADD</th>
                </tr>
                <tr>
                  <th rowspan="2"></th>
                  <td rowspan="2">DISTANCE RX</td>
                  <td>OD</td>
                  <td><input type="text" name="new_D_OD_SPH" placeholder="Sphere" id="d1" value="<?php echo $D_OD_SPH;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                          <td><input type="text" name="new_D_OD_CYL" placeholder="Cylinder" id="d2" value="<?php echo $D_OD_CYL;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                        <td><input type="text" name="new_D_OD_AXIS" placeholder="Axis" id="d3" value="<?php echo $D_OD_AXIS;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                          <td><input type="text" name="new_D_OD_VA" placeholder="VA" id="d4" value="<?php echo $D_OD_VA;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                          <td><input type="text"name="new_D_OD_ADD" placeholder="ADD" id="d5" value="<?php echo $D_OD_ADD;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;" readonly></td>
                </tr>
                <tr>
                  <td>OS</td>
                  <td><input type="text" name="new_D_OS_SPH" placeholder="Sphere" id="d6" value="<?php echo $D_OS_SPH;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>

                         <td><input type="text" name="new_D_OS_CYL" placeholder="Cylinder" id="d7" value="<?php echo $D_OS_CYL;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>

                         <td><input type="text" name="new_D_OS_AXIS" placeholder="Axis" id="d8" value="<?php echo $D_OS_AXIS;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>

                         <td><input type="text" name="new_D_OS_VA" placeholder="VA" id="d9" value="<?php echo $D_OS_VA;?>"style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;" readonly></td>

                         <td><input type="text" name="new_D_OS_ADD" placeholder="ADD" id="d10" value="<?php echo $D_OS_ADD;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                </tr>
              </thead>
              </table>
            </div>
            </div>
            </div>
            <!--table for contact lens-->
            <div id="divcl">
            <div class="row">
            <div class="col-25">
              <label for="address">NEW RX</label>
            </div>
            <div class="col-75">
              <table>
                <thead>
                <tr>
                  <th colspan="3">&nbsp</th>
                  <th>SPH</th>
                          <th>CYL</th>
                          <th>AXIS</th>
                          <th>VA</th>
                          <th>ADD</th>
                </tr>
                <tr>
                  <th rowspan="2"></th>
                  <td rowspan="2">CONTACT LENS RX</td>
                  <td>OD</td>
                  <td><input type="text" name="new_CL_OD_SPH" placeholder="Sphere" id="cl1" value="<?php echo $D_OD_SPH;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;" readonly></td>
                          <td><input type="text" name="new_CL_OD_CYL" placeholder="Cylinder" id="cl2" value="<?php echo $D_OD_CYL;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                          <td><input type="text" name="new_CL_OD_AXIS" placeholder="Axis" id="cl3" value="<?php echo $D_OD_AXIS;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                        <td><input type="text" name="new_CL_MONO"placeholder="MONO" id="cl4" value="<?php echo $D_OD_VA;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                        <td><input type="text" name="new_CL_MONO_OD" placeholder="ADD" id="cl5" value="<?php echo $D_OD_ADD;?>" style="font-size: 15px;border: 2px solid #ccc; width: 100%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                </tr>
                <tr>
                  <td>OS</td>
                  <td><input type="text"  name="new_CL_OS_SPH" placeholder="Sphere" id="cl6" value="<?php echo $D_OS_SPH;?>" readonly></td>
                          <td><input type="text"  name="new_CL_OS_CYL" placeholder="Cylinder" id="cl7" value="<?php echo $D_OS_CYL;?>" readonly></td>
                          <td><input type="text"  name="new_CL_OS_AXIS" placeholder="Axis" id="cl8" value="<?php echo $D_OS_AXIS;?>" readonly></td>
                          <td><input type="text" name="new_CL_PD" placeholder="PD" id="cl9" value="<?php echo $D_OS_VA;?>" readonly></td>
                        <td><input type="text" name="new_CL_PD_OS"  placeholder="ADD" id="cl10" value="<?php echo $D_OS_ADD;?>" readonly></td>
                </tr>
              </thead>
              </table>
            </div>
            </div>
            </div>
            <!--table for reading-->
            <div id="divread">
            <div class="row">
            <div class="col-25">
              <label for="address">NEW RX</label>
            </div>
            <div class="col-75">
              <table>
                <thead>
                <tr>
                  <th colspan="3">&nbsp</th>
                  <th>SPH</th>
                          <th>CYL</th>
                          <th>AXIS</th>
                          <th>VA</th>
                          <th>ADD</th>
                </tr>
                <tr>
                  <th rowspan="2"></th>
                  <td rowspan="2">READING RX</td>
                  <td>OD</td>
                  <td><input type="text" name="new_R_OD_SPH" placeholder="Sphere" id="r1" value="<?php echo $D_OD_SPH;?>" readonly></td>
                        <td><input type="text" name="new_R_OD_CYL" placeholder="Cylinder" id="r2" value="<?php echo $D_OD_CYL;?>" readonly></td>
                          <td><input type="text" name="new_R_OD_AXIS" placeholder="Axis" id="r3" value="<?php echo $D_OD_AXIS;?>" readonly></td>
                          <td><input type="text" name="new_R_SEGHT" placeholder="SEG HT" id="r4" value="<?php echo $D_OD_VA;?>" readonly></td>
                          <td><input type="text" name="new_R_SEGHT_OD" placeholder="ADD" id="r5" value="<?php echo $D_OD_ADD;?>" readonly></td>
                </tr>
                <tr>
                  <td>OS</td>
                  <td><input type="text" name="new_R_OS_SPH" placeholder="Sphere" id="r6" value="<?php echo $D_OS_SPH;?>" readonly></td>
                          <td><input type="text" name="new_R_OS_CYL" placeholder="Cylinder" id="r7" value="<?php echo $D_OS_CYL;?>" readonly></td>
                          <td><input type="text" name="new_R_OS_AXIS" placeholder="Axis" id="r8" value="<?php echo $D_OS_AXIS;?>" readonly></td>
                        <td><input type="text" name="new_R_VERHT" placeholder="VER HT" id="r9" value="<?php echo $D_OS_VA;?>" readonly></td>
                          <td><input type="text" name="new_R_VERHT_OS" placeholder="ADD" id="r10" value="<?php echo $D_OS_ADD;?>" readonly></td>
                </tr>
              </thead>
              </table>
            </div>
            </div>
            </div>
            <!--table for isihara-->
            <div id="ishi">
            <div class="row">
            <div class="col-25">
              <label for="address">Ishihara</label>
            </div>
            <div class="col-75">
              <table>
                <thead>
                <tr>
                  <th>SPH</th>
                          <th>CYL</th>
                          <th>AXIS</th>
                          <th>VA</th>
                          <th>ADD</th>
                </tr>
                <tr>
                  <td ><input type="text" name="ishihara_SPH" placeholder="Sphere" value="<?php echo $I_SPH;?>" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                  <td ><input type="text" name="ishihara_CYL" placeholder="Cylinder" value="<?php echo $I_CYL;?>" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                        <td ><input type="text" name="ishihara_AXIS" placeholder="Axis" value="<?php echo $I_AXIS;?>" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;"></td>
                        <td><input type="text" name="ishihara_PD" placeholder="P.D." value="<?php echo $I_PD;?>"style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;" readonly></td>
                        <td><input type="text" name="ishihara_PD_ADD" placeholder="ADD" value="<?php echo $I_ADD;?>" style="font-size: 15px;border: 2px solid #ccc; width: 55%; padding: 8px; margin: 10px auto; border-radius: 5px;"readonly></td>
                </tr>
              </thead>
              </table>
            </div>
            </div>
            </div>

        </div>
        <!-- /.row -->  
    </div>
  </section>

  <?php



include("conn.php");




if (isset($_REQUEST['update'])) {
    //something was posted
    $id = $_REQUEST['bam'];
    $firstname = $_REQUEST['client_fname'];
    $lastname = $_REQUEST['client_lname'];
    $middlename = $_REQUEST['client_mname'];
  
    $bday = $_REQUEST['client_bday'];
    $email = $_REQUEST['client_email'];
    $contact = $_REQUEST['client_contact'];
    $address = $_REQUEST['client_address'];


$currentDate = date("d-m-Y");

$age1 = date_diff(date_create($bday), date_create($currentDate));

$age2 = $age1->format("%y");

    
      $sql = mysqli_query($conn,"UPDATE client_user_info SET 
        `client_fname`='$firstname ' , 
        `client_lname`='$lastname ' , 
        `client_mname`='$middlename' , 
        `client_bday`='$bday ',  
        `client_age`='$age2',
        `client_contact`='$contact', 
        `client_email`='$email',
        `client_address`='$address'
        WHERE `client_id` = '$id'");
        
      if($sql){
        echo "<script>alert('You have successfully updated the record.');</script>";
        echo "<script>document.location='users-profile.php';</script>";
        
      }
      else{
        echo "<script>alert('something went wrong!!!')</script>";
      }

  
    }

?>

  <footer>
    <div class="container flex1">
      <span>2022 © RNL Vision Care.</span>
     
    </div>
  </footer>
  <!-- chart js-->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="script.js" charset="utf-8"></script>
  <!-- chart js-->
</body>

<style>
 @media only screen and (max-width:768px) {
    #icnlogo {
    display: none;
  }
  }
  
</style>
</html>