<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laundimerlibrary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO tblusers (surname, forename, username, password, Email_Address, UserRole)
VALUES ('".$_POST["forename"]."', '".$_POST["surname"]."', '".$_POST["username"]."', '".$_POST["password"]."','".$_POST["Email_Address"]."','".$_POST["UserRole"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>

