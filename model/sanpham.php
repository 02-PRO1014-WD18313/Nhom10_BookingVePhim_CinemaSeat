<?php
function loadAll_sanpham($key = "", $idsp = 0)
{
    $sql = "SELECT * FROM sanpham";
    if ($key != "") {
        $sql .= " WHERE name = '$key'";
    }
    if ($idsp > 0) {
        $sql .= " WHERE id = $idsp";
    }
    return pdo_query($sql);
}
function listsp_dm($key = "", $iddm = 0, $gia = "", $kieumay = "", $xuatxu = "")
{
    $sql = "SELECT
    sp.*,
    IFNULL(AVG(bl.star), 0) AS avg_star
FROM
    sanpham sp
LEFT JOIN
    binhluan bl ON sp.id = bl.id_pro WHERE 1";

    if ($gia != "" && $kieumay != "" && $xuatxu != "") {
        $sql .= " AND gia_new BETWEEN $gia AND kieumay = '$kieumay' AND xuatxu = '$xuatxu'";
    }
    if ($kieumay != "" && $xuatxu != "") {
        $sql .= " AND kieumay = '$kieumay' AND xuatxu = '$xuatxu'";
    }
    if ($xuatxu != "") {
        $sql .= " AND xuatxu = '$xuatxu'";
    }
    if ($kieumay != "") {
        $sql .= " AND kieumay = '$kieumay'";
    }
    if ($gia != "") {
        $sql .= " AND gia_new BETWEEN $gia";
    }
    if ($key != "") {
        $sql .= " AND name LIKE '%$key%'";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm = $iddm";
    }
    if ($key != "" && $gia != "" && $kieumay != "" && $xuatxu != "") {
        $sql = "AND name LIKE '%$key%' AND  gia_new BETWEEN $gia AND kieumay = '$kieumay' AND xuatxu = '$xuatxu'";
    }

    $sql .= " GROUP BY
sp.id
ORDER BY
sp.id";
    return pdo_query($sql);
}



//-------------------ADMIN------------------//
function insert_sp($iddm, $name, $img, $img2, $img3, $gia, $gia_new, $mota, $soluong, $xuatxu, $kieumay)
{
    $sql = "INSERT INTO `sanpham`(`iddm`, `name`, `img`,`img2`,`img3`, `gia`, `gia_new`, `mota`, `soluong`, `xuatxu`, `kieumay`) VALUES 
    ('$iddm','$name','$img', '$img2', '$img3','$gia','$gia_new','$mota','$soluong','$xuatxu','$kieumay')";
    pdo_execute($sql);
}


function delete_sp($id)
{
    $sql = "DELETE FROM `sanpham` WHERE id = $id";
    pdo_execute($sql);
}

function update_sp($id, $iddm, $name, $img, $img2, $img3, $gia, $gia_new, $mota, $soluong, $xuatxu, $kieumay)
{
    $sql = "UPDATE `sanpham` SET 
        `iddm` = '$iddm',
        `name` = '$name',
        `img` = '$img',
        `img2` = '$img2',
        `img3` = '$img3',
        `gia` = '$gia',
        `gia_new` = '$gia_new',
        `mota` = '$mota',
        `soluong` = '$soluong',
        `xuatxu` = '$xuatxu',
        `kieumay` = '$kieumay'
        WHERE `id` = $id";
    pdo_execute($sql);
}
function loadstar()
{
    $sql = "SELECT
    sp.id,
    sp.name,
    sp.img,
    sp.gia,
    sp.gia_new,
    sp.mota,
    sp.soluong,
    sp.xuatxu,
    sp.kieumay,
    sp.iddm,
    IFNULL(AVG(bl.star), 0) AS avg_star
FROM
    sanpham sp
LEFT JOIN
    binhluan bl ON sp.id = bl.id_pro
GROUP BY
    sp.id
ORDER BY
    sp.id limit 0,10";
    return pdo_query($sql);
}
function load_sp_star()
{
    $sql = "
    SELECT
    sp.id,
    sp.name,
    sp.img,
    sp.gia,
    sp.gia_new,
    sp.mota,
    sp.soluong,
    sp.xuatxu,
    sp.kieumay,
    sp.iddm,
    IFNULL(AVG(bl.star), 0) AS avg_star
FROM
    sanpham sp
LEFT JOIN
    binhluan bl ON sp.id = bl.id_pro
GROUP BY
    sp.id
ORDER BY
    avg_star DESC
LIMIT 0,5
    ";
    return pdo_query($sql);
}
