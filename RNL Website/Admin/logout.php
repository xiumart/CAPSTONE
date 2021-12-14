<?php 
session_start();
include "../db_conn.php";
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
logs($_SESSION['users_username'], "Logout", date("Y-m-d h:i:A"));
session_unset();
session_destroy();

header("Location: index.php");