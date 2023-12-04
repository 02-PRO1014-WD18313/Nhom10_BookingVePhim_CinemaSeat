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
        FROM ct_don_hang JOIN donhang ON ct_don_hang.id_dh = donhang.id
        WHERE donhang.trangthai = '3'
        GROUP BY id_dh
    ) AS max_thanhtien;";
    return pdo_query_one($sql);
}
function thong_ke_star($idsp)
{
    $sql = "
    SELECT
    COUNT(CASE WHEN star = 1 THEN 1 END) AS star_1,
    COUNT(CASE WHEN star = 2 THEN 1 END) AS star_2,
   COUNT(CASE WHEN star = 3 THEN 1 END) AS star_3,
    COUNT(CASE WHEN star = 4 THEN 1 END) AS star_4,
     COUNT(CASE WHEN star = 5 THEN 1 END) AS star_5
    
  FROM binhluan
  WHERE id_pro = '$idsp'
  GROUP BY id_pro;
    ";
    return pdo_query($sql);
}

function thong_ke_doanh_thu_thanh(){
    $sql = "
    SELECT
    MONTH(dh.date) AS thang,
    SUM(dh.thanhtien) AS doanhthu
FROM
    donhang dh
WHERE
    dh.trangthai = 3
GROUP BY
    thang
ORDER BY
 thang;
    ";
    return pdo_query($sql);
}
