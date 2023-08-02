    <?php

    require_once "dbh.inc.php";

    if(isset($_POST["submit"]) && (!empty($_POST["email"]))){

        $email = trim($_POST["email"]);
        $user_err = "";
        //$email = filter_var($email, FILTER_SANITIZE_EMAIL);
        //$email = filter_var($email, FILTER_VALIDATE_EMAIL);

            $sel_query = "SELECT email FROM users WHERE email='".$email."'";
            $results = mysqli_query($conn,$sel_query);
            $row = mysqli_num_rows($results);

           if($row == 1){
            $expFormat = mktime(
                date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
                );
                $expDate = date("Y-m-d H:i:s",$expFormat);
                $otp = mt_rand(1000, 9999);

                $sql = "INSERT INTO `password_recovery` (`email`, `otp`, `expDate`)
                VALUES ('".$email."', '".$otp."', '".$expDate."');";

                $result = mysqli_query($conn, $sql);
                if(!$result) {
                    die("Could not execute query");
                    $error = "Something went wrong, try again later";
                } else{
                    $error = "";
                    $subject = "Password Recovery-Uni-Help";
                    $link = "localhost/Uni-Help Site/pwdReset.php";
                    $headers = "From: Uni-Help";
                    $message = "Please copy the following link to your browser: ".$link."\n Your OTP is: ".$otp." enter the OTP along with your email and reset your password. \n PLEASE NOTE: The OTP will expire after 24hours for security reasons.";

                    mail($email, $subject, $message, $headers);
                    header("Location: password_recovery.php?success=sent");
                }
            } else{
                header("Location: password_recovery.php?error=usernotfound");
            }      

    } else{
        header("Location: password_recovery.php");
    }