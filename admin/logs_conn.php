<?php 
//CREATE ANOTHER TABLE
//TABLE NAME: logs
//COLUMN: log_id, user, activiy, datentime

include "../conn.php";

function users_logs($user, $activity, $datentime,$role){
$conn = $GLOBALS['conn'];

// prepare and bind
$stmt = $conn->prepare("INSERT INTO users_logs (logs_username, logs_activity, logs_datentime, logs_roles) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $d1, $d2, $d3, $d4);

// set parameters and execute
$d1 = $user;
$d2 = $activity;
$d3 = $datentime;
$d4 = $role;

if ($stmt->execute()) {
//SHOW IF ALREADY ADDED
}
}
?>