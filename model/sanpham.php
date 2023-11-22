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
function listsp_dm($key = "", $iddm = 0, $filter_p = "")
{
    $sql = "SELECT * FROM sanpham";
    if ($key != "") {
        $sql .= " WHERE name LIKE '%$key%'";
    }
    if ($iddm > 0) {
        $sql .= " WHERE iddm = $iddm";
    }
    if($filter_p == "Tăng dần"){
        $sql .= " ORDER BY gia_new ASC";
    }else{
        $sql .= " ORDER BY gia_new DESC";
    }
    return pdo_query($sql);
}



//-------------------ADMIN------------------//
function insert_sp($iddm, $name, $img, $gia, $gia_new, $mota, $soluong, $xuatxu, $kieumay)
{
    $sql = "INSERT INTO `sanpham`(`iddm`, `name`, `img`, `gia`, `gia_new`, `mota`, `soluong`, `xuatxu`, `kieumay`) VALUES 
    ('$iddm','$name','$img','$gia','$gia_new','$mota','$soluong','$xuatxu','$kieumay')";
    pdo_execute($sql);
}


function delete_sp($id)
{
    $sql = "DELETE FROM `sanpham` WHERE id = $id";
    pdo_execute($sql);
}

function update_sp($id, $iddm, $name, $img, $gia, $gia_new, $mota, $soluong, $xuatxu, $kieumay)
{
    if ($img != "") {
        $sql = "UPDATE `sanpham` SET 
        `iddm` = '$iddm',
        `name` = '$name',
        `img` = '$img',
        `gia` = '$gia',
        `gia_new` = '$gia_new',
        `mota` = '$mota',
        `soluong` = '$soluong',
        `xuatxu` = '$xuatxu',
        `kieumay` = '$kieumay'
        WHERE `id` = $id";
    } else {
        $sql = "UPDATE `sanpham` SET 
        `iddm` = '$iddm',
        `name` = '$name',
        `gia` = '$gia',
        `gia_new` = '$gia_new',
        `mota` = '$mota',
        `soluong` = '$soluong',
        `xuatxu` = '$xuatxu',
        `kieumay` = '$kieumay'
        WHERE `id` = $id";
    }
    pdo_execute($sql);
}
