<?php 
// array_map ("htmlspecialchars", $_POST);
include_once ('connection.php');

if(isset($_POST['searchfor'])){

$join = "SELECT TblLoans.Date_Borrowed, TblLoans.Date_Returned, TblBooks.Title, TblBooks.Image, TblUsers.Surname, TblUsers.Forename, TblUsers.Username FROM ((TblLoans 
INNER JOIN TblBooks ON TblLoans.ISBN = TblBooks.ISBN)
INNER JOIN TblUsers ON TblUsers.UserID = TblLoans.UserID) WHERE TblLoans.UserID =: searchfor 
OR TblUsers.Surname LIKE :searchforwildcard OR TblUsers.Username =: searchfor";
$stmt= $conn->prepare ($join);
//this binds the parameter 'searchfor' with the data inputted $stmt-›bindParam(':searchfor',$_POST ["searchfor"]);
$like = "%". $_POST["searchfor"]."%";
$stmt->bindParam(':searchforwildcard', $like);
$stmt->execute ();
//this while loop keeps on outputting the data for each record that matches the search input while ($row = $stmt-›fetch(PDO: : FETCH_ASSOC)) {
?>