<?php

include_once ("connection.php");

    $join="SELECT disticnt tblbooks.ISBN, tblbooks.UserID, tblbooks.Rating, tblreviews.Reviews FROM tblreviews INNER JOIN tblbooks ON
    tblbooks.ISBN=tblreviews.ISBN Where UserID='".$_SESSION['userid']."'";

    $stmt=$conn->prepare($join);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
        <td><p><?php echo $row['ISBN']; ?></p></td> 
        <td><p><?php echo $row['UserID']; ?></p></td>
        <td><p><?php echo $row['Rating']; ?></p></td> 
        <td><p><?php echo $row['Reviews']; ?></p></td>
        </tr>
    <?php   } ?>

    