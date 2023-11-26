<?php

if (is_array($loadone_dm)) {
    $link = "../uploads/img_dm/".$loadone_dm[0]['img'];
}
?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fs-5 h5 text-dark font-weight-bold">Cập nhật danh mục</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" action="?act=update_dm&id=<?= $loadone_dm[0]['id'] ?>" novalidate enctype="multipart/form-data" method="POST">
                <div class="col-md-5" hidden>
                    <label for="validationCustomUsername" class="form-label font-weight-bold">ID</label>
                    <div class="input-group has-validation">
                        <input type="text" name="id" class="form-control" value="<?= $loadone_dm[0]['id'] ?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tên danh mục</label>
                    <div class="input-group has-validation">
                        <input type="text" name="name" class="form-control" value="<?= $loadone_dm[0]['name'] ?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Hình ảnh</label>
                    <div class="card">
                        <img src="../uploads/img_dm/<?= $loadone_dm[0]['img'] ?>" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tải lên</label>
                    <div class="custom-file mb-3">
                        <input type="file" name="img" class="custom-file-input">
                        <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                    </div>
                </div>  
                <div class="col-12">
                    <input class="btn btn-success " type="submit" name="submit" value="Thực hiện"></input>
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                    <a class="btn btn-primary" href="?act=list_dm" type="submit">Danh sách danh mục</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>