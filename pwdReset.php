<?php

require_once "dbh.inc.php";

if(isset($_POST['reset-pwd'])){

    $email = $_POST["email"];
    $pwd1 = $_POST["new_pwd"];
    $pwd2 = $_POST["confirm_pwd"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $otp = $_POST["otp"];


        $sel_query = "SELECT * FROM `users` WHERE email='".$email."'";
        $results = mysqli_query($conn,$sel_query);
        $row = mysqli_num_rows($results);

        if ($row == 1){
            $sql = "SELECT email, otp FROM password_recovery WHERE email = '".$email."' AND otp = '".$otp."'";
            $sql_results = mysqli_query($conn,$sql);
            $results_row = mysqli_num_rows($sql_results);

            if ($results_row == 1){
                
                $curDate = date("Y-m-d H:i:s");
                $sql_row = mysqli_fetch_assoc($sql_results);
                $expDate = $row['expDate'];

                if($expDate >= $curDate){
                    header("Location: pwdReset.php?error=OTPexpired");
                } else{
                    if(!empty($pwd1) && !empty($pwd2)){
 
                        if($pwd1 === $pwd2){
       
                           $password = $pwd2;
                           $hashed_password = password_hash($password, PASSWORD_DEFAULT);
       
                           $sql_update = "UPDATE users SET password = '".$hashed_password."' WHERE email = '".$email."'";
                           
                           $results = mysqli_query($conn, $sql_update);
       
                           if(!$results) {
                               die("Could not execute query");
                           } else{
                               header("Location: login.php?success=pwdupdated");
                           }
       
                        } else{
                            header("Location: pwdReset.php?error=pwdnomatch");
                        }
                      }

                }

            } else{
                header("Location: pwdReset.php?error=nouser");

            }
        } else{
            header("Location: pwdReset.php?error=nouserwithotp");
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Uni-Help Style.css">
    <script src="Uni-help.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Password reset</title>
</head>

<style>
    .errors{
    width: 30vw;
    height: 30px;
    border-radius: 10px;
    background-color: lightcoral;
    text-align: center;
    padding: 10;
    margin: auto;
    margin-bottom: 10px;
    }

    .success{
    width: 30vw;
    height: 45px;
    border-radius: 10px;
    background-color: lightgreen;
    text-align: center;
    padding: 10;
    margin: auto;
    margin-bottom: 10px;
    }
    </style>
<body>
    <h1 class="secondary-h1">Password Reset</h1>
    <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "OTPexpired"){
                    echo "<div class = 'errors'><p>The OTP you entered is expired.</p></div>";
                } else if($_GET["error"] == "pwdnomatch"){
                    echo "<div class = 'errors'><p>Passwords do not match.</p></div>";
            } else if($_GET["error"] == "nouser"){
                echo "<div class = 'errors'><p>No user with your OTP.</p></div>";
            } else if($_GET["error"] == "nouserwithotp"){
                echo "<div class = 'errors'><p>User not found.</p></div>";
            }
        }
        ?>

        <?php
            if(isset($_GET["success"])){
                if($_GET["success"] == "pwdupdated"){
                    echo "<div class = 'success'><p>Your password has been updated successfully.</p><div>";
                }
            }
        ?>
    <form class = "contact-container" action="" method="post">
        <input type="email" name="email" placeholder = "Email Address">
        <input type="password" name="new_pwd" placeholder = "New password">
        <input type="password" name="confirm_pwd" placeholder = "Confirm password">
        <input type="number" name = "otp" placeholder = "4-digit code">

        <button class = "lrn-btn" type="submit" name="reset-pwd">Reset</button>
    </form>
</body>
</html>