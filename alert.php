<?php 
$client_fname = $_POST['client_fname']; 
$client_mname = $_POST['client_mname'];
$client_lname = $_POST['client_lname'];
$client_bday = $_POST['client_bday'];
$client_age = $_POST['client_age'];
$client_address = $_POST['client_address'];
$client_contact = $_POST['client_contact'];
$client_email = $_POST['client_email'];

if($client_fname == "" || $client_mname == "" || $client_lname == "" || $client_address == "" || $client_age == "")
{
Echo "  <div class='alert'>
<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
<center><strong>Update your profile!</strong> Click your username and go to edit profile.</center>
</div>"
}else{
Echo("Success!");
}
}
?>
