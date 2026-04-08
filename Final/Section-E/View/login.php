<?php 
session_start();
$usernameError = $_SESSION["usernameErr"] ?? "";
$passwordError = $_SESSION["passwordErr"] ?? "";

unset($_SESSION["usernameErr"]);
unset($_SESSION["passwordErr"]);

?>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form method="post" action="../Controller/loginValidation.php">

    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Enter username"/> </td>
            <td><?php echo "$usernameError";?></td>
        </tr>

         <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Enter password"/> </td>
            <td><p style='color:red;'><?php echo "$passwordError";?></p></td>
        </tr>
         <tr>
            <td></td>
            <td><input type="submit" name="submit" /> </td>
        </tr>
</table>
    </form>
</body>
</html>