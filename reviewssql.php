<?php

include_once ("connection.php");

$sql = "INSERT INTO tblreviews (ISBN, Reviews, Rating)
VALUES ('".$_POST["ISBN"]."', '".$_POST["Reviews"]."', '".$_POST["Rating"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>