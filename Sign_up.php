<?php
session_start();
?>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
         <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
        <link href="Signup-css.css" type= "text/css"rel="stylesheet">
        <body>
       <div class=regform> <h1>Registration</h1><div>
            <div class="main">
                <form action="Includes/signup-inc.php" method="POST">
                <div id="name">
                    <h2 class="name"> Trade Name</h2>
                    <input class="tradename" type="text" name="name" placeholder="Enter Trade Name">
                    <h2 class ="name"> Email</h2>
                    <input class ="emailinput" type="text" name="email" placeholder="Enter Email">
                    <h2 class="name">Username</h2>
                    <input class="username"type="text" name="Username" placeholder="Enter Username">
                    <h2 class="name">Password</h2>
                    <input class="password"type="password" name="pwd" placeholder="Enter Password">
                    <h2 class="name">Re-Enter Password</h2>
                    <input class="password"type="password" name="pwdrepeat" placeholder="Re-Enter Password">

                    <h2 class = "name"> Address </h2>
                    <input type = "text" class = "address" name="address">

                    <h2 class = "name"> Phone Number </h2>
                    <input type = "text" class = "code" name="area_code">
                    <label class="area-code"> Area Code </label>
                    <input class="number" type="text" name="phone">
                    <label class="phone-number"> Phone Number</label>
                    
                    <h2 class = "name"> Phone Number 2 </h2>
                    <input type = "text" class = "code" name="area_code">
                    <label class="area-code"> Area Code </label>
                    <input class="number" type="text" name="phone">
                    <label class="phone-number"> Phone Number</label>
                    
                    <h2 class = "name"> City </h2>
                    <input type = "text" class = "city" name="city">
                    
                    <h2 class = "name"> State</h2>
                    <input type = "text" class = "state" name="state">
                    
                    <h2 class = "name"> Business Type </h2>
                    <select class= "option" name="business_type">
                    <option disabled="disabled" selected="selected">--Choose Option</option>
                    <option>Resturants</option>
                    <option>Fast Food</option>
                    <option>Bar/Cafe</option>
                    <option>Pizza&Pasta</option>
                    <option>Bakery</option>
                    <option>Retail Shop</option>
                    <option>Hair Dresser and Beauty Centers</option>
                    <option>Ice-Cream, Waffle and Crepe Shops</option>
</select>
                    <h2 class = "name"> Website </h2>
                    <input type = "text" class = "website" name="website">
                    <button type="submit" name="submit">Sign Up</button>
</div>
                </form>
                <?php 
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p> Fill in all Fields!</p>";
            }
            elseif ($_GET["error"] == "invalidusername") {
                echo "<p> Choose better Username!</p>";
            }
            elseif ($_GET["error"] == "invalidemail") {
                echo "<p> Invalid Email!</p>";
            }
            elseif ($_GET["error"] == "passwordsdontmatch") {
                echo "<p> Passwords doesnt match!</p>";
            }
            elseif ($_GET["error"] == "stmtfailed") {
                echo "<p> Something went wrong!</p>";
            }
            elseif ($_GET["error"] == "usernametaken") {
                echo "<p> Username already taken!</p>";
            }
            elseif ($_GET["error"] == "none") {
                echo "<p> You have signed up!</p>";
            }   
        }
        ?>
            </div>
        </body>
    </head>
</html>