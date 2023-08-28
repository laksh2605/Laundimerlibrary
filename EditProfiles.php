<html>
<head>
    <title>Edit Details</title>
</head>
<body>
<h1>Edit Details</h1>

<?php

$details= "SELECT * FROM tblusers WHERE UserID='".$_SESSION['userid']."'";
    echo "<table";
    $stmt=$conn->prepare($details);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $forename = $row["Forename"];
            $surname = $row["Surname"];
            $username = $row["Username"];
            $password = $row["Password"];
            $emailaddress = $row["Email_Address"];
        }
        echo "</table>";
?>
<form action = 'EditProfiles.php' method="POST">
            Forename: <input type="text" name="forename"/></br>
            Surname: <input type="text" name="surname"/></br>
            Username: <input type="text" name="username"/></br>
            Password: <input type="password" name="password"/></br>
            Email Address: <input type="text" name="Email_Address"/></br>
            UserRole: <input type="text"  name="UserRole"/></br>
            <input type="submit" value = "Change Details"><br>              
    </form>
    </body>
    </html>
