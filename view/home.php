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
            foreach ($list_sp_home as $value) {
                extract($value); ?>

                <div class="item">
                    <a href="?act=ctsp&idsp=<?= $id ?>">
                        <div class="img">                          
                                <img src="uploads/img_sp/<?= $img ?>" alt="" />                         
                        </div>
                    </a>
                    <div class="name"><?= $name ?></div>
                    <div class="price">
                       <p><?= number_format($gia_new) ?> ₫</p> <p><?= number_format($gia) ?> ₫</p>
                    </div>
                    <div class="Evaluate">
                        <p>
                            <i class="fa-solid fa-star"></i> <span>(4.5)</span> <br />
                            <span>Đã mua 4.5k</span>
                        </p>
                        <p><a style="color: white;" href="?act=addtocart&idsp=<?= $id ?>"><i class="fa-solid fa-cart-plus"></i></a></p>
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
            foreach ($list_sp_home as $value) {
                extract($value); ?>
                <div class="item">
                    <div class="name"><?= $name ?></div>
                    <div class="img">
                        <p>
                            <img src="uploads/img_sp/<?= $img ?>" alt="" />
                        </p>
                    </div>
                    <div class="price">
                        <span><?= number_format($gia) ?> ₫</span><span><?= number_format($gia_new) ?> ₫</span>
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
            <h5>Review & Bài viết</h5>
        </div>
        <div class="block mt">
            <div class="video-review">
                <iframe width="700" height="395" src="https://www.youtube.com/embed/zlhVtQrmZW8?si=WY8Yg1yIdsgAkL3F" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="box-posts">
                <div class="post">
                    <img src="image/avata_04.webp" alt="" />
                    <p>Những xu hướng đồng hồ nữ hot nhất năm nay</p>
                </div>
                <div class="post">
                    <img src="image/avata_04.webp" alt="" />
                    <p>Những xu hướng đồng hồ nữ hot nhất năm nay</p>
                </div>
                <div class="post">
                    <img src="image/avata_04.webp" alt="" />
                    <p>Đồng hồ thông minh và ứng dụng không ngừng mở rộng của</p>
                </div>
            </div>
        </div>
    </div>
</main>