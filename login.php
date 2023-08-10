<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="header.css">
<title>Login</title>
</head>
<body>
<?php require 'navbar.php' ?>
    <form action="loginsql.php" method= "POST">
<br>
Username:<input type="text" name="username"><br>
Password:<input type="text" name="password"><br>
<input type="submit" value="Login">
</form>
</body>

