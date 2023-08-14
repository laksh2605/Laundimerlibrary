<?php 
    include_once ('connection.php');
    array_map ("htmlspecialchars", $_POST);
    if(isset($_POST['searchfor'])){
        $join = "SELECT TblLoans.Date_Borrowed, TblLoans.Date_Returned, TblBooks.Title, TblBooks.Image, TblUsers.Surname, TblUsers.Forename, TblUsers.Username FROM ((TblLoans 
        INNER JOIN TblBooks ON TblLoans.ISBN = TblBooks.ISBN)
        INNER JOIN TblUsers ON TblUsers.UserID = TblLoans.UserID) WHERE TblLoans.UserID =: searchfor 
        OR TblUsers.Surname LIKE :searchforwildcard OR TblUsers.Username =:searchfor";

    $stmt= $conn->prepare ($join);
    //this binds the parameter 'searchfor' with the data inputted 
    $stmt-›bindParam(':searchfor',$_POST ["searchfor"]);
    $like = "%". $_POST["searchfor"]."%";
    $stmt->bindParam(':searchforwildcard', $like);
    $stmt->execute ();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
        <td><img src= '<?php echo $row ["Image"]; ?> </p> </td>
        <td><p><?php echo $row ["Forename"]; ?> </p> </td>
        <td><p><?php echo $row ["Surname"]; ?> </p> </td>
        <td><p><?php echo $row ["Title"]; ?> </p> </td>
        <td><p><?php echo $row ["Date_Borrowed"]; ?> </p> </td>
        <td><p><?php echo $row ["Date_Returned"]; ?> </p> </td>
        </tr>
        <?php}}