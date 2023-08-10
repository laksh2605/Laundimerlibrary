<?php
    session_start();
    include_once ("connection.php");

    $sql="SELECT * FROM tblusers where Username='".$_POST['username']."'";
    $retval=mysqli_query($conn, $sql);
    if(mysqli_num_rows($retval) > 0){  
     while($row = mysqli_fetch_assoc($retval)){  
        echo "<br> Username : {$row['Username']}  <br> ". 
             "--------------------------------<br>";  
    }
    }else{  
    echo "0 results";  
    }  
    mysqli_close($conn);
    ?>