<section class="mb">
            <div class="banner">
                <img src="image/bg-04.webp" alt="" />
            </div>
            <h2 class="mt">Thương Hiệu Nổi Tiếng</h2>
            <div class="trademark">
                <?php
                foreach ($list_dm as $value) {
                    extract($value);
                ?>
                    <p><img class="firm" src="image/<?= $img ?>" alt="" /></p>
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
            <h5>Đang khuyến mại</h5>
            <p>Nam</p>
            <p>Nữ</p>
        </div>
        <div class="block mt">
            <?php
            foreach ($list_sp_home as $value) { extract($value); ?>
                <div class="item">
                    <div class="name"><?=$name?></div>
                    <div class="img">
                        <p>
                            <img src="image/dong-ho-citizen-em1074-82d_1680330969 1.png" alt="" />
                        </p>
                    </div>
                    <div class="price">
                        <span><?=number_format($gia)?> VND</span><span><?=number_format($gia_new)?> VND</span>
                    </div>
                    <div class="Evaluate">
                        <p>
                            <i class="fa-solid fa-star"></i> <span>(4.5)</span> <br />
                            <span>Đã mua 4.5k</span>
                        </p>
                        <p><i class="fa-solid fa-cart-plus"></i></p>
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
            <div class="item">
                <div class="name">Biệt đội Marvel</div>
                <div class="img">
                    <p>
                        <img src="image/dong-ho-citizen-em1074-82d_1680330969 1.png" alt="" />
                    </p>
                </div>
                <div class="price">
                    <span>1.000.000 VND</span><span>500.000 VND</span>
                </div>
                <div class="Evaluate">
                    <p>
                        <i class="fa-solid fa-star"></i> <span>(4.5)</span> <br />
                        <span>Đã mua 4.5k</span>
                    </p>
                    <p><i class="fa-solid fa-cart-plus"></i></p>
                </div>
            </div>
            <div class="item">
                <div class="name">Biệt đội Marvel</div>
                <div class="img">
                    <p>
                        <img src="image/dong-ho-citizen-em1074-82d_1680330969 1.png" alt="" />
                    </p>
                </div>
                <div class="price">
                    <span>1.000.000 VND</span><span>500.000 VND</span>
                </div>
                <div class="Evaluate">
                    <p>
                        <i class="fa-solid fa-star"></i> <span>(4.5)</span> <br />
                        <span>Đã mua 4.5k</span>
                    </p>
                    <p><i class="fa-solid fa-cart-plus"></i></p>
                </div>
            </div>
            <div class="item">
                <div class="name">Biệt đội Marvel</div>
                <div class="img">
                    <p>
                        <img src="image/dong-ho-citizen-em1074-82d_1680330969 1.png" alt="" />
                    </p>
                </div>
                <div class="price">
                    <span>1.000.000 VND</span><span>500.000 VND</span>
                </div>
                <div class="Evaluate">
                    <p>
                        <i class="fa-solid fa-star"></i> <span>(4.5)</span> <br />
                        <span>Đã mua 4.5k</span>
                    </p>
                    <p><i class="fa-solid fa-cart-plus"></i></p>
                </div>
            </div>
            <div class="item">
                <div class="name">Biệt đội Marvel</div>
                <div class="img">
                    <p>
                        <img src="image/dong-ho-citizen-em1074-82d_1680330969 1.png" alt="" />
                    </p>
                </div>
                <div class="price">
                    <span>1.000.000 VND</span><span>500.000 VND</span>
                </div>
                <div class="Evaluate">
                    <p>
                        <i class="fa-solid fa-star"></i> <span>(4.5)</span> <br />
                        <span>Đã mua 4.5k</span>
                    </p>
                    <p><i class="fa-solid fa-cart-plus"></i></p>
                </div>
            </div>
        </div>
        <button class="more">Xem thêm</button>
    </div>
</main>