<?php
session_start();
?>
<html>
    <html lang="en">
    <head>
        <title> Login Form</title>
        <link href="Login-css.css" rel="stylesheet">
        <body>
            <div class="loginbox">
                <img src="Images/User Icon.png" class="avatar">
                <h1>Login Here</h1>
                <form action="Includes/login-inc.php" method="POST">
                    <p>Username</p>
                    <input type="text" name="Username" placeholder="Enter Username/Email">
                    <p>Password</p>
                    <input type="password" name="pwd" placeholder="Enter Password">
                    <button type = "submit" name="submit">Log In</button>
                    <a href="#">Forgot Password?</a><br>
                    <a href="Sign_up.php"> Create Account</a>
                </form>
                <?php 
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p> Fill in all Fields!</p>";
            }
            elseif ($_GET["error"] == "wronglogin") {
                echo "<p> Incorrect Login Attempt!</p>";
            }   
        }
        ?>
            </div>
        </body>
    </head>
</html>