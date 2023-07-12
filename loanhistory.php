<head>
    <title>Loan History</title>
</head>
<body>
    <?php require 'navbar.php' ?>
    <h1>Loan History</h1>
    <!-- this is the search bar - admins input the desired characterstics to be searched for-->
<form action = 'loanhistory.php' method = "POST">
    User ID: <input type="text" name = "userid"><br>
    Surname: <input type="text" name = "surname"><br>
    Username: <input type="text" name = "username"><br>
    <input type ="submit" value = "Search"><br>
</form>
<!-- this conditional was introduced after the first time I reloaded the page and it printed out an error. -->
<?php
    if(isset($_POST['searchfor'])){
        ?>
        <table>
            <tr>
                <th>Image</th>
                <th>Forename</th>
                <th>Surname</th>
                <th>Title</th>
                <th>Date_Borrowed</th>
                <th>Date_Returned</th>
            </tr>  
    <?php }
        ?>

<?php 
array_map ("htmlspecialchars", $_POST);
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
//this rhile loop keeps on outputting the data for each record that matches the search input while ($row = $stmt-›fetch(PDO: : FETCH_ASSOC)) {
?>
<tr>
<td><img src= '<?php echo $row ["Image"]; ?> </p> </td>
<td><p><?php echo $row ["Forename"]; ?> </p> </td>
<td><p><?php echo $row ["Surname"]; ?> </p> </td>
<td><p><?php echo $row ["Title"]; ?> </p> </td>
<td><p><?php echo $row ["Date_Borrowed"]; ?> </p> </td>
<td><p><?php echo $row ["Date_Returned"]; ?> </p> </td>
</tr>
<?php } ?>
</table>
</body>
</html>