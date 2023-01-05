<!DOCTYPE html>
<html>

<?php
require("dbconnect.php");
if  (isset($_POST["submit"]) ){
    $tensp = $_POST["ten"];
    $size = $_POST["size"];
    $soluong = $_POST["soluong"];

    if(isset($tensp) && isset($size) && isset($soluong)){
        $sql = "INSERT INTO `inventory` (`makho`,`tensp`,`size`,`soluong`)
        VALUES(NULL,'$tensp','$size','$soluong')";
        mysqli_query($conn, $sql);
        echo "<script>alert('Bạn đã thêm thành công')</script>";
        header("Location:inventory.php");
    }
}

$query1 = "SELECT * FROM `product`";
$result1 = mysqli_query($conn, $query1);
$options = "";
while($row1 = mysqli_fetch_array($result1)){
    $options = $options."<option>$row1[1]</option>";
}

$query2 = "SELECT * FROM `size`";
$result2 = mysqli_query($conn, $query2);
$options2 = "";
while($row2 = mysqli_fetch_array($result2)){
    $options2 = $options2."<option>$row2[1]</option>";
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
            <select type="text" id="ten" name="ten" required>
                <?php echo $options; ?>
            </select>
        </div>
        <div>
            <label for="size">Size</label>
            <select type="text" id="size" name="size" required>
                <?php echo $options2; ?>
            </select>
        </div>
        
        <div>
            <label for="mota">Số Lượng</label>
            <input type="number" name="soluong" id="soluong" required></input>
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