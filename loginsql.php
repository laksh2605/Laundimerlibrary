<?php
    session_start();
    include_once ("connection.php");

    $sql="SELECT * FROM tblusers where Username='".$_POST['username']."'";
    $value=mysqli_query($conn, $sql);
    if(mysqli_num_rows($value) > 0){  
     while($row = mysqli_fetch_assoc($value)){  
        echo "<br> Username : {$row['Username']}  <br> ". 
             "--------------------------------<br>";  
        $_SESSION['loggedinuser']=$row['UserID'];
    }
    }else{  
    echo "0 results";  
    }  
    mysqli_close($conn);
    ?>