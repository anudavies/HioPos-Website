<?php

function emptyInputSignup($name, $email, $username, $password, $repeatpwd){
    $result;
    if (empty($name) || empty($email) || empty($username) ||empty($password) || empty($repeatpwd)) {
      $result = true;  
   } 
   else{
       $result = false;
   }
   return $result;
}

function invalidUsername($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      $result = true;  
   }
   else{
       $result = false;
   }
   return $result;
}


function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL )) {
      $result = true;  
   }
   else{
       $result = false;
   }
   return $result;
}


function pwdMatch($password, $repeatpwd){
    $result;
    if ($password !== $repeatpwd) {
      $result = true;  
   }
   else{
       $result = false;
   }
   return $result;
}

function UserExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE UsersId = ? OR UsersEmail = ?;"; 
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../sign_up.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;    
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username,$password){
    $sql = "INSERT INTO users(usersName, UsersEmail,Users_uname,Userspassword) VALUES (?,?,?,?);"; 
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../sign_up.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name,$email, $username, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../sign_up.php?error=none");
    exit();
}

function emptyInputLogin($username, $password){
    $result;
    if (empty($username) ||empty($password)) {
      $result = true;  
   }
   else{
       $result = false;
   }
   return $result;
}

function loginUser($conn, $username, $password){
    $userExists = UserExists($conn, $username, $username);

    if ($userExists === false) {
        header("location: ../Login.php?error=wronglogin");
        exit();
    }

    $pwdhashed = $userExists["Userspassword"];
    $checkpwd = password_verify($password, $pwdhashed);

    if ($checkpwd === false) {
        header("location: ../Login.php?error=wronglogin");
        exit();
    }
    elseif ($checkpwd === true) {
        session_start();
        $_SESSION["userid"] = $userExists["UsersId"];
        $_SESSION["useruid"] = $userExists["Users_uname"];
        header("location: ../webtut.php");
        exit();
    }
}
