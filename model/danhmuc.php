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

function loadone_danhmuc($id){
    $sql = "SELECT * FROM `danhmuc` WHERE id = '$id'";
    return pdo_query_one($sql);;
}

function delete_dm($id){
    $sql = "DELETE FROM `danhmuc` WHERE id = '$id'";
    pdo_execute($sql);
}

function update_dm($id,$name,$img){
    $sql = "";
    if($img != ""){
        $sql .= "UPDATE `danhmuc` SET 
        `name`='$name',
        `img`='$img' WHERE `id`='$id'";
    }else{
        $sql .= "UPDATE `danhmuc` SET 
        `name`='$name' WHERE `id`='$id'";
    }
    pdo_execute($sql);
}