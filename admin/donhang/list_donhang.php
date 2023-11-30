<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Danh sách đơn hàng</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="fw-bold text-secondary">STT</th>
                            <th class="fw-bold text-secondary">Tên người nhận</th>
                            <th class="fw-bold text-secondary">Số điện thoại</th>
                            <th class="fw-bold text-secondary">Địa chỉ</th>
                            <th class="fw-bold text-secondary">Ghi chú</th>
                            <th class="fw-bold text-secondary">Trạng thái</th>
                            <th class="fw-bold text-secondary">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_donhang as $key => $value) { ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value['nguoi_nhan'] ?></td>
                                <td><?= $value['tel'] ?></td>
                                <td><?= $value['address'] ?></td>
                                <td>
                                    <?php
                                    if ($value['ghi_chu'] != null) {
                                        echo $value['ghi_chu'];
                                    } else {
                                        echo '...';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($value['trangthai'] == 0) {
                                        echo '<span class="badge bg-danger text-white">Chờ xác nhận</span>';
                                    } else if ($value['trangthai'] == 1) {
                                        echo '<span class="badge bg-primary text-white">Đã xác nhận</span>';
                                    } else if ($value['trangthai'] == 2) {
                                        echo '<span class="badge bg-warning text-white">Đang giao hàng</span>';
                                    } elseif ($value['trangthai'] == 3) {
                                        echo '<span class="badge bg-success text-white">Giao hàng thành công</span>';
                                    } else {
                                        echo '<span class="badge text-secondary text-white">Đã hủy</span>';
                                    } ?>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-info" href="?act=update_donhang&id=<?= $value['id'] ?>"><i class="fa-solid fa-eye"></i></a>
                                    <a type="button" class="btn btn-danger" href=""><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>