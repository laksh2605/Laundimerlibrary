<?php
session_start();
if(isset($_SESSION['loggedinuser']))
{
    unset($_SESSION['loggedinuser']);
}
header("Location: index.php");
?>

