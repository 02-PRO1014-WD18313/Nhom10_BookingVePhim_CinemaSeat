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
include 'model/validate_form.php';
include 'model/donhang.php';


$loadstar = loadstar();
// $list_sp_home = loadAll_sanpham();
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
                    $_SESSION['key'] = $key;
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
                unset($_SESSION['key']);
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
            if (isset($_SESSION['user'])) {
                $found = false;
                $loadAll_cart = loadAll_cart($_SESSION['iduser']);
                if (isset($_POST['btn']) && $_POST['btn']) {
                    $idsp = $_GET['idsp'];
                    $iduser = $_SESSION['iduser'];
                    foreach ($loadAll_cart as &$value) {
                        if ($value['idsp'] == $idsp) {
                            $found = true;
                            update_sl($_SESSION['iduser'], $idsp);
                            break; // Exit the loop after updating the quantity
                        }
                    }
                    if (!$found) {
                        $soluong = 1;
                        insert_cart($iduser, $idsp, $soluong);
                    }
                    $_SESSION['count_cart'] = count(count_cart($_SESSION['iduser']));
                    header('Location: ' . $_SERVER['REQUEST_URI']);
                }
                if (isset($_POST['btn_delete']) && $_POST['btn_delete']) {
                    delete_cart($_GET['idcart']);
                    $_SESSION['count_cart'] = count(count_cart($_SESSION['iduser']));

                    header('Location: ' . $_SERVER['REQUEST_URI']);
                }
                if (isset($_POST['btn_giam']) && $_POST['btn_giam']) {
                    update_soluong($_SESSION['iduser'], $_GET['idcart'], $giam = "a", $tang = "");
                    header("Location: ?act=addtocart");
                    exit();
                }
                if (isset($_POST['btn_tang']) && $_POST['btn_tang']) {
                    update_soluong($_SESSION['iduser'], $_GET['idcart'], $giam = "", $tang = "a");
                    header("Location: ?act=addtocart");
                    exit();
                }
                $loadAll_cart = loadAll_cart($_SESSION['iduser']);
            } else {
                header('Location: view/taikhoan/dangnhap.php?act=dangnhap');
                exit();
            }
            include_once 'view/cart/viewcart.php';
            break;
        case 'uploadtk':
            if (isset($_SESSION['user'])) {
                if (isset($_POST['btn']) && ($_POST['btn'] > 0)) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $id = $_POST['id'];
                    if ($user == '' || $pass == '' || $email == '') {
                        echo 'Không được để trống các trường';
                    }
                    update_taikhoan($id, $user, $pass, $email);
                }
                $lay = selectone_tk($_SESSION['iduser']);
            }
            include "view/taikhoan/uploadtk.php";
            break;
        case 'thanhtoantc':
            include 'view/cart/thanhtoantc.php';
            break;
        case 'thongtin':
            if (isset($_GET['idcart']) && $_GET['idcart'] > 0) {
                $idcart = $_GET['idcart'];
            } else {
                $idcart = 0;
            }
            $loadAll_cart = loadAll_cart($_SESSION['iduser']);
            if (isset($_POST['btn_thanhtoan']) && $_POST['btn_thanhtoan']) {
                if (isset($_POST['thanhtoan']) && $_POST['thanhtoan'] == "Thanh toán khi nhận hàng") {
                    $thanhtoan = $_POST['thanhtoan'];
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $address = $_POST['address'];
                    $err = validate_form($user, $email, $sdt, $address);
                    if (empty($err)) {
                       $iddh =  insert_donhang($_SESSION['iduser'], $user, $sdt, $email, $address);
                        for($i = 0; $i < count($loadAll_cart); $i++){
                            $idsp = $loadAll_cart[$i]['idsp'];
                            $idcart = $loadAll_cart[$i]['idcart'];
                            $name = $loadAll_cart[$i]['name'];
                            $gia = $loadAll_cart[$i]['gia_new'];
                            $soluong = $loadAll_cart[$i]['soluong'];
                            $thanhtien = $_POST['thanhtien'];
                            $img = $loadAll_cart[$i]['img'];
                            echo $iddh . ' ' . $idcart . ' ' . $name . ' ' . $gia . ' ' . $soluong . ' ' . $thanhtien . ' ' . $img . '<br>';
                            insert_chitietdonhang($iddh, $idsp, $name, $gia, $soluong, $thanhtien , $img);
                            delete_cart($idcart);
                          }  
                        }
                } else {
                    $error = 'Vui lòng chọn phương thức thanh toán!';
                }
            }
            $loadAll_cart = loadAll_cart($_SESSION['iduser']);
            include 'view/cart/thongtin.php';
            break;
    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
ob_end_flush();
