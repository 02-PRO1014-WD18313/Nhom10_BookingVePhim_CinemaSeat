<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 h5 text-dark font-weight-bold">Danh sách danh mục</h6>
        </div>
        <div class="card-body">
            <a class="btn btn-success mb-3" href="?act=add_dm">Thêm mới</a>
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
                                <img width="100px" height="50px" src="../uploads/img_dm/<?= $value['img']?>" alt="123">
                            </td>
                            <td>
                                <a type="button" class="btn btn-warning" href="?act=update_dm&id=<?= $value['id']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a type="button" class="btn btn-danger" href="?act=delete_dm&id=<?= $value['id']?>" onclick="return confirm('Bạn có muốn xóa <?= $value['name'] ?>')"><i class="fa-solid fa-trash-can"></i></a>
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