<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="col-md-12 card shadow p-0">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Thông tin đơn hàng</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($loadone_ctdh as $key => $value) { ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value['name'] ?></td>
                            <td><img width="50" src="../uploads/img_sp/<?= $value['img'] ?>" alt=""></td>
                            <td><?= $value['soluong'] ?></td>
                            <td><?= number_format($value['gia_ban']) ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td class="text-right font-weight-bold h5 text-danger" colspan="4">Thành tiền:</td>
                        <td class=" font-weight-bold h5 text-danger">₫<?= number_format($value['thanhtien']) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12 card shadow my-2">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Thông tin người mua</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" action="?act=update_donhang&id=<?= $loadone_dh[0]['id'] ?>" novalidate enctype="multipart/form-data" method="POST">
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tên người nhận</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_dh[0]['nguoi_nhan'] ?>" name="name" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <label for="validationCustomPass" class="form-label font-weight-bold">Số điện thoại</label>
                    <div class="row input-group has-validation m-0 p-0">
                        <input value="<?= $loadone_dh[0]['tel'] ?>" name="tel" type="text" class="form-control" id="validationCustomPass" aria-describedby="inputGroupPrepend" required><br>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Địa chỉ</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_dh[0]['address'] ?>" name="address" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Ghi chú</label>
                    <div class="input-group has-validation">
                        <textarea name="ghichu" rows="1" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"><?= $loadone_dh[0]['ghi_chu'] ?></textarea>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="validationCustom04" class="form-label font-weight-bold">Trạng thái</label>
                    <?php
                    if ($loadone_dh[0]['trangthai'] == 4) { ?>
                        <select class="custom-select" name="trangthai" disabled>
                            <option value="">Đã hủy</option>
                        </select>
                    <?php } else { ?>
                        <select class="custom-select" name="trangthai">
                            <option <?= $loadone_dh[0]['trangthai'] === 0 ? "selected" : "" ?> value="0">Chờ xác nhận</option>
                            <option <?= $loadone_dh[0]['trangthai'] === 1 ? "selected" : "" ?> value="1">Đã xác nhận</option>
                            <option <?= $loadone_dh[0]['trangthai'] === 2 ? "selected" : "" ?> value="2">Đang giao hàng</option>
                            <option <?= $loadone_dh[0]['trangthai'] === 3 ? "selected" : "" ?> value="3">Giao hàng thành công</option>
                        </select>
                    <?php }
                    ?>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-12">
                    <input class="btn btn-success " type="submit" name="submit" value="Thực hiện"></input>
                    <a class="btn btn-primary" href="?act=list_donhang" type="submit">Danh sách đơn hàng</a>
                </div>
            </form>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>