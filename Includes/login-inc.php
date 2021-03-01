<?php

if (isset($_POST["submit"])) {
    $username = $_POST["Username"];
    $password = $_POST["pwd"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    if (emptyInputLogin($username, $password) !== false) {
        header("location: ../Login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);

}
else{
    header("location: ../Login.php");

}