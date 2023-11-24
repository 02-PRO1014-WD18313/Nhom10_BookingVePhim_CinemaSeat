<?php
    function loadAll_cart( $iduser) {
        $sql= "SELECT sanpham.id, sanpham.name,sanpham.gia, sanpham.gia_new, sanpham.img, cart.soluong FROM sanpham JOIN cart ON cart.idsp = sanpham.id WHERE cart.iduser = '$iduser' order by cart.id desc";
        return pdo_query($sql);
    }
    function insert_cart($iduser, $idsp, $soluong) {
        $sql = "INSERT INTO `cart` (`iduser`, `idsp`, `soluong`) VALUES ('$iduser', '$idsp', '$soluong')";
        pdo_execute($sql);
    }
?>