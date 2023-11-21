<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Thông tin đơn hàng</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" action="?act=update_donhang&id=<?= $loadone_dh[0]['id'] ?>" novalidate enctype="multipart/form-data" method="POST">
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tên người nhận</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_dh[0]['ten_nhan'] ?>" name="name" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="validationCustomPass" class="form-label font-weight-bold">Số điện thoại</label>
                    <div class="row input-group has-validation m-0 p-0">
                        <input value="<?= $loadone_dh[0]['tel'] ?>" name="tel" type="text" class="form-control" id="validationCustomPass" aria-describedby="inputGroupPrepend" required><br>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Địa chỉ</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_dh[0]['address'] ?>" name="address" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="validationCustom04" class="form-label font-weight-bold">Trạng thái</label>
                    <select class="custom-select" name="trangthai">
                        <option <?= $loadone_dh[0]['trangthai'] === 1 ? "selected" : "" ?> value="1">Xác nhận</option>
                        <option <?= $loadone_dh[0]['trangthai'] === 0 ? "selected" : "" ?> value="0">Chưa xác nhận</option>
                    </select>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Xác nhận
                        </label>
                        <div class="invalid-feedback">
                            Bạn cần xác nhận trước khi thực hiện.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <input class="btn btn-success " type="submit" name="submit" value="Thực hiện"></input>
                    <a class="btn btn-primary" href="?act=list_dh" type="submit">Danh sách tài khoản</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>