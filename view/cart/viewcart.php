<div class="container-table">
<table class="table-left">
    <thead>
        <tr>
            <th>#</th>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $i = 1;
        foreach ($loadAll_cart as $value) {
            extract($value); ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img width="75" src="uploads/img_sp/<?= $img ?>" alt=""></td>
                <td><?= $name ?></td>
                <td><?= number_format($gia) ?> VND</td>
                <td><input type="number" min="1" value="<?= $soluong ?>" max="5"></td>
                <td><a href="?act=delete_cart&id=<?= $id ?>">Xóa</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
    <div class="table-right">
        <h3>Thông tin đặt hàng</h3>
            <div class="thongtin">
                <label for="name">Họ và Tên</label><br>
                <input class="ip-thanhtoan" type="text" name="name" id="name" placeholder="Tên người nhận">
            </div>
            <div class="thongtin">
                <label for="email">Email</label><br>
                <input class="ip-thanhtoan" type="text" name="email" id="email" placeholder="Email người nhận">
            </div>
            <div class="thongtin">
                <label for="sdt">Số điện thoại</label><br>
                <input class="ip-thanhtoan" type="number" name="sdt" id="sdt" placeholder="Số điện thoại ">
            </div>
            <div class="thongtin">
                <label for="diachi">Địa chỉ</label><br>
                <input class="ip-thanhtoan" type="text" name="diachi" id="diachi" placeholder="Địa chỉ">
            </div>
            <div class="thanhtoan-online">
                <p>Tổng số lượng: <span id="total-quantity">2</span></p>
                <p>Tổng tiền: <span id="total-price">1,950,000 VND</span></p>
                <img src="https://play-lh.googleusercontent.com/dQbjuW6Jrwzavx7UCwvGzA_sleZe3-Km1KISpMLGVf1Be5N6hN6-tdKxE5RDQvOiGRg" alt="thanh-toan-momo" width="40px">
                <input type="radio" name="thanhtoan" id="" value=""> Thanh toán bằng VN Pay <br>
                <img src="https://1office.vn/wp-content/uploads/2020/02/1564381662138-unnamed-1.jpg" alt="thanh-toan-momo" width="40px">
                <input type="radio" name="thanhtoan" id="" value=""> Thanh toán bằng Mono <br>
                <img src="https://play-lh.googleusercontent.com/NfFBz1Rxk0nQ7RsOk0kXbi1AEp1ZJ3rzJHbwRlmheZEDPPHh7dscqyxyX-ehxTl7tw" alt="thanh-toan-momo" width="40px">
                <input type="radio" name="thanhtoan" id="" value=""> Thanh toán bằng Mono <br>
                <button class="checkout-btn" name="thanhtoan" value="thanhtoan">Thanh Toán</button>
            </div>
    </div>
</div>
