<p class="result">
    <?php
    $i = 0;
    foreach ($listsp_dm as $value) {
        $i++;
    }
    if (isset($_SESSION['key'])) { ?>
        Kết quả tìm kiếm từ khóa "<?= $_SESSION['key'] ?>" <?= ($i++) ?> sản phẩm
    <?php }
    ?>
</p>

<main class="box-productt">
    <div class="filter">
        <p class="tieude">Sản Phẩm Được Đánh Giá Cao</p>
        <div class="pro_top">
            <div class="img_top"><img width="70" height="70" src="image/avata_04.webp" alt=""></div>
            <div class="titlee">
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <small>(4.5)</small></p>
                <p>Đồng hồ thông minh</p>
                <p>200.000 ₫</p>
            </div>
        </div>
        <div class="pro_top">
            <div class="img_top"><img width="70" height="70" src="image/avata_04.webp" alt=""></div>
            <div class="titlee">
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <small>(4.5)</small></p>
                <p>Đồng hồ thông minh</p>
                <p>200.000 ₫</p>
            </div>
        </div>
        <div class="pro_top">
            <div class="img_top"><img width="70" height="70" src="image/avata_04.webp" alt=""></div>
            <div class="titlee">
                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <small>(4.5)</small></p>
                <p>Đồng hồ thông minh đẹp </p>
                <p>200.000 ₫</p>
            </div>
        </div>
        <p style="margin-top: 40px;" class="tieude">Thương Hiệu Nổi Tiếng</p>
        <div class="trademark_top">
            <img width="110" src="uploads/img_dm/1700298355_casio.jpeg" alt="">
            <img width="110" src="uploads/img_dm/1700298369_Orient.jpeg" alt="">
            <img width="110" src="uploads/img_dm/1700298381_Citizen.jpeg" alt="">
            <img width="110" src="uploads/img_dm/1700298391_Seiko.jpeg" alt="">
            <img width="110" src="uploads/img_dm/1700299147_Tissot.jpeg" alt="">
            <img width="110" src="uploads/img_dm/1700299572_Longines.jpeg" alt="">
        </div>
    </div>
    <div class="box-sp">
        <form action="" method="post">
            <div class="div">
                <i class="fa-solid fa-filter"></i> Bộ lọc
            </div>
            <div class="div">
                <select name="gia" id="">
                    <option hidden value="">Giá</option>
                    <option value="500000 AND 1000000">5 trăm - 1 triệu</option>
                    <option value="1000000 AND 2000000">1 - 2 triệu</option>
                    <option value="2000000 AND 3000000">2 - 3 triệu</option>
                </select>
            </div>
            <div class="div">
                <select name="kieumay" id="">
                    <option value="" hidden>Kiểu máy</option>
                    <option value="Cơ/Automatic">Cơ/Automatic</option>
                    <option value="Pin/ Quazt">Pin/ Quazt</option>
                </select>
            </div>
            <div class="div">
                <select name="xuatxu" id="">
                    <option value="" hidden>Xuất xứ</option>
                    <option value="Nhật Bản">Nhật Bản</option>
                    <option value="Hàn Quốc">Hàn Quốc</option>
                    <option value="Thụy Sỹ">Thụy Sỹ</option>
                </select>
            </div>
            <button name="submit" type="submit" value="submit">Lọc</button>
        </form>
        <div class="block mt listsp">
            <?php
            foreach ($listsp_dm as $value) {
                extract($value); ?>
                <div class="item">
                    <a href="?act=ctsp&idsp=<?= $id ?>">
                        <div class="img">
                            <p>
                                <img src="uploads/img_sp/<?= $img ?>" alt="" />
                            </p>
                        </div>
                        <div class="name"><?= $name ?></div>
                    </a>
                    <div class="price">
                        <p><?= number_format($gia) ?> ₫</p>
                        <p><?= number_format($gia_new) ?> ₫</p>
                    </div>
                    <div class="Evaluate">
                        <p>
                            <i class="fa-solid fa-star"></i> <span>(4.5)</span> <br />
                            <span>Đã mua 4.5k</span>
                        </p>
                        <p><a style="color: red;" href=""><button>Mua Ngay</button></a></p>
                    </div>
                </div>

            <?php }
            ?>

        </div>
    </div>
</main>
<!-- <script>
    function redirectToPage() {
    // Chuyển hướng đến trang chủ
    window.location.href = "?act=listsp";
  }
</script> -->