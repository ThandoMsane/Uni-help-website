<?php

if(isset($_POST['login-submit']))
{

    require "dbh.inc.php";

    $mail = $POST['email'];
    $password = $POST['password'];

    if(empty($mail) || empty($password)){
        header("Location: index.php?error = missing fields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: index.php?sql error");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $mail);
            mysqli_stmt_execute($stmt);
            $checkResults = mysqli_stmt_get_result($stmt);
        }
        if($rows = mysqli_fetch_assoc($checkResults)){
            $passwordMatch = password_verify($password, $rows["password"]);
            if($passwordMatch == false){
                header("Location: index.php?error = incorrect password");
                exit();
            } 
            else if($passwordMatch == true){
                //Remember To Insert Start Session Code on All Headers of The Website
                //Creation of session variables
                session_start();
                $_SESSION["userID"] = $rows["id"];
                $_SESSION["userName"] = $rows["name"];
                $_SESSION["userLastName"] = $rows["lastname"];
                $_SESSION["userMail"] = $rows["email"];
                
                header("Location: login.php");
                exit();
            }
        }
        else{
            header("Location: index.php?email not found");
            exit();
        }
    }

}
else{
    header("Location: index.php");
    exit();
}

    
?>