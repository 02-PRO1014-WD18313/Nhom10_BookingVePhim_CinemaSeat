<button id="scrollDownBtn" onclick="scrollToTop()">Scroll to Top</button>
<footer>
  <div class="footer">
    <div class="box-footer">
      <h6>GIỚI THIỆU</h6>
      <p>Về Chúng Tôi</p>
      <p>Thoả Thuận Sử Dụng</p>
      <p>Quy Chế Hoạt Động</p>
      <p>Chính Sách Bảo Mật</p>
    </div>
    <div class="box-footer">
      <h6>GIỚI THIỆU</h6>
      <p>Thể Loại Phim</p>
      <p>Bình Luận Phim</p>
      <p>Phim Hay Tháng</p>
    </div>
    <div class="box-footer">
      <h6>GIỚI THIỆU</h6>
      <p>Góp Ý</p>
      <p>Sale & Services</p>
      <p>Rạp / Giá Vé</p>
      <p>Tuyển Dụng</p>
      <p>FAQ</p>
    </div>
    <div class="box-footer">
      <p><img width="100" src="image/logo01.png" alt="" /></p>
      <p>
        <a href=""><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a><a href=""><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
        <a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
      </p>
      <p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8353521256154!2d105.72923707500071!3d21.03927298741787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345550b525aa03%3A0x3fdefc40f69a023a!2zQ2FvIMSR4bqzbmcgRlBUIFBo4buRIFRy4buLbmggVsSDbiBCw7QgLCBQaMaw4budbmcgUGjGsMahbmcgQ2FuaCAsIHF14bqtbiBU4burIExpw6pt!5e0!3m2!1svi!2s!4v1700224833094!5m2!1svi!2s" width="400" height="250" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </p>
    </div>
  </div>
  <hr class="hr-footer" />
  <h5>
    © Dự án được thực hiện bởi (Nguyễn Tiến Đạt, Trần Duy Khánh, Trần Đức
    Đại)
  </h5>
</footer>
</div>
</body>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  window.onscroll = function() {
    showScrollButton();
    toggleBottom();
};

function showScrollButton() {
    var scrollBtn = document.getElementById('scrollDownBtn');

    // Hiển thị nút khi cuộn xuống nửa trang
    if (document.body.scrollTop > window.innerHeight / 2 || document.documentElement.scrollTop > window.innerHeight / 2) {
        scrollBtn.style.display = 'block';
    } else {
        scrollBtn.style.display = 'none';
    }
}

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

function toggleSubMenu(element) {
    var submenu = element.querySelector(".submenu");
    submenu.classList.toggle("active");
    element.classList.toggle("active");
}

var prevScrollpos = window.pageYOffset;
function toggleBottom() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.querySelector(".bottom").style.display = "flex";
    } else {
        document.querySelector(".bottom").style.display = "none";
    }
    prevScrollpos = currentScrollPos;
};

</script>

</html>