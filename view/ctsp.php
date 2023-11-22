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
                    <img src="image/dong-ho-citizen-em1074-82d_1680330969 1.png" alt="" />
                </p>
                <p>
                    <img src="image/dong-ho-citizen-em1074-82d_1680330969 1.png" alt="" />
                </p>
                <p>
                    <img src="image/dong-ho-citizen-em1074-82d_1680330969 1.png" alt="" />
                </p>
            </div>
            <div class="img-big">
                <img src="./uploads/img_sp/<?= $loadone_sp[0]['img']?>" alt="" />
            </div>
        </div>
        <div class="information">
            <h3 class="mb">
                <?= $loadone_sp[0]['name']?>
            </h3>
            <div class="Evaluate mb">
                <i class="fa-solid fa-star"></i><small>(4.5)</small> |
                <span>4.5k <small>đã bán</small></span>
            </div>
            <div class="price mb">
                <p><span>₫<?= $loadone_sp[0]['gia']?></span><span>₫<?= $loadone_sp[0]['gia_new']?></span></p>
                <p>50% GIẢM</p>
            </div>
            <div class="des-sort mb">
                <p>Mô tả:</p>
                <p>
                <?= $loadone_sp[0]['mota']?>
                </p>
            </div>
            <div class="des-sort mb">
                <p>Xuất xứ:</p>
                <p>
                <?= $loadone_sp[0]['xuatxu']?>
                </p>
            </div>
            <div class="des-sort mb">
                <p>Kiểu máy:</p>
                <p>
                <?= $loadone_sp[0]['kieumay']?>
                </p>
            </div>
            <div class="box-input mb">
                Số lượng:
                <input class="qtt" type="number" min="1" max="2" value="1" />
                <span>&nbsp; &nbsp; <?= $loadone_sp[0]['soluong']?> sản phẩm có sẵn</span>
            </div>
            <div class="box-submit">
                <button><a href="?act=addtocart&idsp=<?= $id ?>">THÊM VÀO GIỎ HÀNG</a></button><button>MUA NGAY</button>
            </div>
        </div>
    </div>
    <hr style="border: 1px solid #ccc" class="hr-ctsp mt" />
    <div class="bottom mt">
        <div class="box-Evaluate">
            <div class="Evaluate">
                <p>Phản hồi khách hàng</p>
                <p>
                    <span>4.5</span>
                    <small><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></small>
                    <small>(36 đánh giá)</small>
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
                            width: 480,
                            height: 200,
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
            <div class="box-comment">
                <p id="bl">Bình luận</p>
                <div class="comment">
                    <div class="img"><img src="image/avata_04.webp" alt=""></div>
                    <div class="content">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </p>
                        <p><span>Tien Dat </span> . <span>26/12/2022</span></p>
                        <p>Được thiết kế rất giống với chiếc Galaxy tab S6 có giá gần gấp đôi, với việc loại bỏ duy nhất.
                        </p>
                    </div>
                </div>
                <div class="comment">
                    <div class="img"><img src="image/avata_04.webp" alt=""></div>
                    <div class="content">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </p>
                        <p><span>Tien Dat </span> . <span>26/12/2022</span></p>
                        <p>Được thiết kế rất giống với chiếc Galaxy tab S6 có giá gần gấp đôi, với việc loại bỏ duy nhất.
                        </p>
                    </div>
                </div>
                <div class="comment">
                    <div class="img"><img src="image/avata_04.webp" alt=""></div>
                    <div class="content">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </p>
                        <p><span>Tien Dat </span> . <span>26/12/2022</span></p>
                        <p>Được thiết kế rất giống với chiếc Galaxy tab S6 có giá gần gấp đôi, với việc loại bỏ duy nhất.
                        </p>
                    </div>
                </div>
                <div class="comment">
                    <div class="img"><img src="image/avata_04.webp" alt=""></div>
                    <div class="content">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </p>
                        <p><span>Tien Dat </span> . <span>26/12/2022</span></p>
                        <p>Được thiết kế rất giống với chiếc Galaxy tab S6 có giá gần gấp đôi, với việc loại bỏ duy nhất.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-Evaluate">
            <form action="" method="post">
                <p>Đánh giá sản phẩm</p>
                <p>

                <div class="stars">
                    Đánh giá của bạn: &nbsp;
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <!-- <h1 id="demo"></h1> -->
                <input type="text" id="demo" name="stars">
                </p>
                <script>
                    const stars = document.querySelectorAll(".stars i");
                    stars.forEach((star, index1) => {
                        star.addEventListener("click", () => {
                            document.getElementById("demo").value = index1 + 1;
                            stars.forEach((star, index2) => {
                                index1 >= index2 ?
                                    star.classList.add("active") :
                                    star.classList.remove("active");
                            });
                        });
                    });
                </script>
                <p>
                    <textarea name="" id="" cols="70" rows="10" placeholder="Nhập nội dung đánh giá"></textarea>
                </p>
                <button>Gửi</button>
            </form>
        </div>
    </div>
    <div class="box-splq">
        <h3>Sản phẩm liên quan</h3>
        <div class="block">
            <div class="item">
                <div class="name">Galaxy tab S6</div>
                <div class="img">
                    <p>
                        <img src="image/dong-ho-citizen-em1074-82d_1680330969 1.png" alt="" />
                    </p>
                </div>
                <div class="price"><span>1.000.000 ₫</span><span>500.000 ₫</span></div>
                <div class="Evaluate">
                    <p>
                        <i class="fa-solid fa-star"></i> <span>(4.5)</span> <br />
                        <span>Đã mua 4.5k</span>
                    </p>
                    <p><i class="fa-solid fa-cart-plus"></i></p>
                </div>
            </div>
        </div>
    </div>
</div>