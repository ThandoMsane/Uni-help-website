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
    <title>Home</title>
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
        <header>
            <nav class="desktop-nav">
                <a href="#"><img src="images/icons8-book-50.png" alt=""></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times"onclick="closeNav()"></i>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="login.php">Sign-In</a></li>
                        <li><a href="careerpath.html">Careers</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="openNav()"></i>
            </nav>
            
            <div class="grid-container">
                <div class="txt-box">
                    <h1>Applying To University Should'nt Be Difficult</h1>
                    <p>The easiest way to secure your future</p>
                    <button class = "lrn-btn" onclick="displayForm()">Sign Up</button>
                </div>
        
                <div class="img-box">
                    <img src="images/open-book.png" alt="">
                </div>
            </div>

            <!--Header for mobile devices-->
            <div class="mobile-header">
                <div class="txt-box">
                    <h1>Applying To University Should'nt Be Difficult</h1>
                    <p>The easiest way to secure your future</p>
                    <button class = "lrn-btn" onclick="displayForm()">Sign Up</button>
                </div>
            </div>
        </header>

            <form action="config.php" class="signup-container" id="popup-form" method= "post">
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

                <h1>Sign Up</h1>
            
                <input type="text" placeholder="First Name" name="name" >
                <input type="text" placeholder="Last Name" name="lname" >
                <input type="email" placeholder="E-mail address" name="email">
                <input type="password" placeholder="Password" name="password" >
                <input type="password" placeholder="Confirm password" name="confirmed-pwd">

                <button class="signup-btn" type="submit" name= "signup-submit">Sign Up</button>
                <button class="signup-btn" type="button" onclick="closeForm()">Cancel</button>

            </form>
        
    <section class="home-2">
        <div class="grid-container-2">
            <div class="img-box-2">
                <img src="images/online-app.jpg" alt="">
            </div>
            <div class="txt-box-2">
                <h2>We make applying easy for you</h2>
                <p>College applications can be overwhelming and stressful. UniHelp is an easily accessible platform to help ease the stress and pressure of applications. With a simple login one can download prospectus for their chosen higher institution (All Universities in South Africa and TVET colleges) in one stop</p>

                <button class="lrn-btn">Learn more</button>
            </div>
        </div>
    </section>

    <section class="home-3">
        <div class="row">
            <div class="col-item">
                <h3>Find a career path</h3>
                <p>A career path is a group of jobs that use similar skills. Each career cluster contains several career paths.
                    We will help discover the options available to you so you can go on to do greeat things.
                </p>

                <a href="careerpath.html" class="btn-links"><button class="lrn-btn">Learn More</button></a>
            </div>
            
                <div class="col-item">
                    <h3>Institutions</h3>
                    <p>South Africa's 26 public universities are all members of Universities South Africa. 
                        They are distributed across all nine provinces of South Africa. We'll help apply to any of them.
                    </p>

                    <a href="Uni Prospectus/prospectus.html" class="btn-links"><button class="lrn-btn">Learn More</button></a>
                </div>

                <div class="col-item">
                    <h3>Prospectus</h3>
                    <p>Contains information about the institution and the available courses, 
                        including advice on how to apply and the benefits of accepting a place.
                    </p>

                    <a href="Uni Prospectus/prospectus.html" class="btn-links"><button class="lrn-btn">Learn More</button></a>
                </div> 
        </div>
    </section>

    <section class="contact">

            <form action="contact config.php" class="contact-container"  method = "POST">
            <h1>Contact Us</h1>
                <input type="text" placeholder="First Name" name="name" required>
                <input type="text" placeholder="Last Name" name="lname" required>
                <input type="email" placeholder="E-mail address" name="email" required>
                <input type="text" placeholder="Subject" name="subject" required>
                <textarea type="text" class=" input-field-textarea-field" placeholder="Your Message" name="message" required></textarea>

                <button type="submit" class="lrn-btn" name="contact-submit">Send Message</button>
            </form>
            
    </section>

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