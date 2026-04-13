<?php 
session_start();
$username = $_SESSION["username"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;
if(!$isLoggedIn){
    Header("Location: login.php");
    exit();
}

?>

<html>
    <body>
        <h1>Greetings! Welcome to Dashboard <strong><?php echo $username;?></strong></h1>
        <a href="../Controller/logout.php">Logout</a>
    </body>
</html>