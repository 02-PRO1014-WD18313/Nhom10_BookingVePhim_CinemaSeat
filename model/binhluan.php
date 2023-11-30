<?php
function load_bl_sp($idpro)
{
    $sql = "SELECT binhluan.*, taikhoan.user FROM binhluan JOIN taikhoan ON binhluan.id_user = taikhoan.id WHERE binhluan.id_pro = $idpro ORDER BY binhluan.id DESC";
    return pdo_query($sql);
}

function insert_bl($iduser, $idpro, $noidung, $star)
{
    $date = date("Y-m-d");
    $sql = "INSERT INTO `binhluan`( `id_user`, `id_pro`, `noidung`, `date`, `star`) VALUES ('$iduser','$idpro','$noidung','$date','$star')";
    pdo_execute($sql);
}

//--------ADMIN---------//
function load_bl_sp_admin()
{
    $sql = "SELECT binhluan.*, taikhoan.user, sanpham.img, sanpham.name, sanpham.gia_new
    FROM binhluan 
    JOIN sanpham ON binhluan.id_pro = sanpham.id
    JOIN taikhoan ON binhluan.id_user = taikhoan.id
    ORDER BY binhluan.id DESC";
    return pdo_query($sql);
}
function delete_binhluan($idbl){
    $sql = "DELETE FROM `binhluan` WHERE id = $idbl";
    pdo_execute($sql);
}
