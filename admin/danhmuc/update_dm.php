<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fs-5 h5 text-dark font-weight-bold">Cập nhật danh mục</h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Tên danh mục</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label font-weight-bold">Hình ảnh</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Chọn tệp...</label>
                        <div class="invalid-feedback">
                            Không được để trống
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Xác nhận
                        </label>
                        <div class="invalid-feedback">
                            Bạn cần xác nhận trước khi thực hiện
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-success " type="submit" name="submit">Cập nhật</button>
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                    <a class="btn btn-primary" href="?act=list_dm" type="submit">Danh sách danh mục</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>