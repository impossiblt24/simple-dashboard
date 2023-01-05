<!DOCTYPE html>
<html>

<?php
require("dbconnect.php");
if  (isset($_POST["submit"]) ){
    $tensp = $_POST["ten"];
    $size = $_POST["size"];
    $soluong = $_POST["soluong"];
   
    if(isset($tensp) && isset($size) && isset($soluong)){
       
        $sql = "INSERT INTO `inventory` (`makho`,`tensp`,`idsize`,`soluong`)
        VALUES(NULL,'$tensp','$size','$soluong')";
        mysqli_query($conn, $sql);
        echo "<script>alert('Bạn đã thêm thành công')</script>";
        header("Location:product.php");
    }
}

$query1 = "SELECT * FROM `product`";
$result1 = mysqli_query($conn, $query1);
$options = "";
while($row1 = mysqli_fetch_array($result1)){
    $options = $options."<option>$row1[1]</option>";
}
?>

<body>
    

    <!-- <a href="user.php">Quay về</a>
    <h1>Thêm sản phẩm</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="ten">Tên nhân viên</label>
            <input type="text" id="ten" name="ten" required>
        </div>
        <div>
            <label for="date">ngày sinh nhân viên</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div>
            <label for="type">chức</label>
            <input type="text" id="type" name="type" required>
        </div>
        <button type="submit" name="submit">Thêm user</button>
    </form> -->

    <form action="">
        <select>
            <?php echo $options; ?>
        </select>
    </form>




</html>