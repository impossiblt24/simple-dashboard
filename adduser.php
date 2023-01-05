<!DOCTYPE html>
<html>

<?php
require("dbconnect.php");
if  (isset($_POST["submit"]) ){
    $tennv = $_POST["ten"];
    $ngaysinh = $_POST["date"];
    $type = $_POST["type"];

    if(isset($tennv) && isset($ngaysinh) && isset($type)){
        
        $sql = "INSERT INTO `user` (`manv`,`tennv`,`ngaysinh`,`type`)
        VALUES(NULL,'$tennv','$ngaysinh','$type')";
        mysqli_query($conn, $sql);
        echo "<script>alert('Bạn đã thêm thành công')</script>";
        header("Location:user.php");
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
            <h1>Thêm User</h1><br>
            
            <input placeholder="Họ và Tên" type="text" id="ten" name="ten" tabindex="1" required autofocus>
            

            
            <input placeholder="Ngày sinh" type="date" id="date" name="date" tabindex="1" required autofocus>
            

            
            <input placeholder="Chức vụ" type="text" id="type" name="type" tabindex="1" required autofocus><br>
            

            
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            
        </form>
    </div>

    <button class="back" onclick= "window.location.href='user.php'">Back</button>

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
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(151,150,240,1) 0%, rgba(251,199,212,1) 100%);
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
}

.back{
    position: absolute;
    padding: 14px 30px;
    width: 150px;
    border: 1px solid #ddd;
    border-radius: 25px;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(151,150,240,1) 0%, rgba(251,199,212,1) 100%);
    font-size: 20px;
    left: 46%;
    top: 80%;
    cursor: pointer;
    box-shadow: 5px 10px 8px #888888;
}
</style>





</html>