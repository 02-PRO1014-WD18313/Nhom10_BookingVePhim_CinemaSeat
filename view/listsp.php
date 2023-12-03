<?php
include "global.php";
?>
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
        <?php
        foreach ($load_sp_star as $star) {
             ?>
            <a href="?act=ctsp&idsp=<?= $star['id'] ?> &iddm=<?= $star['iddm'] ?>">
                <div class="pro_top">
                    <div class="img_top"><img width="70" height="70" src="uploads/img_sp/<?= $star['img'] ?>" alt=""></div>
                    <div class="titlee">
                        <p><i class="fa-solid fa-star"></i><small>(<?= number_format($star['avg_star'], 1) ?>)</small></p>
                        <p><?= $star['name'] ?></p>
                        <p><?= number_format($star['gia_new'], 0, ",", ".") ?> ₫</p>
                    </div>

                </div>
            </a>
        <?php }
        ?>

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
                    <option value="500000 AND 2000000">5 trăm - 2 triệu</option>
                    <option value="2000000 AND 5000000">2 - 5 triệu</option>
                    <option value="5000000 AND 10000000">5 - 10 triệu</option>
                    <option value="10000000 AND 20000000">Trên 10 triệu</option>
                </select>
            </div>
            <div class="div">
                <select name="kieumay" id="">
                    <option value="" hidden>Kiểu máy</option>
                    <?php foreach ($kieumay as $value) { ?>
                        <option value="<?= $value ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="div">
                <select name="xuatxu" id="">
                    <option value="" hidden>Xuất xứ</option>
                    <?php foreach ($xuatxu as $value) { ?>
                        <option value="<?= $value ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
            </div>
            <button name="submit" type="submit" value="submit">Lọc</button>
        </form>
        <div class="block mt listsp">
            <?php
            foreach ($listsp_dm as $value) {
                 ?>
                <div class="item">
                    <a href="?act=ctsp&idsp=<?= $value['id'] ?>&iddm=<?= $value['iddm'] ?>">
                        <div class="img">
                            <p>
                                <img src="uploads/img_sp/<?= $value['img'] ?>" alt="" />
                            </p>
                        </div>
                        <div class="name"><?= $value['name'] ?></div>
                    </a>
                    <div class="price">
                        <p><?= number_format($value['gia'], 0, ",", ".") ?> ₫</p>
                        <p><?= number_format($value['gia_new'], 0, ",", ".") ?> ₫</p>
                    </div>
                    <div class="Evaluate">
                        <p>
                            <i class="fa-solid fa-star"></i> <span>(<?= number_format($value['avg_star'], 1) ?>)</span> <br />
                            <!-- <span>Đã mua 4.5k</span> -->
                        </p>
                        <p><a href="?act=thanhtoan&idsp=<?= $value['id'] ?>"><button>Mua Ngay</button></a></p>
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