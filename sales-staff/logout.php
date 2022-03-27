<?php 
session_start();
include "../conn.php";
include "logs_conn.php";
date_default_timezone_set('Asia/Manila');
users_logs($_SESSION['users_username'], "Logout", date("Y-m-d h:i:sa"), $_SESSION['users_roles']);
session_unset();
session_destroy();

header("Location: ../admin/index.php");