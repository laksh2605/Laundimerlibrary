<html>
<head>

    <title>View Orders</title>
    <link rel="stylesheet" href="header.css">
        <style>
            .signupform{
                text-align:center;
                font-size:18px;
                margin-top: 40;
            }
        </style>
    </head>
    <body>
      <?php require 'navbar.php'; ?>
        <div>
            <div class="signupform">
</head>
<body>

<h1>View Orders</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th></th>
    </tr>
<?php

    $join="SELECT TblBooks.Title, TblBooks.Author, TblOrders.ISBN FROM TblOrders 
    INNER JOIN TblBooks ON TblBooks.ISBN=TblOrders.ISBN WHERE UserID='".$_SESSION['userid']."'";

    $stmt=$conn->prepare($join);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><p><?php echo $row['Title']; ?></p></td>
            <td><p><?php echo $row['Author']; ?></p></td>
            <td><form ation='CancelOrder.php' method="POST">
            <input type="hidden" name="isbn" value="<?php echo $row['ISBN']; ?>"><br>
            <td><input type="submit" value = "Cancel Order"></td><br>>
                </form></td>
       </tr>
    <?php } ?>
    </table>
    </body>
    </html>