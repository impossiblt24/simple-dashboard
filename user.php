
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./css/style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body>
    <?php
        require("dbconnect.php");
        $sql = "SELECT * FROM `user`";
        $query = mysqli_query($conn,$sql);
    ?>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">VLU-IT management</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="home.php">
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <span class="link-name">Users</span>
                </a></li>
                <li><a href="product.php">
                    <span class="link-name">Products</span>
                </a></li>
                <li><a href="size.php">
                    <span class="link-name">Sizes</span>
                </a></li>
                <li><a href="inventory.php">
                    <span class="link-name">Inventory</span>
                </a></li>
                
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Tìm kiếm...">
            </div>
        </div>

        <p style="margin: 3cm;"></p>

        <h1 style="font-size: 50px; text-align: center;">User Table</h1><br>

        <div style="overflow-x:auto;">
        <table>

            <tr id="ta-title">
                <th>Mã NV</th>
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Type</th>
                <th>Chỉnh sửa</th>
                <th>Xóa</th>
            </tr>

            <?php
                while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $row["manv"] ?></td>
                <td><?= $row["tennv"] ?></td>
                <td><?= $row["ngaysinh"] ?></td>
                <td><?= $row["type"] ?></td>
                <td><a style="color: black;text-decoration: none; background-color: rgba(151,150,240,1); padding: 4px 8px; border-radius: 20px;
                 box-shadow: 2px 4px 3px #888888;" href="edituser.php?id=<?= $row['manv']?>">Edit</a></td>
                <td><a style="color: black;text-decoration: none; background-color: rgba(251,199,212,1); padding: 4px 8px; border-radius: 20px;
                 box-shadow: 2px 4px 3px #888888;" onclick="return deluser()" href="deluser.php?id=<?= $row['manv']?>">Remove</a></td>
            </tr>
            <?php }?>
        </table>

        <p style="margin: 10cm;"></p>

        <button class="add-btn" onclick= "window.location.href='adduser.php'">Thêm User</button>

    </div>
    </section>

    

</body>
<script>
    function deluser(){
        var conf = confirm(`Bạn có chắc muốn xóa user này?`);
        return conf;
    }
</script>
<style>
table {
    border-collapse: collapse; 
    width: 70%;
    height: 30%;
    border: 1px solid #ddd;
    position: absolute;
    left: 15%;
    top: 38%;
  }

#ta-title{
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(151,150,240,1) 0%, rgba(251,199,212,1) 100%);
}
  
th, td {
    text-align: center;
    padding: 20px;
    font-size: 20px;
}
  
tr:nth-child(even){background-color: #f2f2f2}

.add-btn{
    position: absolute;
    padding: 14px 30px;
    border: 1px solid #ddd;
    border-radius: 25px;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(151,150,240,1) 0%, rgba(251,199,212,1) 100%);
    font-size: 20px;
    left: 44%;
    top: 25%;
    cursor: pointer;
}
</style>
</html>
