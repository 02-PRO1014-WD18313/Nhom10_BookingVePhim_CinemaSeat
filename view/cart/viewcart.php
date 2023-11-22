<table border="1" width="50%" style="text-align: center;">
    <thead>
        <tr>
            <th>#</th>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $i = 1;
        foreach ($loadAll_cart as $value) {
            extract($value); ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img width="50" src="uploads/img_sp/<?= $img ?>" alt=""></td>
                <td><?= $name ?></td>
                <td><?= number_format($gia) ?> VND</td>
                <td><input type="number" min="1" value="<?= $soluong ?>" max="5"></td>
                <td><a href="#">Xóa</a></td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>