<!DOCTYPE html>
<html>
<head>
<title> Login </title>
<link rel="stylesheet" href="header.css">
</head>
<body>
    <form action="loginsql.php" method= "POST">
<?php require 'navbar.php' ?>
<br>
Username:<input type="text" name="username"><br>
Password:<input type="text" name="password"><br>
<input type="submit" value="Login">
</form>
</body>

