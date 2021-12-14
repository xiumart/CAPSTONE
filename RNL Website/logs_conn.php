<?php 
//CREATE ANOTHER TABLE
//TABLE NAME: logs
//COLUMN: log_id, user, activiy, datentime

include "db_conn.php";

function logs($user, $activity, $datentime){
$conn = $GLOBALS['conn'];

// prepare and bind
$stmt = $conn->prepare("INSERT INTO logs (log_user, log_activity, log_datentime) VALUES (?,?,?)");
$stmt->bind_param("sss", $d1, $d2, $d3);

// set parameters and execute
$d1 = $user;
$d2 = $activity;
$d3 = $datentime;

if ($stmt->execute()) {
//SHOW IF ALREADY ADDED
}
}
?>