<?php
   include('../conn.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select users_id, users_username from users_account where users_username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $_SESSION['users_id'] = $row['users_id'];
   $login_session = $row['users_username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>