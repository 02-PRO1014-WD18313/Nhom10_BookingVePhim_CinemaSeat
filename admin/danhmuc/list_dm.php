<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Danh sách danh mục</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead >
                        <tr>
                            <th class="fw-bold text-secondary">Số thứ tự</th>
                            <th class="fw-bold text-secondary">Tên danh mục</th>
                            <th class="fw-bold text-secondary">Hình ảnh</th>
                            <th class="fw-bold text-secondary">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list_dm as $key=>$value){?>
                        <tr>
                            <td><?= $key + 1?></td>
                            <td><?= $value['name']?></td>
                            <td>
                                <img width="100px" height="50px" src="../uploads/image_dm/<?= $value['img']?>" alt="123">
                            </td>
                            <td>
                                <a type="button" class="btn btn-warning" href="?act=update_dm">Sửa</a>
                                <a type="button" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>