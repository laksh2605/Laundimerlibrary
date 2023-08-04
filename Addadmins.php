<!DOCTYPE html>
<html>
<head>
    <title>Add New Admin</title>
</head>
<body>
    <h1>Add New Admin to System</h1>
    <form action='addadminsql.php' method = "POST">
        Surname: <input type = "text" name= "surname"><br>
        Forename: <input type = "text" name= "forename"><br>
        Username: <input type = "text" name= "username"><br>
        Password: <input type = "text" name= "password"><br>
        Email_Address: <input type = "text" name= "emailaddress"><br>
        UserRole: <input type = "text" name= "userrole"><br>
        
        <input type="submit" value="Add New Admin"><br>
</form>
</body>
</html>