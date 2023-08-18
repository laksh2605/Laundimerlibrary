<?php

include_once ("connection.php");

    $stmt=$conn->prepare("INSERT INTO tblloans
    (UserID,ISBN,Date_Borrowed,Date_Returned,Review,Rating,Late_Fines)VALUES(NULL,:isbn,:date_borrowed,:date_returned,:review,:rating,:late_fines)");

    $stmt-> bindParam(':isbn', $_POST["ISBN"]);
    $stmt-> bindParam(':date_borrowed', $_POST["date_borrowed"]);
    $stmt-> bindParam(':date_returned', $_POST["date_returned"]);
    $stmt-> bindParam(':rating', $_POST["rating"]);
    $stmt-> bindParam(':late_fines', $_POST["late_fines"]);
    $stmt->execute();
    

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
    
?>
