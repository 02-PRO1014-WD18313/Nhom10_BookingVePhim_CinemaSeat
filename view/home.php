<section class="mb">
    <div class="banner">
        <img src="image/bg-04.webp" alt="" />
    </div>
    <h2 class="mt-3">Thương Hiệu Nổi Bật</h2>
    <div class="trademark">
        <?php
        foreach ($list_dm as $value) {
            extract($value);
        ?>
            <p><a href="?act=listsp&iddm=<?= $id ?>"><img class="firm" src="uploads/img_dm/<?= $img ?>" alt="" /></a></p>
        <?php
        }
        ?>
    </div>
</section>
<aside>
    <div class="right-now">
        <img width="680" src="image/banner-bst.png" alt="" />
        <button>Right now</button>
    </div>
    <div class="right-now">
        <img width="680" src="image/banner-bst.png" alt="" />
        <button>Right now</button>
    </div>
</aside>
<main>
    <div class="box-product">
        <div class="title">
            <h5>Sản phẩm chính</h5>
        </div>
        <div class="block mt">
            <?php
            foreach ($loadstar as $value) {
                extract($value); ?>

                <div class="item">
                    <a href="?act=ctsp&idsp=<?= $id ?>">
                        <div class="img">
                            <img src="uploads/img_sp/<?= $img ?>" alt="" />
                        </div>
                    </a>
                    <div class="name"><?= $name ?></div>
                    <div class="price">
                        <p><?= number_format($gia) ?> ₫</p>
                        <p><?= number_format($gia_new) ?> ₫</p>
                    </div>
                    <div class="Evaluate">
                        <p>
                            <i class="fa-solid fa-star"></i> <span>(<?= number_format($avg_star, 1) ?>)</span> <br />
                            <span>Đã mua 4.5k</span>
                        </p>

                        <form action="?act=addtocart&idsp=<?= $id ?>" method="post">
                            <p>
                                <button type="submit" name="btn" value="btn"><i class="fa-solid fa-cart-plus"></i></button>
                            </p>
                        </form>

                    </div>
                </div>

            <?php }
            ?>

        </div>
        <button class="more">Xem thêm</button>
    </div>
    <div class="box-product">
        <div class="title">
            <h5>Hàng bán chạy</h5>
        </div>
        <div class="block mt">
            <?php
            foreach ($loadstar as $value) {
                extract($value); ?>

                <div class="item">
                    <a href="?act=ctsp&idsp=<?= $id ?>">
                        <div class="img">
                            <img src="uploads/img_sp/<?= $img ?>" alt="" />
                        </div>
                    </a>
                    <div class="name"><?= $name ?></div>
                    <div class="price">
                        <p><?= number_format($gia) ?> ₫</p>
                        <p><?= number_format($gia_new) ?> ₫</p>
                    </div>
                    <div class="Evaluate">
                        <p>
                            <i class="fa-solid fa-star"></i> <span>(<?= number_format($avg_star, 1) ?>)</span> <br />
                            <span>Đã mua 4.5k</span>
                        </p>

                        <form action="?act=addtocart&idsp=<?= $id ?>" method="post">
                            <p>
                                <button type="submit" name="btn" value="btn"><i class="fa-solid fa-cart-plus"></i></button>
                            </p>
                        </form>

                    </div>
                </div>

            <?php }
            ?>

        </div>
        <button class="more">Xem thêm</button>
    </div>
</main>