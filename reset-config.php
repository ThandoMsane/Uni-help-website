<?php

require_once "dbh.inc.php";

$emptyMail = "";
$emptyPassword = "";
$passwordMatch = "";

if(isset($_POST["reset-submit"])){

    if(empty($_POST["reset-email"])){
        header("Location: forgot_password.php?error=nomail");
    } else{
        $resetEmail = $_POST["reset-email"];
    }

    if(empty($_POST["reset-password"])){
        header("Location: forgot_password.php?error=enterpassword");
    } else{
        $resetPassword = $_POST["reset-password"];
        $confirmPassword = $_POST["confirmed-pwd"];
    }

    if($resetPassword != $confirmPassword){
        header("Location: forgot_password.php?error=passwordsdonotmatch");
    } else{
        
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$resetEmail."'");
        if(mysqli_num_rows($sql)) {
            $passwordHash = password_hash($resetPassword, PASSWORD_DEFAULT);

            $sql_update = "UPDATE users SET password = '".$passwordHash."' WHERE email = '".$resetEmail."'";
            $result = mysqli_query($conn, $sql_update);

            if(!$result) {
                die("Could not execute query");
            } else{
                echo "Success";
            }
        } else{
            exit("User not found");
        }

    }

} else{
    header("Location: index.php");
}