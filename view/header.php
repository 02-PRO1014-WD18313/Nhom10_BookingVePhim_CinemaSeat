<?php $list_dm = loadAll_danhmuc(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/css.css" />
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="logo">iWatch</div>
            <nav>
                <ul>
                    <li>
                        <a href="index.php"><i class="fa-solid fa-house">&nbsp</i>Home</a>
                    </li>
                    <li>
                        <a href="">Sản Phẩm <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <?php
                            foreach ($list_dm as $value) {
                                extract($value); ?>
                                <li><a href=""><?=$name?></a></li>
                            <?php    }
                            ?>

                        </ul>
                    </li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Góp ý</a></li>
                    <li><a href="">Liên hệ</a></li>
                </ul>
            </nav>
            <div class="login">              
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search..." />
                    <!-- <a href="index.php?act=dangnhap">Đăng nhập</a> -->
                    <a href="index.php?act=dangnhap"><?=isset($_SESSION['user']) ? $_SESSION['user'] : 'Đăng nhập'?></a>
                </div>
                <div ><a href="index.php?act=dangxuat">Đăng xuất</a></div>
            </div>
        </header>