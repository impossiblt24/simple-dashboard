<?php
    require('dbconnect.php');
    $id = (int) $_GET['id'];
    $user = "SELECT tensp FROM `inventory` WHERE `inventory`.`makho` = $id";
    $query = mysqli_query($conn,$user);
    $after = mysqli_fetch_assoc($query);

    $sql = "DELETE FROM `inventory` WHERE `inventory`.`makho` = $id";
    mysqli_query($conn,$sql);
    header("location:inventory.php");
?>