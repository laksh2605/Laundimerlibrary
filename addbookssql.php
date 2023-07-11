<?php
//this connects to the database using connections.php and santizes any inputs in case of SQL injection

try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
    //this tells the program where to insert different parameters into the database table 'Tblbooks'
    
	$stmt = $conn->prepare("INSERT INTO TblBooks 
    (ISBN,Title,Author,Genre,Description,Length,Image,Rating,In_Library)VALUES
    (NULL,:title,:author,:genre,:description,;length,:image,:rating,:inlibrary)");

    //this takes the unique inputs from the Addbooks.php page and then binds them to the general parameters above
	$stmt->bindParam(':Title', $_POST["title"]);
    $stmt->bindParam(':ISBN', $_POST["ISBN"]);
	$stmt->bindParam(':Author', $_POST["author"]);
    $stmt->bindParam(':Description', $_POST["description"]);
    $stmt->bindParam(':Length', $_POST["length"]);
    $stmt->bindParam(':Image', $_POST["image"]);
    $stmt->bindParam(':Rating', $_POST["rating"]);
    $stmt->bindParam(':In_Library', $_POST["inlibrary"]);
	$stmt->execute();
    header('Location: Addbooks.php');
}
catch(PDOException $e)

{

//echo "error".$e->getMessage();

$conn=null;
echo "Some details haven't been entered correctly - please try again.";
header("Refresh: 5; url=Addbooks.php");
}
?>