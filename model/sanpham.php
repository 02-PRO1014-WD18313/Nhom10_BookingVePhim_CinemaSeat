<?php
function loadAll_sanpham($key="",$idsp=0)
{
    $sql = "SELECT * FROM sanpham";
    if($key != ""){
        $sql .= " WHERE name = '$key'";
    }
    if($idsp > 0){
        $sql .= " WHERE id = $idsp";
    }
    return pdo_query($sql);
}

//-------------------ADMIN------------------//
function insert_sp($iddm,$name,$img,$gia,$gia_new,$mota,$soluong,$xuatxu,$kieumay){
    $sql = "INSERT INTO `sanpham`(`iddm`, `name`, `anh`, `gia`, `gia_new`, `mota`, `soluong`, `xuatxu`, `kieumay`) VALUES 
    ('$iddm','$name','$img','$gia','$gia_new','$mota','$soluong','$xuatxu','$kieumay')";
    pdo_execute($sql);
}
