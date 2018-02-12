
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Log in</title>
</head>
<body>
<?php

require_once("db.php");
session_start();

if(isset($_REQUEST["username"])){
    //remove backslashes
    $username = stripcslashes($_REQUEST["username"]);
    //escape special charater in a string
    $username = mysqli_real_escape_string($mysqli,$username);

    $password = stripcslashes($_REQUEST["password"]);
    $password = mysqli_real_escape_string($mysqli,$password);

    $query = "SELECT * FROM `users` WHERE `name` = '$username' and `password`=PASSWORD($password)";

    $result = mysqli_query($mysqli,$query) or die(mysql_error());

    $rows = mysqli_num_rows($result);

    if($rows == 1){
        $_SESSION["username"] = $username;
        header("Location:dashboard.php?page=Projects");
    }
    else{
        echo   "<div class='form'>
        <h3 style='color:#f00'>Password is incorrect</h3>
        <br/> <span style='color:#f00'>Click here to <a href='login.php'>Login</a></span>
        </div";

    }

}

else {


?>
    <div class="wrapper">
        <div class="container">
            <h1>Welcome</h1>
            
            <form name="loginform" class="form" action="" method="post">
                <input type="text" placeholder="Username" name="username" required />
                <input type="password" placeholder="Password" name="password" required />
                <input type="submit" id="login-button" value="Login" />
            </form>
        </div>
        
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
<?php } ?>
</body>
</html>