<?php
//create DB here..
   $servername = 'localhost';
   $username = 'root';
   $password= '';
//note no Database mentioned here!!
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS Laundimerlibrary";
    $conn->exec($sql);
    //next 3 lines optional only needed really if you want to go on an do more SQL here!
    $sql = "USE Laundimerlibrary";
    $conn->exec($sql);
    echo "DB created successfully";
    include_once("connection.php");
    $stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
    CREATE TABLE TblUsers 
    (UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Surname VARCHAR(20) NOT NULL,
    Forename VARCHAR(20) NOT NULL,
    Username VARCHAR(20) NOT NULL,
    Password VARCHAR(200) NOT NULL,
    Email_Address VARCHAR(50) NOT NULL,
    UserRole TINYINT(1))");
    $stmt->execute();
    $stmt->closeCursor();
}
?>