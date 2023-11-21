<main class="box-product">
    <div class="filter">
    </div>
    <div class="box-sp">
        <form action="?act=listsp" method="post">
            <select name="filter_price" id="filter_price" onchange="redirectToPage()">
                <option hidden value="">Giá</option>
                <option value="300-500">300 - 500</option>
                <option value="500-1tr">500 - 1tr</option>
                <option value="1tr-3tr">1tr - 3tr</option>
                <option value="3tr-5tr">3tr - 5tr</option>
            </select>
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
<script>
    function redirectToPage() {
    // Chuyển hướng đến trang chủ
    window.location.href = "?act=listsp";
  }
</script>