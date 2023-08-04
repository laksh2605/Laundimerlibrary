<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
<head>
<body>
    <h1>Add Books to Catalogue</h1>
<form action= 'addbookssql.php' method = "POST">
    Title: <input type = "text" name = "title"><br>
    Author: <input type = "text" name = "author"><br>
    Genre: <input type = "text" name = "genre"><br>
    Page Length: <input type = "text" name = "length"><br>
    Publish Date: <input type = "date" name = "publishdate"><br>
    ISBN: <input type = "number" name = "ISBN"><br>
    <!--Image: <input type = "image" name = "image"><br>-->
    Description: <input type = "text" name = "description"><br>
    Rating: <input type = "text" name = "rating"><br>
    In_library: <input type = "text" name = "inlibrary"><br>

    <input type= "submit" value = "Add New Book"><br>
    </table>
</form>
</body>
</html>