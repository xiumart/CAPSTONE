<?php
include "../db_conn.php";
if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['users_username']);
    $password = mysqli_real_escape_string($conn,$_POST['users_password']);
    $roles = "Doctor";
    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where users_username='".$uname."' and users_password='".$password."' and users_roles='".$roles."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
        
            if($roles == 'Doctor'){
            header('Location: ../doctor/dashboard/dashboard.php');
            }
            else if ($roles == 'Administrator'){
                header('Location: ../admin/dashboard/dashboard.php');
            }
        }else{
            echo "Invalid username and password";
        }

    }


?>

