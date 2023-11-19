<?php

if (is_array($loadone_sp)) {
    $link = "../uploads/img_dm/".$loadone_sp[0]['img'];
}
?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Thêm sản phẩm</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" action="?act=update_sp&id=<?= $loadone_sp[0]['id'] ?>" novalidate enctype="multipart/form-data" method="POST">
                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tên sản phẩm</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_sp[0]['name'] ?>" name="name" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Danh mục</label>
                    <select class="custom-select" name="iddm">
                        <?php foreach ($list_dm as $value) { ?>
                            <option <?= $value['id'] == $loadone_sp[0]['iddm'] ? "selected" : "" ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Giá sản phẩm</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_sp[0]['gia'] ?>" name="gia" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Giá Sale</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_sp[0]['gia_new'] ?>" name="gia_new" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Số lượng</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_sp[0]['soluong'] ?>" name="soluong" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Xuất xứ</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_sp[0]['xuatxu'] ?>" name="xuatxu" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04" class="form-label font-weight-bold">Kiểu máy</label>
                    <div class="input-group has-validation">
                        <input value="<?= $loadone_sp[0]['kieumay'] ?>" name="kieumay" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống.
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        Không được để trống.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03" class="form-label font-weight-bold">Hình ảnh</label>
                    <div class="col-md-12">
                        <img src="../uploads/img_dm/<?= $loadone_sp[0]['img'] ?>" alt="">
                        <input name="img" type="file" class="custom-file-input" id="validatedCustomFile">
                        <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>  
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label  for="validationTextarea" class="form-label font-weight-bold">Mô tả</label>
                    <textarea name="mota" class="form-control" id="validationTextarea" placeholder="Nhập mô tả" rows="5" required><?= $loadone_sp[0]['mota'] ?>"</textarea>
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
                    <input class="btn btn-success " type="submit" name="submit" value="Thực hiện"></input>
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                    <a class="btn btn-primary" href="?act=list_sp" type="submit">Danh sách danh mục</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>