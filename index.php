<?php
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'view/header.php';


$list_sp_home = loadAll_sanpham();
$list_dm = loadAll_danhmuc();




if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
