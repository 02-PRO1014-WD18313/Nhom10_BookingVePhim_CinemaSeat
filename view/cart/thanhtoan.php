<div class="container-thanhtoan">
	<div class="box">
		<form action="" method="post">
			<div class="box-left">
				<h5>ĐỊA CHỈ THANH TOÁN</h5>
				<div class="box-ip">
					<div class="ip-left">
						<div class="ip">
							<label for="user">Tên người nhận</label> <br>
							<input class="" name="user" id="user" type="text" placeholder="Nguyễn Văn A" value="<?= $_SESSION['user'] ?>"><br>
							<span class="err" style='color:red; '><?= (isset($err['user'])) ? $err['user'] : '' ?></span>
						</div>
						<div class="ip">
							<label for="sdt">Số điện thoại</label><br>
							<input class="" name="sdt" id="sdt" type="number" placeholder="+84">
							<span class="err" style='color:red; '><?= (isset($err['sdt'])) ? $err['sdt'] : '' ?></span>
						</div>
					</div>
					<div class="ip-right">
						<div class="ip">
							<label for="name">Email</label><br>
							<input class="" type="text" name="email" placeholder="example@email.com" value="<?= $_SESSION['email'] ?>">
							<span class="err" style='color:red; '><?= (isset($err['email'])) ? $err['email'] : '' ?></span> <br>
						</div>
						<div class="ip">
							<label for="name">Địa chỉ</label><br>
							<input class="" type="text" name="address" placeholder="Địa chỉ ">
							<span class="err" style='color:red; '><?= (isset($err['address'])) ? $err['address'] : '' ?></span>
						</div>
					</div>
				</div>
				<div class="box-thanhtoan">
					<h5 class=""><span class="">THANH TOÁN</span></h5>
					<div class="box-thanhtoan-online">
						<div class="bta">
							<input type="radio" name="thanhtoan" id="thanhtoanon" value="Thanh toán online">
							<label for="thanhoanon">Thanh toán qua ví momo</label>
						</div>
						<div class="bta">
							<input type="radio" name="thanhtoan" id="thanhtoanoff" value="Thanh toán khi nhận hàng">
							<label for="thanhtoanoff">Thanh toán khi nhận hàng</label>
						</div>
						<?= (isset($error)) ? "<p class='err' style='color:red; margin-left: 10px'>$error</p>" : '' ?>
						<button class="bta" name="btn_thanhtoan" value="btn_thanhtoan">ĐẶT HÀNG</button>
					</div>
				</div>
			</div>
			<div class="box-right">
				<h5>TỔNG ĐƠN HÀNG</h5>
				<div class="box-tien">
					<h6 class="text-pro">Sản phẩm</h6>
					<?php
					$tong = 0;
					foreach ($loadAll_cart as $value) {
						$money = $value['gia_new'] * $value['soluong'];
					?>
						<div class="tien">
							<p class="tien-left"><?= $value['name'] ?> <small style="color: gray;">x<?= $value['soluong'] ?></small></p>
							<p>₫<?= number_format($money) ?></p>
						</div>
					<?php
						$tong += $money;
					}
					?>

					<div class="vocher">
						<div class="voch">
							<h6>Voucher</h6>
							<h6>₫500.000</h6>
						</div>
						<div class="voch">
							<h6 class="">Phí vận chuyển</h6>
							<h6 class="">₫30.000</h6>
						</div>
					</div>
					<div class="tienn">
						<h3>Tổng tiền: </h3>
						<h3>₫<?= number_format($tong + 30000) ?></h3>
						<input hidden name="thanhtien" type="text" value="<?= ($tong + 30000) ?>">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>