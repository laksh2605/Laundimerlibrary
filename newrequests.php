<html>
<head>
    <title>Request New Book</title>
    <link rel="stylesheet" href="header.css">
        <style>
            .signupform{
                text-align:center;
                font-size:18px;
                margin-top: 40;
            }
        </style>
</head>
<body>
<?php require 'navbar.php'; ?>
        <div>
            <div class="signupform">
    <h1>Request New Book</h1>
<form action='newrequestsql.php' method="POST">
    <table>
    <tr><td>Title:</td><td><input type="text" name="title"></td></tr>
    <tr><td>Author:</td><td><input type="text" name="author"></td></tr>
    <tr><td>ISBN:</td><td><input type="number" name="ISBN"></td></tr>
    <tr><td>Email Address:</td><td><input type="text" name="User_Email"></td></tr>
    <tr><td>Description:</td><td><input type="text" name="Notes"></td></tr>
    <tr><td></td><td><input type="submit" value="Request New Books"></td></tr>
    </table>    
</form>
</body>
</html>