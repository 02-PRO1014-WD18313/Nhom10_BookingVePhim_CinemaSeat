<?php
include "../../model/pdo.php";
include "../../model/taikhoan.php";
include '../../model/cart.php';
include "../../model/validate.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<style>
    body {
        padding-top: 0;
    }
</style>

<body>


    <div class="box-container">
        <div class="container-dn">
            <div class="left">
                <div class="header">
                    <h2>Đăng nhập</h2>
                </div>
                <form action="" method="post">
                    <div class="input">
                        <input type="text" placeholder="Tên đăng nhập" name="user">
                        <i class="fa-solid fa-user"></i>
                        <li class="error"><?= (isset($error['user'])) ?  $error['user']  : '' ?></li>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Mật khẩu" name="pass">
                        <i class="fa-solid fa-lock"></i>
                        <li class="error"><?= (isset($error['pass'])) ?  $error['pass']  : '' ?></li>
                    </div>
                    <div class="forget">
                        <label><input type="checkbox"> Ghi nhớ mật khẩu</label>
                    </div>
                    <div class="btn ">
                        <button name="btn" value="dangnhap" type="submit">Đăng nhập</button>
                        <small style="color: red;"> <?= (isset($err)) ?  $err . '<br>'  : '' ?></small>

                        <span>Bạn chưa có tài khoản? <a style="color: blue" href="dangky.php?act=dangky">Đăng ký</a></span>
                        <span style="margin-left: 90px;"><a href="../../index.php?act=quenmk">Quên mật khẩu</a></span>
                    </div>
                    <div class="with">
                        <div class="gg mt">
                            <a href="#"><i class="fa-brands fa-google"></i>Google</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="right">
                <img src="https://i.pinimg.com/originals/6a/ba/8d/6aba8d6fe7a455389b50d24cfbc84316.jpg">
            </div>
        </div>
    </div>
</body>

</html>