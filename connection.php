<?php


include_once('connection.php');

echo "Connected Sucessfully";

$sql = "INSERT INTO tblbooks
(Surname,Forename,Username,Password,Email_Address,UserRole)VALUES
('".$_POST["surname"]."','".$_POST["forename"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["userRole"]."')";

if($conn->query($sql) == TRUE){
    echo "Successful insertion";
}



?>

