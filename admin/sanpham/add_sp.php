<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Thêm sản phẩm</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tên sản phẩm</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Giá sản phẩm</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Số lượng</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Danh mục</label>
                    <select class="custom-select">
                        <?php foreach ($list_dm as $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                        <?php } ?>

                    </select>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Xuất xứ</label>
                    <select class="custom-select">
                        <?php foreach ($list_xuatxu as $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['thongso'] ?></option>
                        <?php } ?>
                    </select>
                    </select>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Kiểu máy</label>
                    <select class="custom-select">
                        <?php foreach ($list_kieumay as $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['thongso'] ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Chất liệu vỏ</label>
                    <select class="custom-select">
                        <?php foreach ($list_cl_vo as $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['thongso'] ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Chất liệu dây</label>
                    <select class="custom-select">
                        <?php foreach ($list_cl_day as $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['thongso'] ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Chống nước</label>
                    <select class="custom-select">
                        <?php foreach ($list_chongnuoc as $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['thongso'] ?> m</option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom03" class="form-label font-weight-bold">Hình ảnh</label>
                    <div class="col-md-12">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                        <div class="invalid-feedback">Không được để trống.</div>
                    </div>
                    <div class="col-md-12 my-2">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                        <div class="invalid-feedback">Không được để trống.</div>
                    </div>
                    <div class="col-md-12">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                        <div class="invalid-feedback">Không được để trống.</div>
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="validationTextarea" class="form-label font-weight-bold">Mô tả</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="Nhập mô tả" rows="5" required></textarea>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-12 mb-3">
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
                    <button class="btn btn-success " type="submit" name="submit">Thực hiện</button>
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                    <a class="btn btn-primary" href="?act=list_dm" type="submit">Danh sách danh mục</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>