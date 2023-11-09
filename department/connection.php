<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "department";

    $conn = mysqli_connect($severname, $username, $password, $dbname);

    if($conn){
        echo "Database Connected";
    }else{
        echo "Connection Failed";
    }

?>