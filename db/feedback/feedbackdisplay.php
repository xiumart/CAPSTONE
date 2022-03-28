<?php
include "conn.php";


//query for feedback display
$query = mysqli_query($conn,"SELECT * FROM `feedback` WHERE feed_rate = '5' OR feed_rate ='4' AND feedbackdate <= now() ORDER BY feedbackdate DESC LIMIT 3");
?>