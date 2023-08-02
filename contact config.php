<?php

if (isset($_POST["contact-submit"])){
    $name = $_POST["name"];
    $lastname = $_POST["lname"];
    $mailName = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $recipientMail = "universityhelp979@gmail.com";
    $mailheaders = "From: ".$recipientMail;
    $txtMessage = "You've recieved an e-mail from ".$name.".\n\n".$message;

    mail($recipientMail, $subject, $txtMessage, $mailheaders);
    header("Location: index.php?message sent.");
} else{
    header("Location: index.php?message could not be sent.");
}