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
    <title>Sign Up</title>
</head>
<body>

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

<div class="second-header">
        <nav class = "desktop-nav">
            <a href="index.php"><img src="images/icons8-book-50.png" alt=""></a>
            <div class="nav-links"id="navLinks">
                <i class="fa fa-times"onclick="closeNav()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="login.php">Sign-In</a></li>
                    <li><a href="careerpath.html">Careers</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="openNav()"></i>
        </nav>
    </div>
    
<form action="config.php" class="contact-container" method= "post">

<h1>Sign Up</h1>
<?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyfields"){
                echo "<div class = 'errors'><p>PLease fill in all the fields.</p></div>";
            } else if($_GET["error"] == "invalidemailname"){
                echo "<div class = 'errors'><p>Invalid name.</p></div>";
            } else if($_GET["error"] == "invalidemail"){
                echo "<div class = 'errors'><p>Invalid email or name.</p></div>";
            } else if($_GET["error"] == "invalidname"){
                echo "<div class = 'errors'><p>Ivalid email.</p></div>";
            } else if($_GET["error"] == "passwordcheck"){
                echo "<div class = 'errors'><p>Passwords do not match.</p></div>";
            } else if($_GET["error"] == "sqlerror"){
                echo "<div class = 'errors'><p>Something went wrong, try again later.</p></div>";
            } else if($_GET["error"] == "email already exists"){
                echo "<div class = 'errors'><p>User already exists.</p></div>";
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

<input type="text" placeholder="First Name" name="name" >
<input type="text" placeholder="Last Name" name="lname" >
<input type="email" placeholder="E-mail address" name="email">
<input type="password" placeholder="Password" name="password" >
<input type="password" placeholder="Confirm password" name="confirmed-pwd">

<button class="lrn-btn" type="submit" name= "signup-submit">Sign Up</button>
</form>
    
<footer>
        <div class="social-links">
            <ul>
                <li><a href="#"><img src="images/icons8-twitter-50.png"/></a></li>
                <li><a href="https://instagram.com/tertiaryapply?igshid=YmMyMTA2M2Y="><img src="images/icons8-instagram-50.png"/></a></li>
                    <li><a href="https://www.facebook.com/TertiaryApply-103713749000382/?modal=admin_todo_tour&notif_id=1651095618339677&notif_t=page_invite&ref=notif"><img src="images/icons8-facebook-48.png"/></a></li>
                <li><a href="#"><img src="images/icons8-linkedin-50.png"/></a></li>
            </ul>
        </div>
</footer>
</body>
</html>