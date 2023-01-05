<!DOCTYPE html>
<html>

<?php
require("dbconnect.php");
if  (isset($_POST["submit"]) ){
    $tensp = $_POST["ten"];
    $gia = $_POST["gia"];
    $mota = $_POST["mota"];
    $hinhanh = $_FILES['hinhanh']['name'];
    $temp = $_FILES['hinhanh']['tmp_name'];
    $target_dir = "./img/";
    $target_file = $target_dir.$hinhanh;
    if(isset($tensp) && isset($gia) && isset($mota) && isset($hinhanh)){
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file);
        $sql = "INSERT INTO `product` (`masp`,`tensp`,`gia`,`mota`,`imgURL`)
        VALUES(NULL,'$tensp','$gia','$mota','$hinhanh')";
        mysqli_query($conn, $sql);
        echo "<script>alert('Bạn đã thêm thành công')</script>";
        header("Location:product.php");
    }
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

    <div class="container">  
        <form action="" method="POST" enctype="multipart/form-data">
            <h1>Thêm Size</h1><br>
            <div>
            <label for="ten">Tên sản phẩm</label>
            <input type="text" id="ten" name="ten" required>
        </div>
        <div>
            <label for="gia">Giá Sản phẩm</label>
            <input type="number" id="gia" name="gia" required>
        </div>
        <div>
            <label for="file">hình ảnh</label>
            <input type="file" id="file" name="hinhanh" value="Choose File" required>
        </div>
        <div>
            <label for="mota">Loại hàng</label>
            <input name="mota" id="mota" required></input>
        </div>
        <button type="submit" name="submit">Thêm sản phẩm</button>
            
        </form>
    </div>

    <button class="back" onclick= "window.location.href='product.php'">Back</button>

</body>

<style>
* {
    padding: 0;
    margin: 0;
}
body{
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(151,150,240,1) 0%, rgba(251,199,212,1) 100%);
}

.container{
    width: 600px;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(20,136,204,1) 0%, rgba(43,50,178,1) 100%);
    border-radius: 30px;
    
    padding: 80px 40px;
    box-sizing: border-box;
    transform: translate(-50%, -50%);
    position: fixed;
    left: 50%;
    top: 50%;
    box-shadow: 5px 10px 8px #888888;
    
}

h1{
    text-align: center;
    color: black;
    font-size: 50px;
}

input{
    width: 100%;
    height: 50%;
    color: black;
    background: none;
    border: 1px solid black;
    border-radius: 4px;
    padding: 6px 20px;
    box-sizing: border-box;
    margin-bottom: 20px;
    
}

::placeholder{
    color: black;
}

button{
    padding: 20px;
    width: 100%;
    border-radius: 30px;
    cursor: pointer;
    left: 50%;
    margin-top: 20px;
    font-size: 20px;
}

.back{
    position: absolute;
    padding: 14px 30px;
    width: 150px;
    border: 1px solid #ddd;
    border-radius: 25px;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(20,136,204,1) 0%, rgba(43,50,178,1) 100%);
    font-size: 20px;
    left: 46%;
    top: 80%;
    cursor: pointer;
    box-shadow: 5px 10px 8px #888888;
}
</style>





</html>