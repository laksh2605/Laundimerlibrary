<?php 
array_map ("htmlspecialchars", $_POST);
include_once ('connection.php');
$search = "";
if (!empty ($_POST)) {
    if ($_POST ["userid"] != "") {
        $search = $search." UserID='".$_POST["userid"]."'";
    }
if ($_POST ["surname"] != "") {
    if ($search == "") {
        $search = $search." Surname LIKE '%".$_POST["surname"]. "%'";
    }

else {
    $search = $search." AND Surname LIKE '%".$_POST["surname"]. "%'";
}
}

if ($_POST ["username"] != "") {
    if ($search == "") {
        $search = $search." Username='". $_POST["username"]."'";
}
else {
    $search = $search." AND Username='". $_POST ["username"]."'";
}
}

else {
    $sql= "SELECT * FROM TblUsers WHERE". $search. " ORDER BY UserID ASC";
}
    echo "‹table>";
    $stmt = $conn->prepare ($sql);
    $stmt->execute () ;
    while ($row = $stmt->fetch (PDO:: FETCH_ASSOC))
    {
    echo "<tr><td>".$row["UserID"]."‹/td><td>".$row["Username"]."</td> 
    <td>".$row ["Forename"]."</td><td>". $row ["Surname"]."</td></tr>";
}
    echo "</table>";
}
?>
    