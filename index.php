<?php
ob_start();
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'view/header.php';
include 'model/taikhoan.php';
include 'model/cart.php';


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
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $loadone_sp = loadAll_sanpham("", $_GET['idsp']);
            }
            include_once 'view/ctsp.php';
            break;
        case 'listsp':
            if (isset($_POST['btn']) && $_POST['btn']) {
                if (isset($_POST['key']) && $_POST['key'] != '') {
                    $key = $_POST['key'];
                    $_SESSION['key'] = $key;
                } else {
                    $key = '';
                }
                if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }
                if (isset($_POST['filter_p']) && $_POST['filter_p'] != '') {
                    $filter_p = $_POST['filter_p'];
                    $iddm = $iddm;
                    if (isset($_SESSION['key']) && $_SESSION['key'] != '') {
                        $key = $_SESSION['key'];
                    }
                } else {
                    $filter_p  = '';
                }
            } else {
                $key = $filter_p = '';
                if(isset($_GET['iddm'])){
                    $iddm = $_GET['iddm'];
                }else{
                    $iddm = 0;
                }
                unset($_SESSION['key']);
            }
            $listsp_dm = listsp_dm($key, $iddm, $filter_p);
            include_once 'view/listsp.php';
            break;
        case 'addtocart':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $idsp = $_GET['idsp'];
                $iduser = $_SESSION['iduser'];
                $soluong = 1;
                // echo $iduser . $idsp;
                
                insert_cart($iduser, $idsp, $soluong);
                // $loadAll_cart = loadAll_cart($_SESSION['iduser']);
                // header('Location: ' . $_SERVER['REQUEST_URI']);
            }
            $loadAll_cart = loadAll_cart($_SESSION['iduser']);
            
            include_once 'view/cart/viewcart.php';
            break;
        case 'delete_cart':
            
            include_once 'view/cart/viewcart.php';
            break;

    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
ob_end_flush();