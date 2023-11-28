<?php
function thong_ke()
{
    $sql = "SELECT dm.id, dm.name, COUNT(sp.id) AS soluong_sanpham
    FROM danhmuc dm
    LEFT JOIN sanpham sp ON dm.id = sp.iddm
    GROUP BY dm.id, dm.name
    ORDER BY dm.id";
    return pdo_query($sql);
}


function thong_ke_doanh_thu()
{
    $sql = "SELECT SUM(thanhtien) AS tong_thanhtien
    FROM (
        SELECT MAX(thanhtien) AS thanhtien
        FROM ct_don_hang
        GROUP BY id_dh
    ) AS max_thanhtien;";
    return pdo_query_one($sql);
}
