<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Thông tin tài khoản</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" action="?act=update_tk&id=<?= $loadone_tk[0]['id'] ?>" novalidate enctype="multipart/form-data" method="POST">
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tên tài khoản</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_tk[0]['user'] ?>" name="user" readonly type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="validationCustomPass" class="form-label font-weight-bold">Mật khẩu</label>
                    <div class="row input-group has-validation m-0 p-0">
                        <input value="<?= $loadone_tk[0]['pass'] ?>" name="pass" readonly type="password" class="form-control" id="validationCustomPass" aria-describedby="inputGroupPrepend" required><br>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                    <div class="row m-0 p-0 mt-1">
                        <input type="checkbox" onclick="showPassword()"> Hiển thị mật khẩu
                    </div>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Email</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_tk[0]['email'] ?>" name="email" readonly type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Số điện thoại</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_tk[0]['tel'] ?>" name="tel" readonly type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Địa chỉ</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_tk[0]['address'] ?>" name="address" readonly type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="validationCustom04" class="form-label font-weight-bold">Phân quyền</label>
                    <select class="custom-select" name="role">
                        <option <?= $loadone_tk[0]['role'] === 1 ? "selected" : "" ?> value="1">Quản trị viên</option>
                        <option <?= $loadone_tk[0]['role'] === 0 ? "selected" : "" ?> value="0">Người dùng</option>
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
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                    <a class="btn btn-primary" href="?act=list_tk" type="submit">Danh sách tài khoản</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>