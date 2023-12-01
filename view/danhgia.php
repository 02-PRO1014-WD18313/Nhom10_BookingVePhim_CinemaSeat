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
        <input type="text" id="demo" name="stars" hidden>
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
            <textarea name="noidung" id="" cols="70" rows="10" placeholder="Nhập nội dung đánh giá"></textarea>
        </p>
        <button name="submit" value="submit" type="submit">Gửi</button>
    </form>
</div>