<?php
    require('dbconnect.php');
    $id = (int) $_GET['id'];
    $product = "SELECT imgURL FROM `product` WHERE `product`.`masp` = $id";
    $query = mysqli_query($conn,$product);
    $after = mysqli_fetch_assoc($query);

    if (file_exists("./img/".$after['imgURL'])){
        unlink("./img/".$after['imgURL']);
    }

    $sql = "DELETE FROM `product` WHERE `product`.`masp` = $id";
    mysqli_query($conn,$sql);
    header("location:product.php");
?>