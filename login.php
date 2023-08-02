<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: user profile.php");
    exit;
}
 
// Include config file
require_once "dbh.inc.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter email.";
    } else{
        $username = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $username;
                     
                            
                            // Redirect user to welcome page
                            header("location: user profile.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Uni-Help Style.css">
    <script src="Uni-help.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color:#033416;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        header{
            top: 0;
        }

        .login-container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform:  translate(-50%, -50%);
            width: 400px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0px 0px 10px 1px black;
        }

        .login-container h1{
            text-align: center;
            padding-bottom: 20px;

        }

        .input-field{
            position: relative;


        }

        .input-field input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            border-radius: 15px;
            font-size: 14px;
            border: grey 1px solid;
            margin-bottom: 5px;
            display: inline-block;
            outline: #F86D2D;

        }

        .login-btn{
            cursor: pointer;
            display: block;
            margin: auto;
            margin-top: 10px;
            margin-bottom: 15px;
            height: 45px;
            width: 90px;
            border-radius: 15px;
            font-weight: bold;
            background-color: #F86D2D;
            color: white;
            border: 1px solid transparent;
        }

        .login-btn:hover{
            width: 92px;
            height: 47px;
            box-shadow: 0px 0px 5px 0px black;
        }

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
</head>
<body>
    <div class="second-header">
        <nav class = "desktop-nav">
            <a href="index.php"><img src="images/icons8-book-50.png" alt=""></a>
            <div class="nav-links"id="navLinks">
                <i class="fa fa-times"onclick="closeNav()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="careerpath.html">Careers</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="openNav()"></i>
        </nav>
    </div>


    <div class="contact-container">
        <h1>Sign-In</h1>
        <form action="#" method="post">
            <?php if($username_err != ""){
                echo "<div class = 'errors'><p>".$username_err."<p></div>";
            } else if($password_err != ""){
                echo "<div class = 'errors'><p>".$password_err."<p></div>";
            } else if($login_err){
                echo "<div class = 'errors'><p>".$login_err."<p></div>";
            }?>
            <div class="input-field">
                <input type="email" placeholder="User name or e-mail" name="email">
            </div>
            <div class="input-field">
                <input type="password" placeholder="Password" name = "password">

            <button class ="login-btn" type="submit" name= "login-submit">Login</button>
            <div>Not a memeber? <a href="Sign-up.php">Sign Up</a></div>
            <div class="f-pass">
                 Forgot <a href="password_recovery.php">Password?</a>
           </div>
        </form>
    </div>
</body>
</html>