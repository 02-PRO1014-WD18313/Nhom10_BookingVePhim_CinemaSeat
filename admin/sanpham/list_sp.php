<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Danh sách danh mục</h6>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Hình web</th>
                            <th>Giá</th>
                            <th>Giá Sale</th>
                            <th>Mô tả</th>
                            <th>Số lượng</th>
                            <th>Xuất xứ</th>
                            <th>Kiểu máy</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list_sp as $value) {?>
                        <tr>
                            <td><?= $value['name']?></td>
                            <td><img width="100" src="../uploads/img_sp/<?= $value['anh']?>" alt=""></td>
                            <td><?= $value['gia']?></td>
                            <td><?= $value['gia_new']?></td>
                            <td width="300"><?= $value['mota'] ?></td>
                            <td><?= $value['soluong']?></td>
                            <td><?= $value['xuatxu']?></td>
                            <td><?= $value['kieumay']?></td>
                            <td>
                                <a type="button" class="btn btn-warning" href="?act=update_sp?id=<?= $value['id']?>">Sửa</a>
                                <a type="button" class="btn btn-danger" href="?act=delete_spid=<?= $value['id']?>">Xóa</a>
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