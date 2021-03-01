<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["Username"];
    $password = $_POST["pwd"];
    $repeatpwd = $_POST["pwdrepeat"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    if (emptyInputSignup($name, $email, $username, $password, $repeatpwd) !== false) {
        header("location: ../sign_up.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($username) !== false) {
        header("location: ../sign_up.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../sign_up.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($password,$repeatpwd) !== false) {
        header("location: ../sign_up.php?error=passwordsdontmatch");
        exit();
    }
    if (UserExists($conn, $username, $email) !== false) {
        header("location: ../sign_up.php?error=usernametaken");
        exit();
    }
    
    createUser($conn, $name, $email, $username,$password);
}
else{
    header("location: ../sign_up.php");
    exit();
}
