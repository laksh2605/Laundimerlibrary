<?php
    session_start();
    include_once ("addadminsql.php");

    $stmt = $conn-> prepare("SELECT * FROM tblusers where Username=:username;");
    $stmt->bindParam(':username',$_POST['Username']);

    $stmt->execute();
    while ($row = $stmt-> fetch(PDO::FETCH_ASSOC))
    {
        if($_POST['password']==$row['Password']){
            $_SESSION['name'] = $row{"USername"};
        }else{

        }
    }
    $conn=null;
    ;
    ?>