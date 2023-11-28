<?php

if (is_array($loadone_sp)) {
    $link = "../uploads/img_sp/" . $loadone_sp[0]['img'];
    $link = "../uploads/img_sp/" . $loadone_sp[0]['img2'];
    $link = "../uploads/img_sp/" . $loadone_sp[0]['img3'];
}
?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Cập nhật sản phẩm</h6>
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
                        <select class="custom-select" name="xuatxu">
                            <?php foreach ($xuatxu as $value) { ?>
                                <option <?= $value == $loadone_sp[0]['xuatxu'] ? "selected" : "" ?> value="<?= $value ?>"><?= $value ?></option>
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
                                        <option <?= $value == $loadone_sp[0]['kieumay'] ? "selected" : "" ?> value="<?= $value ?>"><?= $value ?></option>
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
                            <textarea name="mota" class="form-control" id="validationTextarea" placeholder="Nhập mô tả" rows="3" required><?= $loadone_sp[0]['mota'] ?>"</textarea>
                            <div class="invalid-feedback">
                                Không được để trống.
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label font-weight-bold">Hình ảnh</label>
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <img width="70" src="../uploads/img_sp/<?= $loadone_sp[0]['img'] ?>" alt="">
                        </div>
                        <div class="col-md-10 mt-3">
                            <input name="img" type="file" class="custom-file-input" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <img width="70" src="../uploads/img_sp/<?= $loadone_sp[0]['img2'] ?>" alt="">
                        </div>
                        <div class="col-md-10 mt-3">
                            <input name="img2" type="file" class="custom-file-input" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <img width="70" src="../uploads/img_sp/<?= $loadone_sp[0]['img3'] ?>" alt="">
                        </div>
                        <div class="col-md-10 mt-3">
                            <input name="img3" type="file" class="custom-file-input" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <input class="btn btn-success " type="submit" name="submit" value="Thực hiện"></input>
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                    <a class="btn btn-primary" href="?act=list_sp" type="submit">Danh sách sản phẩm</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>