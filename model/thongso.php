<?php
//Xuat xu
function loadAll_xuatxu(){
    $sql = "SELECT * FROM xuatxu";
    return pdo_query($sql);
}

//Kieu may
function loadAll_kieumay(){
    $sql = "SELECT * FROM kieumay";
    return pdo_query($sql);
}

//Chat lieu vo
function loadAll_cl_vo(){
    $sql = "SELECT * FROM chat_lieu_vo";
    return pdo_query($sql);
}

//Chat lieu day
function loadAll_cl_day(){
    $sql = "SELECT * FROM chat_lieu_day";
    return pdo_query($sql);
}

//Chống nước
function loadAll_chongnuoc(){
    $sql = "SELECT * FROM chongnuoc";
    return pdo_query($sql);
}



?>