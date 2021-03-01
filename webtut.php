<?php
session_start();
?>
<html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIOPOS</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7c914f3b0a.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
    <a class="navbar-brand" href="webtut.php"><img src ="Images/blob.jpg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" date-target= "navbarResponsive">
    <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id= navbarResponsive>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">What is HIOPOS?</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Pricing.php">Pricing</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Sign_up.php">Registration</a>
            </li>
            </li><li class="nav-item">
            <a class="nav-link" href="Contact.php">Contact</a>
            </li>
            <?php
            if (isset($_SESSION["useruid"])) {
               echo "<li class='nav-item'><a class='nav-link' href = 'Account.php'> My Account</a></li>";
               echo "<li class='nav-item'><a class='nav-link' href = 'Includes/logout-inc.php'>Log Out</a></li>";
            }
            else{
                echo "<li class='nav-item'><a class='nav-link' href = 'Login.php'>Log In</a></li>";
            }
            ?>
            <!-- 
            <li><li class="nav-item">
            <a class="nav-link" href="Login.php">Log In</a>
            </li>  -->
        </ul>
    </div>
</div>
</nav>
<!-- Image Slider -->
<div id = "slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1" ></li>
        <li data-target="#slides" data-slide-to="2" ></li>
        </ul>
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="Images/DiGsmzd.jpg">
        <div class="carousel-caption">
            <h1 class="display-2">Bootstrap</h1>
            <h3>Complete Website Layout</h3>
            <button type="button" class="btn btn-outline-light btn-lg"> VIEW DEMO</button>
            <button type="button" class="btn btn-primary btn-lg">GET STARTED</button>
        </div>
    </div>
    <div class="carousel-item">
        <img src="Images/096a35453660aa9b83ba4ab6d9182d61.jpg">
    </div>
    <div class="carousel-item">
        <img src="Images/536497-new-hawaii-sunset-wallpaper-1920x1080-1.jpg">
    </div>
    </div>
    </div>
<!--Jumbotron-->
<div class="container-fluid">
<div class="row jumbotron">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
    <p class="lead"> A web hosting service allows individuals and organizations to make their website accessible via the WOrld Wide Web.
        </p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a href="#"><button type="button" class="btn btn-outline-secondary brn-lg"> Web Hosting</button></a>
    </div>
    </div>
    </div>
<!--WELCOME SECTION-->
<div class="container-fluid padding">
<div class="row welcome text-center">
    <div class="col-12">
        <h1 class="display-4"> HIOPOS Features.</h1>
    </div>
    <hr>
    <div class="col-12">
        <p class="lead">Main functionalities</p>

    </div>
    </div>
    </div>
<!-- Six Column Section -->
<div class="container-fluid padding">
<div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-desktop" style ='font-size:48px; color:red'></i>
        <h3>User Friendly POS</h3>
        <p> High intuitive sofware and innovative tactile usability makes HIOPOS the ideal choice for your business</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-home" style ='font-size:48px'></i>
        <h3>Multi-Company and MultiTerminal</h3>
        <p> Scalable with all the functionalities according to yout needs.It allows working with several point of sales</p>
    </div>
    <div class="col-sm-12 col-md-4">
        <i class='fas fa-sync-alt' style ='font-size:48px; color:red'></i>
        <h3>Free Updates</h3>
        <p> Latest Software updates without additional charges.</p>
    </div>
</div>
<div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-cloud-upload-alt"  style ='font-size:48px; color:red'></i>
        <h3>Safely Stored</h3>
        <p> Information always available in the cloud with the maximum security.</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-globe-africa"  style ='font-size:48px'></i>
        <h3>Multi-Language</h3>
        <p> Set up your points of sale by area and language with just one click.</p>
    </div>
    <div class="col-sm-12 col-md-4">
        <i class="fas fa-unlock"  style ='font-size:48px; color:red'></i>
        <h3>With or without internet</h3>
        <p> You may continue working in case of internet disconnections.</p>
    </div>
</div>

