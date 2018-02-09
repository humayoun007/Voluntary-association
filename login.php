<?php

require_once("db.php");

?>
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
    <div class="wrapper">
        <div class="container">
            <h1>Welcome</h1>
            
            <form class="form">
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <button type="submit" id="login-button">Login</button>
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
</body>
</html>