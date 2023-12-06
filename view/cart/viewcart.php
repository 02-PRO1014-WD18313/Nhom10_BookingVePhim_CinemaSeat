<div class="container-table">
    <table class="table-left">
        <thead>
            <tr>
                <th>#</th>
                <th>Sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tong = 0;
            $money = 0;
            if (isset($_SESSION['count_cart']) && $_SESSION['count_cart'] > 0) {
                $i = 1;
                foreach ($loadAll_cart as $value) {
                    extract($value);
                    $money = $gia_new * $soluong;
            ?>
                    <tr>
                        <form action="?act=addtocart&idcart=<?= $idcart ?>" method="post">
                            <td><?= $i++ ?></td>
                            <td><img width="60" src="uploads/img_sp/<?= $img ?>" alt=""></td>
                            <td> <a href="?act=ctsp&idsp=<?= $id ?>"><?= $name ?> </a></td>
                            <td>₫<?= number_format($gia_new) ?> </td>
                            <td>
                                <div class="btn">
                                    <button class="decrement" name="btn_giam" value="btn_giam">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <input type="text" class="quantity" value="<?= $soluong ?>">
                                    <button class="increment" name="btn_tang" value="btn_tang">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="total">₫<span class="price"><?= number_format($money) ?></span></td>
                            <td>

                                <button onclick="return confirm('Bạn muốn xóa sản phẩm này ?')" type="submit" name="btn_delete" value="btn_delete"><i class="fa-solid fa-xmark"></i></button>

                            </td>
                        </form>
                    </tr>
                <?php

                    $tong += $money;
                }
            } else { ?>
                <td style="text-align: center; font-weight: bold" colspan="7">Không có sản phẩm trong giỏ hàng</td>
                </td>
            <?php  }
            ?>

        </tbody>
    </table>
    <?php
    if ($money == "0") { ?>

    <?php } else { ?>
        <div class="table-right">
            <div class="discount">
            <h3>TỔNG ĐƠN HÀNG</h3>
            </div>
            <div class="form-sum">
                <form action="" method="post">
                    <div class="total mt">
                        <p>Tổng phụ</p>
                        <p>₫<?= number_format($tong) ?></p>
                    </div>
                    <div class="total mt">

                    </div>
                    <hr>
                    <div class="total mt">
                        <p>Tổng cộng</p>
                        <p class="total-amount">₫<?= number_format($tong) ?></p>
                    </div>
                    <button><a href="?act=thanhtoan">Tiến hành thanh toán</a></button>
                </form>
            </div>
        </div>
    <?php }
    ?>

</div>