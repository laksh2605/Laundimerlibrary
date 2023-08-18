<html>
    <head>
        <title>My Profile Page</title>
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

<h1> My Profile </h1>
      <ul>      
        <li><div class="profilebutton1"> <button class="indexbuttoncss" onclick="document.location.href='EditDetails.php'">Edit Details</button></div></li>

        <li><div class="profilebutton1"> <button class="indexbuttoncss" onclick="document.location.href='LoanHistory.php'">Loan History</button></div></li>

        <li><div class="profilebutton1"> <button class="indexbuttoncss" onclick="document.location.href='viewreviews.php'">View Reviews</button></div></li>

        <li><div class="profilebutton1"> <button class="indexbuttoncss" onclick="document.location.href='Fines.php'">Fines</button></div></li>

        <li><div class="profilebutton1"> <button class="indexbuttoncss" onclick="document.location.href='Orders.php'">Orders</button></div></li>
    </ul>
    
    <h2>Recommend</h2>

</body>
</html>
