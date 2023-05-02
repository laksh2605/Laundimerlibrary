<?php
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





