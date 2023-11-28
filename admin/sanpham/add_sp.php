<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Thêm sản phẩm</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" novalidate enctype="multipart/form-data" method="POST">
                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tên sản phẩm</label>
                    <div class="input-group has-validation">
                        <input name="name" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Danh mục</label>
                    <select class="custom-select" name="iddm">
                        <?php foreach ($list_dm as $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                        <?php } ?>

                    </select>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Giá sản phẩm</label>
                    <div class="input-group has-validation">
                        <input name="gia" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Giá Sale</label>
                    <div class="input-group has-validation">
                        <input name="gia_new" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Số lượng</label>
                    <div class="input-group has-validation">
                        <input name="soluong" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Xuất xứ</label>
                    <div class="input-group has-validation">
                        <select class="custom-select" name="xuatxu">
                            <?php foreach ($xuatxu as $value) { ?>
                                <option value="<?= $value ?>"><?= $value ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom04" class="form-label font-weight-bold">Kiểu máy</label>
                            <div class="input-group has-validation">
                                <select class="custom-select" name="kieumay">
                                    <?php foreach ($kieumay as $value) { ?>
                                        <option value="<?= $value ?>"><?= $value ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="invalid-feedback">
                                Không được để trống.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationTextarea" class="form-label font-weight-bold">Mô tả</label>
                            <textarea name="mota" class="form-control" id="validationTextarea" placeholder="Nhập mô tả" rows="3" required></textarea>
                            <div class="invalid-feedback">
                                Không được để trống.
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label font-weight-bold">Hình ảnh</label>
                    <div class="col-md-12">
                        <input name="img" type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                        <div class="invalid-feedback">Không được để trống.</div>
                    </div>
                    <div class="col-md-12 my-1">
                        <input name="img2" type="file" class="custom-file-input" id="validatedCustomFile2" required>
                        <label class="custom-file-label" for="validatedCustomFile2">Chọn tệp...</label>
                        <div class="invalid-feedback">Không được để trống.</div>
                    </div>
                    <div class="col-md-12">
                        <input name="img3" type="file" class="custom-file-input" id="validatedCustomFile3" required>
                        <label class="custom-file-label" for="validatedCustomFile3">Chọn tệp...</label>
                        <div class="invalid-feedback">Không được để trống.</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <input class="btn btn-success " type="submit" name="submit" value="Thực hiện"></input>
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                    <a class="btn btn-primary" href="?act=list_sp" type="submit">Danh sách sản phẩm</a>
                </div>
                <div class="col-12">
                    <div class="mt-4">
                        <?php
                        if (isset($thongbao) && $thongbao != "") {
                            echo "<p style='color: green;'>$thongbao</p>";
                        }
                        if (isset($err) && $err != "") {
                            echo "<p style='color: red;'>$err</p>";
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>