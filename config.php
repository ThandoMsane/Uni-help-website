<?php

if(isset($_POST['signup-submit'])){

    require "dbh.inc.php";
    //fetches the user input form
    $firstname = $_POST['name'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con_password = $_POST['confirmed-pwd'];

    //Checking user input errors

    if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($con_password)) {
        header("Location: index.php?error =emptyfields&firstname =".$firstname."&lastname =".$lastname."&email=".$email);
        exit();
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $firstname) ){
        header("Location: index.php?error =invalidemailname");
        exit();

    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: index.php?error =invalidemail&firstname =".$firstname."&lastname =".$lastname);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $firstname)){
        header("Location: index.php?error =invalidname&email =".$email);
        exit();
    }
    else if ($password !== $con_password){
        header("Location: index.php?error =passwordcheck&firstname =".$firstname."&lastname =".$lastname."&email=".$email);
        exit();
    }
    else{
        $sql = "SELECT email FROM users WHERE email = ?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: index.php?error = sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultsCheck = mysqli_stmt_num_rows($stmt);
            if($resultsCheck > 0){
                header("Location: index.php?error = email already exists&firstname =".$firstname."&lastname =".$lastname);
                exit();
            }
            else{
                $sql = "INSERT INTO users (name, lastname, email, password) VALUES(?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: index.php?error = sqlerror");
                    exit();
                }
                 else{
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
              

                    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashedPassword);
                    mysqli_stmt_execute($stmt);
                    header("Location: index.php?success=successfully signed up");
                    exit();
                }

            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);


}
else{
    header("Location: index.php");
    exit();
}