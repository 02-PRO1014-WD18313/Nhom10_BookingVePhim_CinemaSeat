<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Danh sách sản phẩm</h6>
        </div>
        <div class="card-body">
            <a class="btn btn-success mb-3" href="?act=add_sp">Thêm mới</a>
            <a class="btn btn-Secondary mb-3" href="?act=trash"><i class="fa-solid fa-trash"></i>(<?=count($loadAll_sanpham_trang_thai_1)?>)</a>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Hình web</th>
                            <th>Giá</th>
                            <th>Giá Sale</th>
                            <th>Số lượng</th>
                            <th>Xuất xứ</th>
                            <th>Kiểu máy</th>
                            <th>Mô tả</th>
                            <th width="100">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list_sp as $value) {?>
                        <tr>
                            <td><?= $value['name']?></td>
                            <td><img width="100" src="../uploads/img_sp/<?= $value['img']?>" alt=""></td>
                            <td><?= $value['gia']?></td>
                            <td><?= $value['gia_new']?></td>
                            <td><?= $value['soluong']?></td>
                            <td><?= $value['xuatxu']?></td>
                            <td><?= $value['kieumay']?></td>
                            <td width="300"><?= $value['mota'] ?></td>
                            <td>
                                <a type="submit" class="btn btn-warning" href="?act=update_sp&id=<?= $value['id']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return confirm('Bạn có muốn xóa <?= $value['name']?> không?')" type="button" class="btn btn-danger" href="?act=delete_sp&id=<?= $value['id']?>"><i class="fa-solid fa-trash-can"></i></a>
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