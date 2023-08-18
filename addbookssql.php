<?php

include_once ("connection.php");

$sql = "INSERT INTO tblbooks
(ISBN,Title,Author,Genre,Description,Length,Rating,In_Library)VALUES
('".$_POST["ISBN"]."','".$_POST["Title"]."','".$_POST["Author"]."','".$_POST["Genre"]."','".$_POST["Description"]."','".$_POST["Length"]."','".$_POST["Rating"]."','".$_POST["In_Library"]."')";

if($conn->query($sql) == TRUE){
    echo "Successful insertion";
}

?>

