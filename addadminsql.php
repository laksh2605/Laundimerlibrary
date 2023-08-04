<?php
header('Location: Addadmins.php');
try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
    
	$stmt = $conn->prepare("INSERT INTO TblUsers
    (Surname,Forename,Username,Password,Email_address,UserRole)VALUES
    (NULL,:surname,:forename,:username,:password,;emailaddress,:userrole)");

    //this takes the unique inputs from the Addbooks.php page and then binds them to the general parameters above
    $stmt->bindParam(':surname', $_POST["surname"]);
    $stmt->bindParam(':forename', $_POST["forename"]);
	$stmt->bindParam(':username', $_POST["username"]);
    $stmt->bindParam(':password', $_POST["password"]);
    $stmt->bindParam(':emailaddress', $_POST["emailaddress"]);
    $stmt->bindParam(':userrole', $_POST["userrole"]);
	$stmt->execute();

}
catch(PDOException $e)

{
$conn=null;
}

?>

