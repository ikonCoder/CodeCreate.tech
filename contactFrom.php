<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo = "codecreatetech@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recived an email from ".$name.".\n\n".$message; 


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}




Remember to error handing befroe this is complete 