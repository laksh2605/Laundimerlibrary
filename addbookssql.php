<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "laundimerlibrary";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

include_once ("connection.php");

$sql = "INSERT INTO tblbooks
(ISBN,Title,Author,Genre,Description,Length,Rating,In_Library)VALUES
('".$_POST["ISBN"]."','".$_POST["Title"]."','".$_POST["Author"]."','".$_POST["Genre"]."','".$_POST["Description"]."','".$_POST["Length"]."','".$_POST["Rating"]."','".$_POST["In_Library"]."')";

if($conn->query($sql) == TRUE){
    echo "Successful insertion";
}

?>
