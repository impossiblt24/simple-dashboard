<?php
    require('dbconnect.php');
    $id = (int) $_GET['id'];
    $user = "SELECT tennv FROM `user` WHERE `user`.`manv` = $id";
    $query = mysqli_query($conn,$user);
    $after = mysqli_fetch_assoc($query);

    $sql = "DELETE FROM `user` WHERE `user`.`manv` = $id";
    mysqli_query($conn,$sql);
    header("location:user.php");
?>