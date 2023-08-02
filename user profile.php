<?php
// Starts the session
session_start();

$user = $_SESSION["email"];
$noApp = "";
$uniChoice1 = "";
 $uniChoice2 = "";
  $uniChoice3 = "";
   $uniChoice4 = "";


include 'dbh.inc.php';



 
// Check if the user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;

} else{
    
    $sql = "SELECT * FROM users WHERE email = '$user';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $userName = $row["name"] . " " . $row["lastname"];
        }
    }

    $course_sql = "SELECT * FROM universitychoice WHERE email = '$user';";
    $course_result = mysqli_query($conn, $course_sql);
    $courseCheck = mysqli_num_rows($course_result);

    if($courseCheck > 0){
        while($rows = mysqli_fetch_assoc($course_result)){
            $uniChoice1 = $rows["university1"];
            $uniChoice2 = $rows["university2"];
            $uniChoice3 = $rows["university3"];
            $uniChoice4 = $rows["university4"];
        }
    } else{
          $noApp = "No applications";
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
    <title>Profile</title>
    <script src="Uni-help.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="script/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script/jquery-3.5.1.min.map"></script>
    <script type="text/javascript" src="script/jquery.min.js"></script>
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
                    <li><a href="logout config.php">Sign Out</a></li>
                    <li><a href="careerpath.html">Careers</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="openNav()"></i>
        </nav>
    </div>

    <h1 class="secondary-h1">Welcome! <span style="color: #F86D2D"><?php echo $userName;?></span></h1>


        <div class="global-top-message">
            <div class="global-msg-cont">
                <div class="gm-img">
                    <img src="images/warning.svg" alt="">
                </div>
                <div class="gm-text">
                </div>
            </div>
        </div>

                    <div class="blockade-title">
                        <h2>Profile Info</h2>
                    </div>
                    <div class="col-item">
                        <div class="table-fit">
                            <table>
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td class="left-tbl-des">User:</td>
                                        <td><?php echo $userName; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="left-tbl-des">Email:</td>
                                        <td><?php echo $user; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

        <div class="col-item">
            <h3>Applications</h3>
            <?php 
                echo "<p>".$uniChoice1."<br>".$uniChoice2."<br>".$uniChoice3."<br>".$uniChoice4."</p>";
                echo $noApp;
            ?>

            <a href="register/register.php" class="btn-links"><button class="lrn-btn">New Application</button></a>
        </div>

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