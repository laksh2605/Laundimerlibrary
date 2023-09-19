<?php

include_once ("connection.php");
    $sql="SELECT * FROM TblOrders 
    INNER JOIN TblBooks ON TblBooks.ISBN=TblOrders.ISBN WHERE TblBooks.Title='".$_POST['Title']."'";

$result = $conn->query($sql);
    if($result){
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "ISBN: " . $row["ISBN"]. " - UserID: " . $row["UserID"]. " " . $row["Rating"]. "<br>";?>
<form action = 'CancelOrder.php' method = "POST">
<table>
    <tr>
        <th><td>Title: </td><td><?php echo $row["Title"]?></td></th>
        <th><td>Author: </td><td><?php echo $row["Author"]?></td></th>
        <th><td></td></th>
        <th><td><input type = "submit" value = "Cancel Order"></td></th>
    </tr>
</table>
    </form>
<?php
    }
    } else {
    echo "0 results";
    }}else{
        echo "Error in ".$sql."<br>".$db->error;
      }

        ?>


   