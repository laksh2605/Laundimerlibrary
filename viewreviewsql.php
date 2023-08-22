<?php

include_once ("connection.php");

    $sql="SELECT * FROM tblreviews INNER JOIN tblbooks ON
    tblbooks.ISBN=tblreviews.ISBN Where UserID='".$_POST['UserID']."'";

    $result = $conn->query($sql);
    if($result){
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
        <table>
        <tr>
        <th><td>ISBN</td><td><?php echo $row["ISBN"]?></td></th>
        <th><td>User Id</td><td><?php echo $row["UserID"]?></td></th>
        <th><td>Rating</td><td><?php echo $row["Rating"]?></td></th>
        <th><td>Reviews</td><td><?php echo $row["Reviews"]?></td></th>
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

    