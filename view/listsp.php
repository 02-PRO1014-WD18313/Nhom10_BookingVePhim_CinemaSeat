<main class="box-productt">
    <div class="filter">
        <form action="" method="post">
            <h4>Lọc giá</h4>
            <div class="filter-price">
                <input type="number" placeholder="0" name="min"> -> <input type="number" placeholder="3000000" name="max">
            </div>
            <h4>Kiểu máy</h4>
            <div style="overflow: auto; height: 213px;" class="filter-price">
                <input name="a" type="radio"> Hợp kim titan <br>
                <input name="a" type="radio"> Rác vàng <br>
                <input name="a" type="radio"> Đính kim cương <br>
                <input name="a" type="radio"> Bọc thép <br>
                <input name="a" type="radio"> Hợp kimradio titan <br>
                <input name="a" type="radio"> Rác vàng <br>
                <input name="a" type="radio"> Đính kim cương <br>
                <input name="a" type="radio"> Bọc thép <br>
                <input name="a" type="radio"> Hợp kim titan <br>
                <input name="a" type="radio"> Rác vàng <br>
                <input name="a" type="radio"> Đính kim cương <br>
                <input name="a" type="radio"> Bọc thép <br>
            </div>
            <button name="btn" value="btn">Lọc</button>
        </form>
    </div>
    <div class="box-sp">
        <form action="" method="post">
            <select name="filter_p" id="filter_price">
                <option hidden value="">Giá</option>
                <option value="Giảm dần">Giảm dần</option>
                <option value="Tăng dần">Tăng dần</option>
            </select>
            <button name="btn" value="btn">Lọc</button>
        </form>
        <div class="block mt listsp">
            <?php
            foreach ($listsp_dm as $value) {
                extract($value); ?>
                <a href="?act=ctsp&idsp=<?= $id ?>">
                    <div class="item">
                        <div class="name"><?= $name ?></div>
                        <div class="img">
                            <p>
                                <img src="uploads/img_sp/<?= $img ?>" alt="" />
                            </p>
                        </div>
                        <div class="price">
                            <span><?= number_format($gia) ?> VND</span><span><?= number_format($gia_new) ?> VND</span>
                        </div>
                        <div class="Evaluate">
                            <p>
                                <i class="fa-solid fa-star"></i> <span>(4.5)</span> <br />
                                <span>Đã mua 4.5k</span>
                            </p>
                            <p><i class="fa-solid fa-cart-plus"></i></p>
                        </div>
                    </div>
                </a>
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