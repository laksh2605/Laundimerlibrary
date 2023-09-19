<?php 

include_once ("connection.php");
array_map("htmlspecialchars", $_POST);

$stmt ="SELECT TblLoans.Date_Borrowed as db, TblLoans.Date_Returned as dr, TblBooks.Title as title, TblBooks.Image, TblUsers.Surname, TblUsers.Forename, TblUsers.Username 
FROM TblLoans 
INNER JOIN TblBooks ON TblLoans.ISBN = TblBooks.ISBN
INNER JOIN TblUsers ON TblUsers.UserID = TblLoans.UserID WHERE TblLoans.UserID = ".$_POST['searchfor'];

$result = $conn->query($stmt);
    if($result){
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print_r($row['title']);
    }
} else {
echo "0 results";
}}else{
    echo "Error in ".$stmt."<br>".$db->error;
  }
$conn->close();





   