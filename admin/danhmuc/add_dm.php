<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fs-5 h5 text-dark font-weight-bold">Thêm danh mục </h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" novalidate enctype="multipart/form-data" action="?act=add_dm" method="post">
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tên danh mục</label>
                    <div class="input-group has-validation">
                        <input name="name" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomFile" class="form-label font-weight-bold">Hình ảnh</label>
                    <div class="custom-file mb-3">
                        <input name="img" type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                        <div class="invalid-feedback">
                            Không được để trống
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-1">
                    <input class="btn btn-success " type="submit" name="submit" value="Thực hiện"></input>
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                    <a class="btn btn-primary" href="?act=list_dm" type="submit">Danh sách danh mục</a>
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