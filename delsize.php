<?php
    require('dbconnect.php');
    $id = (int) $_GET['id'];
    $size = "SELECT size FROM `size` WHERE `size`.`idsize` = $id";
    $query = mysqli_query($conn,$size);
    $after = mysqli_fetch_assoc($query);

    $sql = "DELETE FROM `size` WHERE `size`.`idsize` = $id";
    mysqli_query($conn,$sql);
    header("location:size.php");
?>