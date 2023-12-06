<?php
function loadall_donhang($iddh = 0)
{
    $sql = "select * from donhang";
    if ($iddh > 0) {
        $sql .= " where id = '$iddh'";
    }
    return pdo_query($sql);
}
function load_donhang_user($iduser)
{
    $sql = "select * from donhang where id_user = $iduser";
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


function insert_donhang($id_user, $user, $sdt, $email, $address, $thanhtien)
{
    $date = date("Y-m-d");
    $conn = pdo_get_connection();
    $sql = $conn->prepare("INSERT INTO `donhang`( `id_user`, `nguoi_nhan`, `email`, `tel`, `address`,`date`,`thanhtien`) VALUES ('$id_user','$user',' $email','$sdt','$address','$date','$thanhtien')");
    $sql->execute();
    $id = $conn->lastInsertId();
    return $id;
}
function insert_chitietdonhang($iddh, $idsp, $name, $gia, $soluong, $img)
{
    $sql = "INSERT INTO `ct_don_hang`( `id_dh`, `id_sp`, `soluong`, `gia_ban`, `img`, `name`) VALUES ('$iddh','$idsp','$soluong','$gia','$img','$name')";
    pdo_execute($sql);
}

function loadone_chitietdonhang($iddh)
{
    $sql = "select *, donhang.trangthai from ct_don_hang join donhang on ct_don_hang.id_dh = donhang.id where id_dh = '$iddh'";
    return pdo_query($sql);
}

function loadall_chitietdonhang()
{
    $sql = "select * from ct_don_hang 
    inner join donhang on ct_don_hang.id_dh = donhang.id";
    return pdo_query($sql);
}

function load_ctdh($id)
{
    $sql = "SELECT ct_don_hang.*, donhang.id_user, donhang.trangthai FROM ct_don_hang  JOIN donhang ON ct_don_hang.id_dh = donhang.id WHERE donhang.id_user = $id";
    return pdo_query($sql);
}
function update_trangthai($id_dh)
{
    $sql = "UPDATE `donhang` SET trangthai = 4 WHERE id = '$id_dh'";
    pdo_execute($sql);
}
function load_sp_chua_danh_gia($iduser,$iddh)
{
    $sql = "
    SELECT sp.*
    FROM sanpham sp
    JOIN ct_don_hang ctdh ON sp.id = ctdh.id_sp
    JOIN donhang dh ON ctdh.id_dh = dh.id
    LEFT JOIN binhluan bl ON sp.id = bl.id_pro AND dh.id_user = bl.id_user
    WHERE dh.id_user = '$iduser'
      AND dh.trangthai = 3
      AND dh.id = '$iddh'
      AND bl.id IS NULL
";
    return pdo_query($sql);
}
