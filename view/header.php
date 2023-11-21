<?php $list_dm = loadAll_danhmuc(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/css.css" />
</head>

<body>
    <div class="container">
        <header>
            <div class="top">
                <div class="logo">
                    <img width="80" src="image/logo.png" alt="" />
                </div>
                <div class="input">
                    <div class="icon-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="text" placeholder="Search..." />
                </div>
                <div class="user">
                    <div class="taikhoan">
                        <img src="image/avata_04.webp" alt="loi" />
                        <span class="span">Xin chào, Tiến Đạt</span> <br />
                        <span>Thành viên </span>
                    </div>
                    <!-- <li><a href="">Đăng nhập </a></li>/
            <li><a href="">Đăng ký</a></li> -->
                    <div class="icon">
                        <span><i class="fa-regular fa-heart"></i><small>0</small></span>
                        <span>
                            <i class="fa-solid fa-bag-shopping"></i><small>0</small></span>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="danhmuc" onclick="toggleSubMenu(this)">
                        <i class="fa-solid fa-bars"></i><span>Danh Mục</span><i class="fa-solid fa-angle-down"></i>
                        <ul class="submenu">
                            <?php
                            foreach ($list_dm as $value) { ?>
                                <li><a href="#"><?=$value['name']?></a></li>
                            <?php }
                            ?>


                        </ul>
                    </div>

                    <nav>
                        <ul>
                            <li>
                                <a href=""><i class="fa-solid fa-house"></i>Trang Chủ</a>
                            </li>
                            <li><a href="">Cửa hàng</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="right">
                    <div class="tel">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <div class="number">
                        <p>Hotline:</p>
                        <p>0964305701</p>
                    </div>
                </div>
            </div>
        </header>