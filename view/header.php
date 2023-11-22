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
                    <a href="index.php"><img width="250" src="image/logg 1.png" alt="" /></a>

                </div>
                <div class="input">
                    <form action="?act=listsp" method="post">
                        <div class="icon-search">
                            <button name="btn" value="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <input name="key" type="text" placeholder="Search..." />
                    </form>
                </div>
                <div class="user">
                    <?php
                    if (isset($_SESSION['user'])) { ?>
                        <div class="taikhoan">
                            <img src="image/avata_04.webp" alt="loi" />
                            <span class="span">Xin chào, <?= $_SESSION['user'] ?></span> <br />
                            <span><a href="?act=dangxuat">Đăng xuất</a></span>
                        </div>
                    <?php } else { ?>
                        <?php
                        ?>
                        <li><a href="view/taikhoan/dangnhap.php?act=dangnhap">Đăng nhập </a></li>/
                        <li><a href="view/taikhoan/dangky.php?act=dangky">Đăng ký</a></li>
                    <?php } ?>


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
                                <li><a href="#"><?= $value['name'] ?></a></li>
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
                            <li><a href="?act=listsp">Sản phẩm</a></li>
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
        <!-- <script>
            var prevScrollpos = window.pageYOffset;
            window.onscroll = function() {
                var currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.querySelector(".bottom").style.display = "flex";
                } else {
                    document.querySelector(".bottom").style.display = "none";
                }
                prevScrollpos = currentScrollPos;
            };
        </script> -->