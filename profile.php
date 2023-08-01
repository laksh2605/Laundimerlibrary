<!DOCTYPE html>
<html>
<head>
    <title>My Profile Page</title>
    <link rel="stylesheet"href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- this is the styling for the images and buttons on the links - I made this section to override the above stylesheet-->
    <style>
body {
    font-family: "Times New Roman", Times, serif;
    margin: 0;
}

html {
    box-sizing: border-box;
}
*, *:before, *:after {
    box-sizing: inhereit;
    /*padding-left: 6px */
}

.column {
    float:left;
    width:33.3%
    margin-bottom:16px;
    padding:8px 8px;
}

.card {
    box-shadow: 2 4px 8px 0 rgba(0,0,0,0.2);*
        border-style: groove;
}
.card:hover{
    box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2);
}

        .card-img{
            height:800px;
            overflow:hidden;
        }
.about-section {
    padding: 50px;
    text-align: center;
    background-color: #57005dff;
    color: white;
}

.container {
    padding: 0 16px;
}

.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: grey;
}
@media screen and (max-width:650px) {
    .column {
        width: 100%
        display:block;
    }
}

</style>
</head>

<body>

<?php
    require 'navbar.php';
    require 'LoginVerification.php';
    include_once('connections.php');
    ?>

    <div id="homepage" class="w3-container" style="padding-left:0px">
        <h2 class="w3-border-bottom w3-border-black" style= "text-align: center; font-family: 'Times New Roman', Times, serif; padding-bottom:10px">My Profile</h2>
</div>

<div class="w3-row-padding" style='padding-top: 20px; padding-bottom;100px;'>
<div class="w3-col l3 m6 w3-margin-bottom" style='padding-top: 20px;'>
<div class="w3-display-container">
<div class="w3-display-topleft w3-black w3-padding"><a id="link1" style="display; inline-block; color:white; font-family: 'Times New Roman', Times, serif;" href="EditProfile.php">Edit My Details</a></div>
</div>
    <br>


    
    <ul>
        <li><button><a id="link1" style="display: inline-block;" href= "EditDetails.php">Edit my Details</a></button></li>
        <li><button><a id="link2" style="display: inline-block;" href= "UserReviews.php">View Reviews</a></button></li>
        <li><button><a id="link3" style="display: inline-block;" href= "LoanHistory.php">Loan History</a></button></li>
        <li><button><a id="link4" style="display: inline-block;" href= "Fines.php">Fines</a></button></li>
        <li><button><a id="link5" style="display: inline-block;" href= "Orders.php">Orders</a></button></li>
    </ul>

    <h2>Recommend</h2>

</body>
</html>

