<?php

$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$length = 8;

$randomString = substr(str_shuffle($characters), 0, $length);
?>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
<div class="container-tk">
    <div class="nav-tk">
        <ul>
            <li onclick="tt(1)" data-tab-id="1"><a href="#" id="trangtaikhoan">Trang tài khoản</a></li>
            <li onclick="tt(2)" data-tab-id="2"><a href="#">Đơn hàng</a></li>
            <li onclick="tt(3)" data-tab-id="3"><a href="#">Đổi Mật khẩu</a></li>
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
            <table width="100%" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Người nhận</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tổng</th>
                        <th>Trạng thái</th>                      
                        <th>Xem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dh as $value) { 
                        extract($value);
                        if ($trangthai === 0) {
                            $trangthai = '<span style="background-color: #e74a3b;color: white; border-radius: 8px;padding: 0 5px">Chưa xác nhận</span>';
                        } else if ($trangthai === 1) {
                            $trangthai = '<span style="background-color: #4e73df; color: white; border-radius: 8px;padding: 0 5px">Đã xác nhận</span>';
                        } else if ($trangthai === 2) {
                            $trangthai = '<span style="background-color: #f6c23e;color: white; border-radius: 8px;padding: 0 5px">Đang giao hàng</span>';
                        } elseif ($trangthai === 3) {
                            $trangthai = '<span style="background-color: #1cc88a;color: white; border-radius: 8px;padding: 0 5px">Giao hàng thành công</span>';
                        } else {
                            $trangthai = '<span style="background-color: #858796;color: white; border-radius: 8px;padding: 0 5px">Đã hủy</span>';
                        }
                        ?>
                    <tr>
                        <td><?=$nguoi_nhan?></td>
                        <td><?=$tel?></td>
                        <td><?=$address?></td>
                        <td><?=number_format($thanhtien, 0 , "," , ".")?> ₫</td>
                        <td><?=$trangthai?></td>
                        <td><a href="index.php?act=ctdh&id_dh=<?=$id?>">Xem chi tiết</a></td>
                    </tr>
                  <?php  }
                    ?>
                </tbody>
            </table>
        </div>







        <div class="box-tk tt" id="tt3">
            <h3 class="title-tk">Đổi mật khẩu</h3>
            <form action="" method="post">
                <div class="ip-tk">
                    <div class="mb">
                        <label for="user">Mật khẩu cũ <span style="color: red;">*</span></label>
                        <input type="password" name="pass" id="user" value="" placeholder="Nhập mật khẩu hiện tại"><br>
                        <small><?= (isset($err['pass'])) ? $err['pass'] : '' ?></small>
                    </div>
                    <div class="mb">
                        <label for="sdt">Mật khẩu mới <span style="color: red;">*</span></label>
                        <input type="password" name="pass2" value="" placeholder="Nhập mật khẩu mới"><br>
                        <small><?= (isset($err['pass2'])) ? $err['pass2'] : '' ?></small>
                    </div>
                    <div class="mb">
                        <label for="email">Nhập lại mật khẩu <span style="color: red;">*</span></label>
                        <input type="password" name="confim" id="email" value="" placeholder="Nhập lại mật khẩu"><br>
                        <small><?= (isset($err['confim'])) ? $err['confim'] : '' ?></small>
                    </div>
                    <div class="mb">
                        <label for="email">Mã captcha <span style="color: red;">*</span></label>
                        <input style="width: 25%; cursor: not-allowed; text-align: center" disabled type="text" value="<?= $randomString; ?>">
                        <input hidden name="captcha" type="text" value="<?= $randomString; ?>">
                        <input style="width: 70%" type="text" name="ma" value="" placeholder="Nhập mã captcha">
                        <small><?= (isset($err['ma'])) ? $err['ma'] : '' ?></small>
                    </div>
                </div>
                <button class="btn-capnhat" name="btn_update_pass" value="btn_update_pass">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var spans = document.querySelectorAll(".nav-tk ul li");
        var activeTab = sessionStorage.getItem("activeTab");

        for (var i = 0; i < spans.length; i++) {
            spans[i].addEventListener("click", function() {
                for (var j = 0; j < spans.length; j++) {
                    spans[j].classList.remove("active");
                }
                this.classList.add("active");
                var tabId = this.dataset.tabId;
                sessionStorage.setItem("activeTab", tabId);
                tt(tabId); // Call the tt function with the clicked tab's ID
            });
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

        // Set the active tab based on sessionStorage
        if (activeTab) {
            tt(activeTab);
            document.querySelector(".nav-tk ul li[data-tab-id='" + activeTab + "']").classList.add("active");
        }
    });
</script>