<?php
function loadAll_danhmuc(){
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}