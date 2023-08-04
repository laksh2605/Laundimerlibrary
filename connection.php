<?php
//this gives all the appropriate information a set variable
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Laundimerlibrary";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully <br>"; 
    }
    //again this outputs if the database connection failed and shows why
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage()."<br>";
    }
?>