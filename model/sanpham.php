<?php
function loadAll_sanpham()
{
    $sql = "SELECT * FROM sanpham";
    return pdo_query($sql);
}
