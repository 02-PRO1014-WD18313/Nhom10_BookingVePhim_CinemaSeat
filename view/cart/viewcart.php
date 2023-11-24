<div class="container-table">
    <table class="table-left">
        <thead>
            <tr>
                <th>#</th>
                <th>Sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($_SESSION['user'])) {
                $i = 1;
                foreach ($loadAll_cart as $value) {
                    extract($value);
                    $quantity = 1; // Initialize quantity to 1
            ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><img width="60" src="uploads/img_sp/<?= $img ?>" alt=""></td>
                        <td> <a href="?act=ctsp&idsp=<?= $id ?>"><?= $name ?> </a></td>
                        <td>₫<?= number_format($gia_new) ?> </td>
                        <td>
                            <div class="btn">
                                <button class="decrement">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <input type="text" class="quantity" value="<?= $soluong ?>">
                                <button class="increment">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </td>
                        <td class="total">₫<span class="price"><?= number_format($gia_new) ?></span></td>
                        <td><a href="?act=delete_cart&id=<?= $id ?>"><i class="fa-solid fa-xmark"></i></a></td>
                    </tr>
                <?php
                } ?>
            <?php } else { ?>
                <td style="text-align: center; font-weight: bold" colspan="6">Bạn cần đăng nhập để thực hiện thêm vào giỏ hàng</td>
            <?php } ?>
        </tbody>
    </table>
    <div class="table-right">
        <div class="discount">
            <input type="text" placeholder="Nhập mã giảm giá"><button>Áp dụng</button>
        </div>
        <div class="form-sum">
            <h3>TỔNG ĐƠN HÀNG</h3>
            <form action="" method="post">
                <div class="total mt">
                    <p>Tổng phụ</p>
                    <p>₫1.200.000</p>
                </div>
                <div class="total mt">
                    <p>Phí vận chuyển</p>
                    <p>₫10.000</p>
                </div>
                <hr>
                <div class="total mt">
                    <p>Tổng cộng</p>
                    <p>₫1.210.000</p>
                </div>
                <button>Tiến hành thanh toán</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
// Get all elements with class "btn"
        var btns = document.querySelectorAll('.btn');

        // Loop through each "btn" element
        btns.forEach(function(btn) {
            // Get the input and total elements related to the current "btn" element
            var input = btn.querySelector('.quantity');
            var total = btn.parentElement.nextElementSibling;

            // Get the initial quantity and price values
            var quantity = parseInt(input.value);
            var price = parseInt(total.querySelector('.price').textContent.replace(/\D/g, ''));

            // Add click event listener for decrement button
            btn.querySelector('.decrement').addEventListener('click', function() {
                if (quantity > 1) {
                    quantity--;
                    input.value = quantity;
                    total.textContent = '₫' + number_format(price * quantity);
                }
            });

            // Add click event listener for increment button
            btn.querySelector('.increment').addEventListener('click', function() {
                if (quantity < 10) { // Check if quantity is less than 10
                    quantity++;
                    input.value = quantity;
                    total.textContent = '₫' + number_format(price * quantity);
                }
            });

            // Add input event listener to update total when input value changes
            input.addEventListener('input', function() {
                quantity = parseInt(input.value);
                if (quantity > 10) {
                    quantity = 10; // Limit quantity to 10
                    input.value = quantity;
                }
                total.textContent = '₫' + number_format(price * quantity);
            });
        });

        // Function to format numbers as currency
        function number_format(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    });
</script>