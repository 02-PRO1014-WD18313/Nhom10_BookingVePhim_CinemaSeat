<?php
$stars = $sale = 0;
foreach ($loadone_sp as $value) {
    $sale = ($value['gia'] - $value['gia_new']) / $value['gia'] * 100;
}
foreach ($loadbl_sp as $value) {
    $stars += $value['star'] / count($loadbl_sp);
}
?>

<h6 class="path">
    <span><i class="fa-solid fa-house"></i>Home</span>
    <i style="font-size: 5px" class="fa-solid fa-circle"></i> Chi tiết
    sản phẩm
</h6>
<div class="box-ctsp">
    <div class="top">
        <div class="image">
            <div class="img-small">
                <p>
                    <img class="selected" src="uploads/img_sp/<?= $loadone_sp[0]['img'] ?>" alt="" onclick="showImage(this)" />
                </p>
                <p>
                    <img src="uploads/img_sp/<?= $loadone_sp[0]['img2'] ?>" alt="" onclick="showImage(this)" />
                </p>
                <p>
                    <img src="uploads/img_sp/<?= $loadone_sp[0]['img3'] ?>" alt="" onclick="showImage(this)" />
                </p>
            </div>
            <div class="img-big">
                <img src="./uploads/img_sp/<?= $loadone_sp[0]['img'] ?>" alt="" id="mainImage" />
            </div>
        </div>
        <div class="information">
            <h3 class="mb">
                <?= $loadone_sp[0]['name'] ?>
            </h3>
            <div class="Evaluate mb">
                <i class="fa-solid fa-star"></i><small><?= number_format($stars, 1) ?></small> |
                <span>4.5k <small>đã bán</small></span>
            </div>
            <div class="price mb">
                <p><span>₫<?= number_format($loadone_sp[0]['gia'], 0, ",", ".") ?></span><span>₫<?= number_format($loadone_sp[0]['gia_new'], 0, ",", ".") ?></span></p>
                <p><?= number_format(floor($sale)) ?>% GIẢM</p>
            </div>
            <div class="des-sort mb">
                <p>Mô tả:</p>
                <p>
                    <?= $loadone_sp[0]['mota'] ?>
                </p>
            </div>
            <div class="des-sort mb">
                <p>Xuất xứ:</p>
                <p>
                    <?= $loadone_sp[0]['xuatxu'] ?>
                </p>
            </div>
            <div class="des-sort mb">
                <p>Kiểu máy:</p>
                <p>
                    <?= $loadone_sp[0]['kieumay'] ?>
                </p>
            </div>
            <form action="?act=addtocart&idsp=<?= $loadone_sp[0]['id'] ?>" method="post">
                <div class="box-input mb">
                    Số lượng:
                    <input class="qtt" type="number" min="1" max="10" value="1" name="soluong" />
                    <span>&nbsp; &nbsp; <?= $loadone_sp[0]['soluong'] ?> sản phẩm có sẵn</span>
                </div>
                <div class="box-submit">
                    <button name="btn" value="btn" type="submit">THÊM VÀO GIỎ HÀNG</button>
                </div>
            </form>
            
            <div class="box-submit">
            <button><a href="?act=thanhtoan&idsp=<?= $loadone_sp[0]['id'] ?>">MUA NGAY</a></button>
            </div>
        </div>
    </div>
    <hr style="border: 1px solid #ccc" class="hr-ctsp mt" />
    <div class="bottom mt">
        <div class="box-Evaluate">
            <div class="Evaluate">
                <p id="bl">Phản hồi khách hàng</p>
                <p>
                    <span><?= number_format($stars, 1) ?></span>
                    <small><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></small>
                    <small>(<?= count($loadbl_sp) ?> đánh giá)</small>
                </p>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load("current", {
                        packages: ["corechart"]
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ["Element", "Density", {
                                role: "style"
                            }],
                            ["1 sao", 8.94, "#b87333"],
                            ["2 sao", 10.49, "silver"],
                            ["3 sao", 19.3, "gold"],
                            ["4 sao", 21.45, "color: #e5e4e2"],
                            ["5 sao", 21.45, "color: #e5e4e2"],
                        ]);

                        var view = new google.visualization.DataView(data);
                        view.setColumns([
                            0,
                            1,
                            {
                                calc: "stringify",
                                sourceColumn: 1,
                                type: "string",
                                role: "annotation",
                            },
                            2,
                        ]);

                        var options = {
                            title: "",
                            width: 570,
                            height: 290,
                            bar: {
                                groupWidth: "95%"
                            },
                            legend: {
                                position: "none"
                            },
                        };
                        var chart = new google.visualization.ColumnChart(
                            document.getElementById("columnchart_values")
                        );
                        chart.draw(view, options);
                    }
                </script>
                <div id="columnchart_values" style="width: 450px; height: 200px"></div>
            </div>

        </div>
        <div class="box-comment">
            <p id="bl">Bình luận</p>
            <div class="cmt">
                <?php
                foreach ($loadbl_sp as $value) {
                    extract($value) ?>

                    <div class="comment">
                        <div class="img"><img src="image/User-avatar.svg.png" alt=""></div>
                        <div class="content">
                            <p>
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $star) {
                                        echo '<i class="fa-solid fa-star"></i>';
                                    } else {
                                        echo '<i class="fa-regular fa-star"></i>';
                                    }
                                }
                                ?>
                            </p>
                            <p><span><?= $user ?> </span> . <span><?= date('d/m/Y', strtotime($date)) ?></span></p>
                            <p><?= $noidung ?>
                            </p>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <div class="box-splq">
        <h3>Sản phẩm liên quan</h3>
        <div class="block">
            <?php
            foreach ($load_sp_cl as $value) {
                extract($value); ?>
                <div class="item">
                    <a href="?act=ctsp&idsp=<?= $id ?>&iddm=<?= $iddm ?>">
                        <div class="img">
                            <p>
                                <img src="uploads/img_sp/<?= $img ?>" alt="" />
                            </p>
                        </div>
                        <div class="name"><?= $name ?></div>
                    </a>
                    <div class="price mb">
                        <p><?= number_format($gia) ?> ₫</p>
                        <p><?= number_format($gia_new) ?> ₫</p>
                    </div>
                    <div class="Evaluate mb">
                        <p>
                            <i class="fa-solid fa-star"></i> <span>(<?= number_format($avg_star, 1) ?>)</span> <br />
                            <span>Đã mua 4.5k</span>
                        </p>
                        <p><a href="?act=thanhtoan&idsp=<?= $id ?>"><button>Mua Ngay</button></a></p>
                    </div>
                </div>

            <?php }
            ?>
        </div>
    </div>
</div>
<script>
    function showImage(imgElement) {
        var mainImage = document.getElementById("mainImage");
        mainImage.src = imgElement.src;

        // Loại bỏ lớp 'selected' từ tất cả các ảnh nhỏ
        var smallImages = document.querySelectorAll('.img-small img');
        smallImages.forEach(img => img.classList.remove('selected'));

        // Thêm lớp 'selected' cho ảnh được chọn
        imgElement.classList.add('selected');
    }
</script>