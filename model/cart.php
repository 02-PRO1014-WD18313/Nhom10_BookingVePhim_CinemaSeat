<?php

function loadAll_cart($iduser)
{
    $sql = "SELECT cart.id as idcart, sanpham.id as idsp, sanpham.name,sanpham.gia, sanpham.gia_new, sanpham.img, cart.soluong FROM sanpham JOIN cart ON cart.idsp = sanpham.id WHERE cart.iduser = '$iduser' order by cart.id desc";
    return pdo_query($sql);
}
function insert_cart($iduser, $idsp, $soluong)
{
    $sql = "INSERT INTO `cart` (`iduser`, `idsp`, `soluong`) VALUES ('$iduser', '$idsp', '$soluong')";
    pdo_execute($sql);
}
function count_cart($iduser)
{
    $sql = "SELECT * FROM cart WHERE iduser = '$iduser'";
    return pdo_query($sql);
}
function delete_cart($id)
{
    $sql = "DELETE FROM cart WHERE id = '$id'";
    pdo_execute($sql);
}
function update_sl($id, $idsp)
{
    $sql = "UPDATE cart SET soluong = soluong + 1 WHERE iduser = '$id' AND idsp = '$idsp'";
    pdo_execute($sql);
}

