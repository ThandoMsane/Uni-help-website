<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Uni-help.js" defer></script>
    <link rel="stylesheet" href="Uni-Help Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Password recovery</title>
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

    <h1 class = "secondary-h1">Password Recovery</h1>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "usernotfound"){
                    echo "<div class = 'errors'><p>User not found.</p></div>";
                }
            }
        ?>

        <?php
            if(isset($_GET["success"])){
                if($_GET["success"] == "sent"){
                    echo "<div class = 'success'><p>Check your emails for a OTP that you can use to reset your password.</p><div>";
                }
            }
        ?>
    <form class = "contact-container" action="pwdrecovery_config.php" method = "POST">
        <label for="email">Enter your email address</label>
        <input type="email" name="email" placeholder = "username@gmail.com">
        <button class= "lrn-btn" type = "submit" name="submit">Request</button>
    </form>
</body>
</html>

