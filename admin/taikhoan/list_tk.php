<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Danh sách tài khoản</h6>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="fw-bold text-secondary">Tên tài khoản</th>
                            <th class="fw-bold text-secondary">Email</th>
                            <th class="fw-bold text-secondary">Số điện thoại</th>
                            <th class="fw-bold text-secondary">Địa chỉ</th>
                            <th class="fw-bold text-secondary">Phân quyền</th>
                            <th class="fw-bold text-secondary">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_tk as $value) {?>
                        <tr>
                            <td><?= $value['user']?></td>
                            <td><?= $value['email']?></td>
                            <td><?= $value['tel']?></td>
                            <td><?= $value['address']?></td>
                            <td>
                                <?php
                                    if($value['role'] == 0){
                                        echo "Người dùng";
                                    }else if($value['role'] == 1){
                                        echo "Quản trị viên";
                                    }
                                ?>
                            </td>
                            <td>
                                <a type="button" class="btn btn-warning" href="?act=update_tk&id=<?= $value['id']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a type="button" class="btn btn-danger" href="?act=delete_tk&id=<?= $value['id']?>"><i class="fa-solid fa-trash-can"></i></a>
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