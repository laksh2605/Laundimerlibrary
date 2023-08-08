<?php


include_once('connection.php');

echo "Connected Sucessfully";

$sql = "INSERT INTO tblusers
(Surname,Forename,Username,Password,Email_Address,UserRole)VALUES
('".$_POST["surname"]."','".$_POST["forename"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["emailaddress"]."','".$_POST["userrole"]."')";

if($conn->query($sql) == TRUE){
    echo "Successful insertion";
}



?>

