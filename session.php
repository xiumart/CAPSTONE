<?php
   
   include('conn.php');
   session_start();
 
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select client_id, client_username from client_user where client_username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $_SESSION['client_id'] = $row['client_id'];
   $login_session = $row['client_username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
   
?>