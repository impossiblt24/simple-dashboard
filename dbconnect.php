<?php
    $serverName = "localhost";
    $userName = "root";
    $pwd = "";
    $nameDB = "dbmanage";

    $conn = mysqli_connect($serverName, $userName, $pwd, $nameDB);

    if ($conn == false){
        echo "Kết nối thất bại";
    }
?>