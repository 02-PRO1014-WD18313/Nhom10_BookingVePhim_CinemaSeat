<?php
function loadall_donhang($iddh = 0)
{
    $sql = "select * from donhang";
    if ($iddh > 0) {
        $sql .= " where id = '$iddh'";
    }
    return pdo_query($sql);
}

function update_donhang($iddh, $name, $tel, $address, $ghichu, $trangthai)
{
    $sql = "UPDATE `donhang` SET 
    `nguoi_nhan`='$name',
    `tel`='$tel',
    `address`='$address',
    `ghi_chu`='$ghichu',
    `trangthai`='$trangthai' WHERE `id` = $iddh";
    pdo_execute($sql);
}


function insert_donhang($id_user, $user, $sdt, $email, $address)
{
    $conn = pdo_get_connection();
    $sql = $conn->prepare("INSERT INTO `donhang`( `id_user`, `nguoi_nhan`, `email`, `tel`, `address`) VALUES ('$id_user','$user',' $email','$sdt','$address')");
    $sql->execute();
    $id = $conn->lastInsertId();
    return $id;
}
function insert_chitietdonhang($iddh, $idsp, $name, $gia, $soluong, $thanhtien , $img)
{
    $sql = "INSERT INTO `ct_don_hang`( `id_dh`, `id_sp`, `soluong`, `gia_ban`, `img`, `name`, `thanhtien`) VALUES ('$iddh','$idsp','$soluong','$gia','$img','$name','$thanhtien')";
    pdo_execute($sql);
}

function loadone_chitietdonhang($iddh)
{
    $sql = "select * from ct_don_hang where id_dh = '$iddh'";
    return pdo_query($sql);
}

function loadall_chitietdonhang() {
    $sql = "select * from ct_don_hang 
    inner join donhang on ct_don_hang.id_dh = donhang.id";
    return pdo_query($sql);
}

function load_ctdh($id){
    $sql = "SELECT ct_don_hang.*, donhang.id_user, donhang.trangthai FROM ct_don_hang  JOIN donhang ON ct_don_hang.id_dh = donhang.id WHERE donhang.id_user = $id";
    return pdo_query($sql);
}
