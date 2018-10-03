<?php
require 'authentication.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login System</title>
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="contener">
        <div class="form"> 
        <form action="" method="POST" class="b">
                <h1 class="mylog">Log in my funny jokes</h1>
                <p>
                <label for="">Email</label>
                <input type="text" name = "user_email" placeholder = "Username/e-mail" id="block1">
                </p>
                <p> 
                <label for="">Password</label>
                <input type="password" name = " user_pass" placeholder = "password" id="block">
                </p>
                <p>
                <button class="submit" name="submit" id="log">login</button>
                </p>
        </form>
    </div>
</div>
</body>
</html>