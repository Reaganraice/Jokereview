<?php
require 'authentication.php';
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
<h1 class="mylog">Log in my funny jokes</h1>
<div class="contener">
    <div class="form"> 
    <form action="" method="POST" class="b">
        <input type="text" name = "user_email" placeholder = "Username/e-mail" class="block">
        <input type="password" name = " user_pass" placeholder = "password" class="block">
        <button class="submit" name="submit" id="log">login</button>
    </form>
    </div>
</div>
</body>
</html>