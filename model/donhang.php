<?php
function loadall_donhang($iddh=0) {
    $sql = "select * from donhang ";
    if($iddh > 0){
        $sql .= " where id = $iddh";
    }
    $sql .= " order by id desc";
    return pdo_query($sql);
}

function update_donhang($iddh, $name, $tel, $address, $trangthai){
    $sql = "
    UPDATE `donhang` SET 
    `ten_nhan`='$name',
    `tel`='$tel',
    `address`='$address',
    `trangthai`='$trangthai' WHERE `id` = $iddh";
    pdo_execute($sql);
}
?>