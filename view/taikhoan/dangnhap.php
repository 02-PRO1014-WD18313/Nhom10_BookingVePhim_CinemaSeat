<div class="box-container">
        <div class="container-dn">
            <div class="left">
                <div class="header">
                    <h2>Chào mừng bạn đến với thế giới đồng hồ</h2>
                    <h4>Please Login </h4>
                </div>
                <form action="?act=dangnhap" method="post">
                    <div class="input">
                        <input type="text" placeholder="user name" name="user" >
                        <i class="fa-solid fa-user"></i>
                        <li class="error"><?= (isset($error['user'])) ?  $error['user']  : '' ?></li>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="password" name="pass" >
                        <i class="fa-solid fa-lock"></i>
                        <li class="error"><?= (isset($error['pass'])) ?  $error['pass']  : '' ?></li>
                    </div>
                    <div class="forget">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <div class="btn ">
                        <button name="btn" value="dangnhap" type="submit">Sign in</button>
                        <span>Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký</a></span>
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
