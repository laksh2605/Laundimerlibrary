<!DOCTYPE html>
<html>
    <head>
        <title>Laundimer Library</title>
        <link rel="stylesheet" href="header.css">
        <style>
            .signupform{
                text-align:center;
                font-size:18px;
                margin-top: 40;
            }
        </style>
<body>
<?php require 'navbar.php'; ?>
<h1>View Reviews</h1>
<table>
<form action="viewreviewsql.php" method="POST">
    <tr>
        <th>ISBN</th>
        <th>UserID</th>
        <th>Rating</th>
        <th>Reviews</th>
    </tr>
</table>
</body>
</html>