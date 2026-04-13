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
        <h1>Hello, Mr <?php echo $username; ?></h1>
        <h3>Welcome to Dashboard</h3>
        <a href="../Controller/logout.php">Logout</a>
    </body>
</html>