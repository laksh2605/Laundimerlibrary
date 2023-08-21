<?php

include_once ("connection.php");

$sql = "INSERT INTO tblrequests
(ISBN,title,author,User_Email,Notes)VALUES
('".$_POST["ISBN"]."','".$_POST["title"]."','".$_POST["author"]."','".$_POST["User_Email"]."','".$_POST["Notes"]."')";

if($conn->query($sql) == TRUE){
    echo "Successful insertion";
}

?>

