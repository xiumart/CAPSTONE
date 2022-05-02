<?php
    if(isset($_POST['submit'])){

        include '../includes/smsAPIControl.php';
        $reciever = $_POST['reciever'];
        $message = $_POST['message'];
        $smsAPICode = "TR-DANVE298152_XXTHC";
        $smsAPIPassword ="az}kc1b1!%";

        $send = new Trebor(); 
        $send->itexmo($reciever, $message,$smsAPICode,$smsAPIPassword);

        if($send == false){
            header("location: ../dashboard.php?error=itextmo: no responses from server");
        }
        elseif($send == true){
            header("location: ../dashboard.php?error+none");
        }
        else{
            header("location: ../dashboard.php?something wrong just happen");
        }
    }

?>