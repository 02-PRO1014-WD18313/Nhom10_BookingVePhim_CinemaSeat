<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Danh sách bình luận</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="fw-bold text-secondary">Tên người dùng</th>
                            <th class="fw-bold text-secondary">Nội dung</th>
                            <th class="fw-bold text-secondary">Tên sản phẩm</th>
                            <th class="fw-bold text-secondary">Hình ảnh</th>
                            <th class="fw-bold text-secondary">Giá</th>
                            <th class="fw-bold text-secondary">Ngày bình luận</th>
                            <th class="fw-bold text-secondary">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($load_bl_sp_admin as $value){?>
                        <tr>
                            <td><?= $value['user'] ?></td>
                            <td><?= $value['noidung'] ?></td>
                            <td><?= $value['name'] ?></td>
                            <td><img width="50px" src="../uploads/img_sp/<?= $value['img'] ?>" alt=""></td>
                            <td><?= $value['gia_new'] ?></td>
                            <td><?= date("d-m-Y", strtotime($value['date'])); ?></td>
                            <td>
                                <a type="button" class="btn btn-danger" href="?act=delete_bl&idbl=<?= $value['id']?>" onclick="return confirm('Bạn có muốn xóa <?= $value['name'] ?>')"><i class="fa-solid fa-trash-can"></i></a>
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