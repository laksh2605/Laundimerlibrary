<?php
include_once("connection.php"); // Include your connection settings

$sql = "INSERT INTO tblloans (UserID, ISBN, Date_Borrowed, Date_Returned,) VALUES (?, ?, ?, ?,)";

$stmt = $conn->prepare($sql);

// Assuming $_POST["UserID"], $_POST["ISBN"], $_POST["Date_Borrowed"], $_POST["Date_Returned"] are the form input values.

$stmt->bind_param('sssssss', $_POST["UserID"], $_POST["ISBN"], $_POST["Date_Borrowed"], $_POST["Date_Returned"]);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>



