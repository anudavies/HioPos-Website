<?php

$serverName ="localhost";
$DBUsername ="root";
$DBPassword ="";
$DBName ="HioposDB";

$conn = mysqli_connect($serverName, $DBUsername, $DBPassword, $DBName);

if (!$conn) {
    die("Connection failed: ".mysqlli_connect_error());
}

