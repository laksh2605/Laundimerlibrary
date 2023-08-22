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
        <table>
        <tr>
        <th><td>Title: </td><td><?php echo $row["Title"]?></td></th>
        <th><td>Author: </td><td><?php echo $row["Author"]?></td></th>
    </tr>
    
</table>
<?php
    }
    } else {
    echo "0 results";
    }}else{
        echo "Error in ".$sql."<br>".$db->error;
      }

        ?>


    <!-- $stmt=$conn->prepare($join);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><p><?php echo $row['Title']; ?></p></td>
            <td><p><?php echo $row['Author']; ?></p></td>
            <td><form ation='CancelOrder.php' method="POST">
            <input type="hidden" name="isbn" value="<?php echo $row['ISBN']; ?>"><br>
            <td><input type="submit" value = "Cancel Order"></td><br>>
                </form></td>
       </tr>
    <?php ?> -->