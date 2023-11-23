<?php
ob_start();
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'view/header.php';
include 'model/taikhoan.php';
include 'model/cart.php';
include 'model/binhluan.php';


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
                if (isset($_POST['submit']) && $_POST['submit']) {
                    $idpro = $_GET['idsp'];
                    $iduser = $_SESSION['iduser'];
                    $stars = $_POST['stars'];
                    $noidung = $_POST['noidung'];
                    insert_bl($iduser, $idpro, $noidung, $stars);
                }
                $loadbl_sp = load_bl_sp($_GET['idsp']);
                $loadone_sp = loadAll_sanpham("", $_GET['idsp']);
            }
            include_once 'view/ctsp.php';
            break;
        case 'listsp':
            if (isset($_POST['submit']) && $_POST['submit']) {
                // từ khóa
                if (isset($_POST['kyw'])) {
                    $key = $_POST['kyw'];
                } else {
                    $key = "";
                }
                //gia
                if (isset($_POST['gia'])) {
                    $gia = $_POST['gia'];
                } else {
                    $gia = "";
                }
                //Kieu may
                if (isset($_POST['kieumay'])) {
                    $kieumay = $_POST['kieumay'];
                } else {
                    $kieumay = "";
                }
                // xuat xu
                if (isset($_POST['xuatxu'])) {
                    $xuatxu = $_POST['xuatxu'];
                } else {
                    $xuatxu = "";
                }
            } else {
                $key = $gia = $kieumay = $xuatxu = "";
            }
            // id danh mục
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $listsp_dm = listsp_dm($key, $iddm, $gia, $kieumay, $xuatxu);
            include_once 'view/listsp.php';
            break;
        case 'addtocart':
<<<<<<< HEAD
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $idsp = $_GET['idsp'];
                $iduser = $_SESSION['iduser'];
                $soluong = 1;
                // echo $iduser . $idsp;
                
                insert_cart($iduser, $idsp, $soluong);
                // $loadAll_cart = loadAll_cart($_SESSION['iduser']);
                // header('Location: ' . $_SERVER['REQUEST_URI']);
=======
            if (isset($_SESSION['user'])) {
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $idsp = $_GET['idsp'];
                    $iduser = $_SESSION['iduser'];
                    $soluong = 1;
                    echo $iduser . $idsp;
                    insert_cart($iduser, $idsp, $soluong);
                    // $loadAll_cart = loadAll_cart($_SESSION['iduser']);
                    // header('Location: ' . $_SERVER['REQUEST_URI']);
                }
                $loadAll_cart = loadAll_cart($_SESSION['iduser']);
>>>>>>> ea7cf3a159a6c86ef6af396209b14592260b6822
            }
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
