
<div class="box-container">
        <div class="container-dn">
            <div class="left">
                <div class="header">
                    <h2>Đăng ký</h2>
                </div>
                <form action="?act=dangky" method="post">
                    <div class="input">
                        <input type="text" placeholder="Tên đăng nhập" name="user">
                        <i class="fa-solid fa-user"></i>
                        <li class="error"><?= (isset($error['user'])) ?  $error['user'] : '' ?></li>
                    </div>
                    <div class="input">
                        <input type="email" placeholder="Mời bạn nhập Email" name="email">
                        <i class="fa-solid fa-envelope"></i>
                        <li class="error"><?= (isset($error['email'])) ?  $error['email']  : '' ?></li>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Password" name="pass">
                        <i class="fa-solid fa-lock"></i>
                        <li class="error"><?= (isset($error['pass'])) ?  $error['pass']  : '' ?></li>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Confirm password" name="confirmPass">
                        <i class="fa-solid fa-lock"></i>
                        <li class="error"><?= (isset($error['confirmPass'])) ?  $error['confirmPass']  : '' ?></li>
                    </div>
                    <div class="forget mt">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <div class="btn">
                        <button name="btn" type="submit" value="dangky">Đăng ký</button>
                        <span>Bạn đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập</a></span>
                    </div>
                    <div class="with">
                        <div style="margin-top: 10px;" class="gg">
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
