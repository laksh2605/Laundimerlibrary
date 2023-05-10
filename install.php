<?php
echo "1";
//create DB here..
   $servername = 'localhost';
   $username = 'root';
   $password= '';
//note no Database mentioned here!!

    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS Laundimerlibrary";
    $conn->exec($sql);
    //next 3 lines optional only needed really if you want to go on an do more SQL here!
    $sql = "USE Laundimerlibrary";
    $conn->exec($sql);
    echo "DB created successfully";
    //include_once("connection.php");


    $stmt1 = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
    CREATE TABLE TblUsers 
    (UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Surname VARCHAR(20) NOT NULL,
    Forename VARCHAR(20) NOT NULL,
    Username VARCHAR(20) NOT NULL,
    Password VARCHAR(200) NOT NULL,
    Email_Address VARCHAR(50) NOT NULL,
    UserRole TINYINT(1))");
    $stmt1->execute();
    $stmt1->closeCursor();
    
    $stmt2 = $conn->prepare("DROP TABLE IF EXISTS TblBooks;
    CREATE TABLE TblBooks
    (ISBN INT(13) UNSIGNED PRIMARY KEY,
    Title VARCHAR(50) NOT NULL,
    Author VARCHAR(50) NOT NULL,
    Genre VARCHAR(50) NOT NULL,
    Description VARCHAR(2000) NOT NULL,
    Length INT(5) NOT NULL,
    Publisher VARCHAR(50) NOT NULL, 
    Date_Published DATE NOT NULL,
    Rating FLOAT(3) NOT NULL DEFAULT 0, 
    In_Library VARCHAR(1) NOT NULL DEFAULT 'Y')");    
    $stmt2->execute();
    $stmt2->closeCursor();

    $stmt3 = $conn->prepare("DROP TABLE IF EXISTS TblImages;
    CREATE TABLE TblImages
    (ISBN BIGINT(13) UNSIGNED PRIMARY KEY, 
    Image LONGBLOB(4294967295)");
    $stmt3->execute();
    $stmt3->closeCursor();

    $stmt4 = $conn->prepare("DROP TABLE IF EXISTS TblLoans;
    CREATE TABLE TblLoans(UserID INT(6),
    ISBN BIGINT(13),
    Date_Borrowed DATE, 
    Date_Returned DATE,
    Review VARCHAR(2000) NOT NULL, 
    Rating FLOAT(3) NOT NULL, 
    Late_Fines FLOAT(4) NOT NULL, 
    PRIMARY KEY(ISBN,UserID)");
    $stmt4->execute();
    $stmt4->closeCursor();

    $stmt5 = $conn->prepare("DROP TABLE IF EXISTS TblReviews;
    ISBN BIGINT(13),
    UserID INT(6),
    Reviews VARCHAR(2000) NOT NULL)");
    $stmt5->execute();
    $stmt5->closeCursor();

    $stmt6 = $conn->prepare("DROP TABLE IF EXISTS TblRequests;
    CREATE TABLE TblRequests(ISBN BIGINT(13) PRIMARY KEY,
    Title VARCHAR(50) NOT NULL,
    Author VARCHAR(50) NOT NULL, Publisher VARCHAR(50),
    User_Email VARCHAR(50) NOT NULL,
    Notes VARCHAR(2000)");
    $stmt6->execute();
    $stmt6->closeCursor();  
    
    $stmt7 = $conn->prepare("DROP TABLE IF EXISTS TblOrders;
    CREATE TABLE TblOrders(UserID INT(6),
    ISBN INT(6) UNSIGNED,
    Title VARCHAR(50) NOT NULL, Date_Ordered DATE,
    PRIMARY KEY(ISBN,UserID)");
    $stmt7->execute();
    $stmt7->closeCursor();  

    $stmt8 = $conn->prepare("DROP TABLE IF EXISTS TblSearch;
    CREATE TABLE TblSearch(ISBN BIGINT(13) UNSIGNED PRIMARY KEY, Title VARCHAR(50) NOT NULL,
    Author VARCHAR(50) NOT NULL,
    Genre VARCHAR(50) NOT NULL");
    $stmt8->execute();
    $stmt8->closeCursor(); 

?>