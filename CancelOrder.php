<?php
    session_start();
    include_once('connection.php');
print_r($_POST);
$sql="DELETE FROM tblorders WHERE UserID='".$_POST["userid"]."' AND ISBN='".$_POST['isbn']."'";

echo $sql;
$stmt=$conn->prepare($sql);
$stmt->execute();
?>