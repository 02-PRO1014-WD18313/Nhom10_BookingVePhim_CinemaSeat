<?php
function loadAll_danhmuc(){
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}


//-----------ADMIN---------------//
function insert_dm($name, $img){
    $sql = "INSERT INTO `danhmuc`(`name`, `img`) VALUES ('$name','$img')";
    pdo_execute($sql);
}