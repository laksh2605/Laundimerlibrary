<?php

//create DB here..
   $servername = 'localhost';
   $username = 'root';
   $password= '';
   $dbname = "laundimerlibrary"

   $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn-> connect-error){
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected Sucessfully";

$sql = "INSERT INTO tblusers (surname,forename,username,password,email,userRole)
VALUES ('".$_POST["surname"]."','".$_POST["forename"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["userRole"]."')";


if($conn->query($sql) == TRUE){
    echo "Successful insertion";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


