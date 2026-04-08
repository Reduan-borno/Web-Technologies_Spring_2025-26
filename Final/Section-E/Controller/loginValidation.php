<?php 
session_start();

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";
$hasUsernameError = true;
$hasPasswordError = true;
echo "<h1>Hello Mr, $username</h1>";
echo "<h3>We know your password...$password, right?</h3>";

if(!$username){
    $_SESSION["usernameErr"] = "Username is required";
    $hasUsernameError = true;
}else{
    unset($_SESSION["usernameErr"]);
    $hasUsernameError = false;
}

if(!$password){
    $_SESSION["passwordErr"] = "Password is required";
    $hasPasswordError = true;
}else{
   unset($_SESSION["passwordErr"]); 
   $hasPasswordError = false;
}

if($hasUsernameError || $hasPasswordError){
    Header("Location: ../View/login.php");
}else{
    echo "<h2>Congratulation, found no validation error. You are move to next step for credential check.</h2>";
}

?>