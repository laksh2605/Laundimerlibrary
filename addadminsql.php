<?php

include_once ("connection.php");

$sql = "INSERT INTO tblusers (surname, forename, username, password, Email_Address, UserRole)
VALUES ('".$_POST["forename"]."', '".$_POST["surname"]."', '".$_POST["username"]."', '".$_POST["password"]."','".$_POST["Email_Address"]."','".$_POST["UserRole"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>

