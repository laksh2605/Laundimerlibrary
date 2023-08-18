<html>
<head>
    <title>Add new Loan</title>
</head>
<body>
    <h1> Add Loan to Database</h1>
<form action='viewloanhistorysql.php' method="POST">
    ISBN:<input type="number" name="ISBN"><br>
    Date_Borrowed:<input type="date" name="date_borrowed"><br>
    Date_Returned:<input type="date" name="date_returned"><br>
    Review:<input typr="text" name="review"><br>
    Rating:<input type="number" name="rating"><br>
    Late_Fines:<input type="number" name="late_fines"><br>
    <input type="submit" value="Add new Book"><br>
</form>
</body>
</html>