<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "userdb";
    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    if($conn){
        echo"Connnected";
    }else{
        echo"Not Connnected";
    }

?>