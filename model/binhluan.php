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