<hr class="my-4">
</div>
<!-- Two Column Section -->
<div class="container-fluid padding">
<div class="row padding">
    <div class="col-md-12 col-lg-6">
        <h2>If you build it...</h2>
        <p>The Columns will automatically stack on top of each other when the screen is less that 576px wide</p>
        <p>Resize the browser to see the effect. Responsive web desgin is more important now because of the increase in mobile traffic</p>
        <p>It can also display the web page differently depending on the screen size or viewing device</p>
        <a href="#" class="btn btn-primary"> Learn More</a>
    </div>
    <div class="col-lg-6">
        <img src="images/1_pUi3vkj06Vqp_sXeiI-UbQ.jpeg" class="img-fluid">
    </div>
</div>
</div>

<hr class="my-4">
<!-- Fixed Background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed"></div>
    </div>
</figure>
<!-- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji"> Click for Fun!
</button>
<div id="emoji" class="collapse">
<div class="container-fluid padding">
<div class="row text-center">
    <div class="col-sm-6 col-md-3">
        <img class="gif" src="Images/animoji-panda.gif">
    </div>
    <div class="col-sm-6 col-md-3">
        <img class="gif" src="Images/animoji-poop.gif">
    </div>
    <div class="col-sm-6 col-md-3">
        <img class="gif" src="Images//iphonex_animoji_fox.gif">
    </div>
    <div class="col-sm-6 col-md-3">
        <img class="gif" src="Images/animoji-alien.gif">
    </div>
</div>
</div>
</div>
<!-- Meet the Team -->
<div class="container-fluid padding">
<div class="row welcome text-center">
    <div class="col-12"> 
        <h1 class="display-4"> Meet the Team</h1>
    </div>
    <hr>
</div>
</div>
<!-- Cards -->
<div class="container-fluid padding">
<div class="row padding">
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="Images/Card1.jpg">
            <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text"> John is an Internet entrepreneur with almost 20 years of experience</p>
                <a href="#" class="btn btn-outline-secondary">See Profile</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="Images/Card3.jpg">
            <div class="card-body">
                <h4 class="card-title">Mary Jo</h4>
                <p class="card-text"> Mary is a designer with almost 10 years of digital desgin experience</p>
                <a href="#" class="btn btn-outline-secondary">See Profile</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="Images/Card2.jpg">
            <div class="card-body">
                <h4 class="card-title">Phil Ho</h4>
                <p class="card-text"> Phil is a developer with over 5 years of web developmet experience</p>
                <a href="#" class="btn btn-outline-secondary">See Profile</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2>Our Philosophy</h2>
            <p>We know that greatness in a disruptive era requires bold ambition, 
                curious talent and a culture that belives we're smarter together</p>
            <p>We approach every challenge holistically, with best-in-class 
                expertise in data, creativity, media, technology, search, 
                social and more. We call this Alchemy. It has the power 
                to build our clients brands and transform their business.
                And while it may seem like magic, we've got it down to a 
                science.</p>
        </div>
        <div class="col-lg-6">
            <img src="images/bootstrap-social-logo.png" class="img-fluid">
        </div>
    </div>
    <hr class="my-4">
    </div>
<!-- Connect -->

<div class="container-fluid padding">
<div class="row text-center padding">
    <div class="col-12">
        <h2>Connect</h2>
    </div>
    <div class="col-12 social padding">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>

    </div>
</div>    
</div>

<!-- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
    <div class="col-md-4">
        <img src="images/logo_white-1.png">
        <hr class="light">
        <p>555-555-555</p>
        <p>email@ymail.com</p>
        <p>100 street name</p>
        <p>City, State, 00000</p>
    </div>
    <div class="col-md-4">
        <hr class="light">
        <h5>Our Hours</h5>
        <hr class="light">
        <p>Monday - Friday: 9am - 5pm</p>
        <p>Saturday: 10am - 4pm</p>
        <p>Sunday: Closed</p>
    </div>
    <div class="col-md-4">
        <hr class="light">
        <h5>Service Area</h5>
        <hr class="light">
        <p>City, State, 00000</p>
        <p>City, State, 00000</p>
        <p>City, State, 00000</p>
        <p>City, State, 00000</p>
    </div>
    <div class="col-12">
        <hr class="light 100">
        <h5>&copy; HIOPOS.com</h5>
    </div>
</div>
</div>
</footer>
    </body>
    </html>
</html>