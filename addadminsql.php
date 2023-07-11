<?php
header('Location: Addadmins.php');
try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
    
	$stmt = $conn->prepare("INSERT INTO TblUsers
    (UserID,Forename,Surname,Username,Password,Email_address,Phone_Number,DOB,UserRole)VALUES
    (NULL,:forename,:surname,:username,:password,;emailaddress,:phonenumber,:dob,:userrole)");

    //this takes the unique inputs from the Addbooks.php page and then binds them to the general parameters above
	$stmt->bindParam(':forename', $_POST["forename"]);
    $stmt->bindParam(':surname', $_POST["surname"]);
	$stmt->bindParam(':username', $_POST["username"]);
    $stmt->bindParam(':password', $_POST["password"]);
    $stmt->bindParam(':emailaddress', $_POST["emailaddress"]);
    $stmt->bindParam(':phonenumber', $_POST["phonenumber"]);
    $stmt->bindParam(':dob', $_POST["dateofbirth"]);
    $stmt->bindParam(':role', $_POST["role"]);
	$stmt->execute();

}
catch(PDOException $e)

{
$conn=null;
}
?>

