<?php 
session_start();
include "db_conn.php";
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
logs($_SESSION['user_role'], "Logout", date("Y-m-d h:i:sa"));
session_unset();
session_destroy();

header("Location: index.php");