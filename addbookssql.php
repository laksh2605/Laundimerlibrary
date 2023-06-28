<?php
header('Location:Addbooks.php');
try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);

    
	$stmt = $conn->prepare("INSERT INTO TblBooks 
    (ISBN,Title,Author,Genre,Description,Length,Image,Rating,In_Library)VALUES 
    (NULL,:title,:author,:genre,:description,;length,:image,:rating,:inlibrary)");
	$stmt->bindParam(':Title', $_POST["title"]);
	$stmt->bindParam(':Author', $_POST["author"]);
    $stmt->bindParam(':Description', $_POST["description"]);
    $stmt->bindParam(':Length', $_POST["length"]);
    $stmt->bindParam(':Image', $_POST["image"]);
    $stmt->bindParam(':Rating', $_POST["rating"]);
    $stmt->bindParam(':In_Library', $_POST["inlibrary"]);
	$stmt->execute();
	}
catch(PDOException $e)

{
echo "error".$e->getMessage();
}
$conn=null;
?>