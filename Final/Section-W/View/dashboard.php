<?php 
session_start();
$username = $_SESSION["loggedInUser"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"];

$image_path = $_SESSION["image_path"] ??"";

if(!$isLoggedIn){
    Header("Location: login.php");
    exit();
}

$hasCookie = isset($_COOKIE["food"]);

$favFood = $_COOKIE["food"] ??"";

?>


<html>
    <body>
         <?php echo "Hello Mr. $username , welcome to dashboard.";?>
         <a href="../Controller/logout.php" >Logout</a>
         <img src="<?php echo $image_path;?>" height="200px" width="200px"/>

         <!-- For taking input as a new customer -->
        <?php 
        if(!$hasCookie){
           echo '<form action="../Controller/setFavoriteFood.php" method="post" style="margin-top:5%;">
                    <label>Enter favorite food: </label>
                    <input type="text" name="favoriteFood" placeholder="Enter Favorite food"/>
                    <input type="submit" name="submit"/>
                </form>';
        }else{
    echo "<div>
            <p>We know your favorite food, <strong>$favFood</strong>. Want to order again?</p>
            <p>Click <a href='../Controller/deleteCookieHandler.php'>Here </a> to delete cookie </p>
          </div>";
        }
        
        ?>

               
      

         <!-- For known customer -->
         
    </body>
</html>