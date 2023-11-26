<?php
function loadall_donhang($iddh = 0)
{
    $sql = "select * from donhang ";
    if ($iddh > 0) {
        $sql .= " where id = $iddh";
    }
    $sql .= " order by id desc";
    return pdo_query($sql);
}

function update_donhang($iddh, $name, $tel, $address, $trangthai)
{
    $sql = "
    UPDATE `donhang` SET 
    `ten_nhan`='$name',
    `tel`='$tel',
    `address`='$address',
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
