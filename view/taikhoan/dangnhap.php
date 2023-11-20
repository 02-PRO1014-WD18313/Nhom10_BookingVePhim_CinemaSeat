<?php
    include "model/validate.php";

?>>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/taikhoan.css">
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
    <title>Space</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="header">
                <h2>Chào mừng bạn đến với thế giới đồng hồ</h2>
                <h4>Please Login </h4>
            </div>
            <form action="" method="post">
            <div class="input">
                <input type="text" placeholder="user name" name="user" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input">
                <input type="password" placeholder="password" name="pass" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="forget">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <div class="btn">
                <button name="dangnhap" value="dangnhap" type="submit">Sign in</button>
                <span>Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký</a></span>
            </div>
            <div class="with">
                <div class="gg">
                    <a href="#"><i class="fa-brands fa-google"></i>Google</a>
                </div>
            </div>
            </form>
        </div>
        <div class="right">
            <img src="https://i.pinimg.com/originals/6a/ba/8d/6aba8d6fe7a455389b50d24cfbc84316.jpg">
        </div>
    </div>
</body>
</html>