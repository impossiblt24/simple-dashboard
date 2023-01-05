
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
                <li><a href="#">
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="./user.php">
                    <span class="link-name">Users</span>
                </a></li>
                <li><a href="product.php">
                    <span class="link-name">Products</span>
                </a></li>
                <li><a href="size.php">
                    <span class="link-name">Size</span>
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
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">

                    <div class="box box1">
                        <span class="text">Total Users</span>
                        <span class="number">
                            <?php
                                $sql="SELECT * from user";
                                $result=$conn-> query($sql);
                                $count=0;
                                if ($result-> num_rows > 0){
                                    while ($row=$result-> fetch_assoc()) {
                            
                                        $count=$count+1;
                                    }
                                }
                                echo $count;
                            ?>
                        </span>
                    </div>

                    <div class="box box2" style="background-color: background: rgb(183,152,145);
background: linear-gradient(90deg, rgba(183,152,145,1) 0%, rgba(148,113,107,1) 100%);;">
                        <span class="text">Total Products</span>
                        <span class="number">
                        <?php
                                $sql="SELECT * from product";
                                $result=$conn-> query($sql);
                                $count=0;
                                if ($result-> num_rows > 0){
                                    while ($row=$result-> fetch_assoc()) {
                            
                                        $count=$count+1;
                                    }
                                }
                                echo $count;
                            ?>
                        </span>
                    </div>

                    <div class="box box3" style="background-color: background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(20,136,204,1) 0%, rgba(43,50,178,1) 100%);;">
                        <span class="text">Sizes</span>
                        <span class="number"><?php
                                $sql="SELECT * from size";
                                $result=$conn-> query($sql);
                                $count=0;
                                if ($result-> num_rows > 0){
                                    while ($row=$result-> fetch_assoc()) {
                            
                                        $count=$count+1;
                                    }
                                }
                                echo $count;
                            ?></span>
                    </div>

					<div class="box box4" style="background-color: background: rgb(7,101,133);
    background: linear-gradient(90deg, rgba(7,101,133,1) 0%, rgba(255,255,255,1) 100%);;">
                        <span class="text">Inventory</span>
                        <span class="number"><?php
                                $sql="SELECT * from inventory";
                                $result=$conn-> query($sql);
                                $count=0;
                                if ($result-> num_rows > 0){
                                    while ($row=$result-> fetch_assoc()) {
                            
                                        $count=$count+1;
                                    }
                                }
                                echo $count;
                            ?></span>
                    </div>

                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Hoạt động</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Tên</span>
                        <span class="data-list">Trần Quang Định</span>
                        <span class="data-list">Nguyễn Nam Dương</span>
                        
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">dinh.207ct10012@vanlanguni.vn</span>
                        <span class="data-list">duong.207ct65552@vanlanguni.vn</span>
                        
                    </div>
                    <div class="data joined">
                        <span class="data-title">Tham gia</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        
                        
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">Admin</span>
                        <span class="data-list">Member</span>
                        
                    </div>
                    <div class="data status">
                        <span class="data-title">Trạng thái</span>
                        <span class="data-list">Online</span>
                        <span class="data-list">Offline</span>
                       

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<script src="script.js"></script>-->
</body>
</html>
