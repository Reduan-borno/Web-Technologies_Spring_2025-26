<?php 
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

echo "<h1>Hi, Mr $username</h1>";
echo "<h1>Hi, Mr ".$username."</h1>";
echo "<h2>Here is your password..$password</h2>";

$hasUsernameError = true;
$hasPasswordError = true;

if(!$username){
    $_SESSION["usernameError"] = "Username is required";
    $hasUsernameError = true;
}else{
    unset($_SESSION["usernameError"]);
    $hasUsernameError = false;
}

if(!$password){
    $_SESSION["passwordError"] = "Password is required";
    $hasPasswordError = true;
}else{
    unset($_SESSION["passwordError"]);
    $hasPasswordError = false;
}

if($hasUsernameError || $hasPasswordError){
    Header("Location: ../View/login.php");
}else{
    $mockUsername = "admin";
    $mockPassword = "password";

    if($username === $mockUsername && $password === $mockPassword){
        Header("Location: ../View/dashboard.php");
    }else{
        $_SESSION["credentialError"] = "Your username or password is incorrect!";
        Header("Location: ../View/login.php");
    }
}
?>