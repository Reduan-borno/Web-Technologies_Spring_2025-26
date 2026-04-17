<?php 
session_start();
$username = $_SESSION["loggedInUser"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"];

if(!$isLoggedIn){
    Header("Location: login.php");
    exit();
}

?>


<html>
    <body>
         <?php echo "Hello Mr. $username , welcome to dashboard.";?>
         <a href="../Controller/logout.php" >Logout</a>
    </body>
</html>