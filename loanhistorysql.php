<?php 
    include_once ('connection.php');
    array_map ("htmlspecialchars", $_POST);
    if(isset($_POST['searchfor'])){
        $join = "SELECT TblLoans.Date_Borrowed, TblLoans.Date_Returned, TblBooks.Title, TblBooks.Image, TblUsers.Surname, TblUsers.Forename, TblUsers.Username FROM ((TblLoans 
        INNER JOIN TblBooks ON TblLoans.ISBN = TblBooks.ISBN)
        INNER JOIN TblUsers ON TblUsers.UserID = TblLoans.UserID) WHERE TblLoans.UserID = '".$_POST["searchfor"]."' 
        OR TblUsers.Surname LIKE %'". $_POST["searchfor"]."'% OR TblUsers.Username = '".$_POST["searchfor"]."' ;

    $stmt= $conn->prepare ($join); 
    $stmt->execute ();
    echo "Hello";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        }?>
