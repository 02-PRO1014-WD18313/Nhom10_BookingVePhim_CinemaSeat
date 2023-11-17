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
            <div class="logo">iWatch</div>
            <nav>
                <ul>
                    <li>
                        <a href=""><i class="fa-solid fa-house">&nbsp</i>Home</a>
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
                    <a href="">Đăng nhập</a>
                </div>
            </div>
            <!-- <marquee behavior="scroll" direction="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ullam, adipisci ex illo ea similique sapiente incidunt odit! Fuga corrupti id ullam eum, ratione atque esse at libero dolorum minus?</marquee> -->
        </header>