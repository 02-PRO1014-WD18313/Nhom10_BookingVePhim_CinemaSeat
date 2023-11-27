<?php
$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$length = 8;

$randomString = substr(str_shuffle($characters), 0, $length);
?>
<div class="container-tk">
    <div class="nav-tk">
        <ul>
            <li class="active" onclick="tt(1)"><a href="#" id="trangtaikhoan">Trang tài khoản</a></li>
            <li onclick="tt(2)"><a href="#">Đơn hàng</a></li>
            <li onclick="tt(3)"><a href="#">Đổi Mật khẩu</a></li>
        </ul>
    </div>
    <div class="box-tk-left">
        <div class="box-tk tt" id="tt1">
            <h3 class="title-tk">Thông tin tài khoản</h3>
            <form action="" method="post">
                <div class="ip-tk">
                    <div class="mb">
                        <label for="user">Tên đăng nhập <span style="color: red;">*</span></label>
                        <?php
                        if ($tk['checkname'] === 0) { ?>
                            <input type="text" name="user" id="user" value="<?= $tk['user'] ?>"><br>
                            <?= (isset($err['user'])) ? '<small style="color: red;">' . $err['user'] . '</small>' : '<small style="color: gray;">Tên đăng nhập chỉ được phép thay đổi một lần</small>' ?>
                        <?php } else { ?>
                            <input disabled style="cursor: not-allowed;" type="text" id="user" value="<?= $tk['user'] ?>">
                            <input hidden type="text" name="user" id="user" value="<?= $tk['user'] ?>"><br>
                            <small style="color: gray;">Bạn đã hết số lượt thay đổi tên</small>
                        <?php  }
                        ?>
                    </div>
                    <div class="mb">
                        <label for="sdt">Số điện thoại <span style="color: red;">*</span></label>
                        <input type="text" name="sdt" id="sdt" value="<?= $tk['tel'] ?>" placeholder="...">
                        <small style="color: red;"><?= (isset($err['sdt'])) ? $err['sdt'] : '' ?></small>
                    </div>
                    <div class="mb">
                        <label for="email">Email <span style="color: red;">*</span></label>
                        <input type="text" name="email" id="email" value="<?= $tk['email'] ?>">
                        <small style="color: red;"><?= (isset($err['email'])) ? $err['email'] : '' ?></small>
                    </div>

                    <div class="mb">
                        <label for="diachi">Địa chỉ <span style="color: red;">*</span></label>
                        <input type="text" name="diachi" id="diachi" value="<?= $tk['address'] ?>" placeholder="...">
                        <small style="color: red;"><?= (isset($err['address'])) ? $err['address'] : '' ?></small>
                    </div>
                </div>
                <button name="btn_tt" value="btn_tt" class="btn-capnhat">Lưu</button>
            </form>
        </div>
        <div class="box-tk tt" id="tt2">
            <h3 class="title-tk">Lịch sử đơn hàng</h3>
            <?php
            foreach ($ctdh as $ctdh) {
                extract($ctdh);
            ?>
                <div class="hitory">
                    <div class="anh"><img width="100" src="uploads/img_sp/1700576058_Tissot T006.407.16.033.00.jpeg" alt="asnvdjas"></div>
                    <div class="name"><?= $ctdh['name'] ?></div>
                    <div class="quantity">
                        <small>x<?= $ctdh['soluong'] ?> </small>
                    </div>
                    <div class="gia">
                        <p>₫<?= number_format($ctdh['gia_ban'], 0, ',', '.') ?></p>
                    </div>
                    <h3> Tổng: ₫<?= number_format($ctdh['soluong'] * $ctdh['gia_ban'], 0, ',', '.') ?>
                </div>
                </h3>
            <?php } ?>
        </div>
        <div class="box-tk tt" id="tt3">
            <h3 class="title-tk">Đổi mật khẩu</h3>
            <form action="" method="post">
                <div class="ip-tk">
                    <div class="mb">
                        <label for="user">Mật khẩu cũ <span style="color: red;">*</span></label>
                        <input type="text" name="user" id="user" value="" placeholder="Nhập mật khẩu hiện tại">
                    </div>
                    <div class="mb">
                        <label for="sdt">Mật khẩu mới <span style="color: red;">*</span></label>
                        <input type="text" name="sdt" id="sdt" value="" placeholder="Nhập mật khẩu mới">
                    </div>
                    <div class="mb">
                        <label for="email">Nhập lại mật khẩu <span style="color: red;">*</span></label>
                        <input type="text" name="email" id="email" value="" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="mb">
                        <label for="email">Mã captcha <span style="color: red;">*</span></label>
                        <input style="width: 25%; cursor: not-allowed; text-align: center" disabled type="text" name="email" id="email" value="" placeholder="<?= $randomString; ?>">
                        <input style="width: 70%" type="text" name="email" id="email" value="" placeholder="Nhập mã captcha">
                    </div>
                </div>
                <button class="btn-capnhat">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
<script>
    var spans = document.querySelectorAll(".nav-tk ul li");
    console.log(spans);
    for (var i = 0; i < spans.length; i++) {
        spans[i].addEventListener("click", function() {
            for (var j = 0; j < spans.length; j++) {
                spans[j].classList.remove("active");
            }
            this.classList.add("active");
        })
    }

    function tt(id) {
        var lichElements = document.getElementsByClassName("tt");
        for (var i = 0; i < lichElements.length; i++) {
            lichElements[i].style.display = "none";
        }
        var lichElement = document.getElementById("tt" + id);
        if (lichElement) {
            lichElement.style.display = "block";
        }
    }
</script>