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
    <title>Đăng ký</title>
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="header">
                <h2>Đăng ký</h2>
            </div>
            <form action="index.php?act=dangky" method="post">
                <div class="input">
                    <input type="text" placeholder="Tên đăng nhập" name="user" required>
                    <i class="fa-solid fa-user"></i>
                    <li class="error"><?= (isset($error['user'])) ? '<li>' . $error['user'] . '</li>' : '' ?></li>
                </div>
                <div class="input">
                    <input type="email" placeholder="Mời bạn nhập Email" name="email" required>
                    <i class="fa-solid fa-envelope"></i>
                    <li class="error"><?= (isset($error['email'])) ? '<li>' . $error['email'] . '</li>' : '' ?></li>
                </div>
                <div class="input">
                    <input type="password" placeholder="Password" name="pass" required>
                    <i class="fa-solid fa-lock"></i>
                    <li class="error"><?= (isset($error['pass'])) ? '<li>' . $error['pass'] . '</li>' : '' ?></li>
                </div>
                <div class="input">
                    <input type="password" placeholder="Confirm password" name="confirmPass" required>
                    <i class="fa-solid fa-lock"></i>
                    <li class="error"><?= (isset($error['confirmpass'])) ? '<li>' . $error['confirmpass'] . '</li>' : '' ?></li>
                </div>
                <!-- <div class="input">
                <input type="number" placeholder="Số điện thoại" name="tel" required>
                <i class="fa-solid fa-lock"></i>
            </div> -->
                <div class="forget">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <div class="btn">
                    <button name="dangky" type="submit" value="dangky">Đăng ký</button>
                    <span>Bạn đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập</a></span>
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