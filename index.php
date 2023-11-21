<?php
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'view/header.php';
include 'model/taikhoan.php';


$list_sp_home = loadAll_sanpham();
$list_dm = loadAll_danhmuc();


if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangxuat':
            session_unset();
            header('location:index.php');
            break;
        case 'ctsp':
            include_once 'view/ctsp.php';
            break;
    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
