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
include 'model/validate_pass.php';
include 'model/donhang.php';


$loadstar = loadstar();
// $list_sp_home = loadAll_sanpham();
$list_dm = loadAll_danhmuc();
$load_sp_star= load_sp_star();

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
                $load_sp_cl = load_sp_cung_loai($_GET['idsp'], $_GET['iddm']);
                
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
        case 'thanhtoantc':
            include 'view/cart/thanhtoantc.php';
            break;
            case 'thanhtoan':
                if (isset($_GET['idcart']) && $_GET['idcart'] > 0) {
                    $idcart = $_GET['idcart'];
                } else {
                    $idcart = 0;
                }
                $loadAll_cart = loadAll_cart($_SESSION['iduser']);
                if (isset($_GET['idsp'])) {
                    $loadone_sp = loadAll_sanpham("",  $_GET['idsp']);
                }
                if (isset($_POST['redirect']) && $_POST['redirect']) {
                    if (isset($_POST['thanhtoan']) && $_POST['thanhtoan'] == "Thanh toán khi nhận hàng") {
                        $thanhtoan = $_POST['thanhtoan'];
                        $user = $_POST['user'];
                        $email = $_POST['email'];
                        $sdt = $_POST['sdt'];
                        $address = $_POST['address'];
                        $err = validate_form($user, $email, $sdt, $address);
                        if (empty($err)) {
                            $iddh =  insert_donhang($_SESSION['iduser'], $user, $sdt, $email, $address);
                            if (!isset($_GET['idsp'])) {
                                for ($i = 0; $i < count($loadAll_cart); $i++) {
                                    $idsp = $loadAll_cart[$i]['idsp'];
                                    $idcart = $loadAll_cart[$i]['idcart'];
                                    $name = $loadAll_cart[$i]['name'];
                                    $gia = $loadAll_cart[$i]['gia_new'];
                                    $soluong = $loadAll_cart[$i]['soluong'];
                                    $thanhtien = $_POST['thanhtien'];
                                    $img = $loadAll_cart[$i]['img'];
                                    delete_cart($idcart);
                                }
                            } else {
                                $idsp = $_GET['idsp'];
                                $name = $loadone_sp[0]['name'];
                                $gia = $loadone_sp[0]['gia_new'];
                                $soluong = 1;
                                $thanhtien = $_POST['thanhtien'];
                                $img = $loadone_sp[0]['img'];
                            }
    
                            // echo $idsp . '<br>' . $name . '<br>' . $gia . '<br>' . $soluong . '<br>' . $thanhtien . '<br>' . $img;
                            insert_chitietdonhang($iddh, $idsp, $name, $gia, $soluong, $thanhtien, $img);
                            $_SESSION['count_cart'] = count(count_cart($_SESSION['iduser']));
                            header("Location: view/cart/thanhtoantc.php");
                        }
                    } elseif (isset($_POST['thanhtoan']) && $_POST['thanhtoan'] == 'vnpay') {
                        $thanhtoan = $_POST['thanhtoan'];
                        $user = $_POST['user'];
                        $email = $_POST['email'];
                        $sdt = $_POST['sdt'];
                        $address = $_POST['address'];
                        $err = validate_form($user, $email, $sdt, $address);
                        if (empty($err)) {
                        $iddh =  insert_donhang($_SESSION['iduser'], $user, $sdt, $email, $address);
                            // if (!isset($_GET['idsp'])) {
                            for ($i = 0; $i < count($loadAll_cart); $i++) {
                                $idsp = $loadAll_cart[$i]['idsp'];
                                $idcart = $loadAll_cart[$i]['idcart'];
                                $name = $loadAll_cart[$i]['name'];
                                $gia = $loadAll_cart[$i]['gia_new'];
                                $soluong = $loadAll_cart[$i]['soluong'];
                                $thanhtien = $_POST['thanhtien'];
                                $img = $loadAll_cart[$i]['img'];
                                delete_cart($idcart);
                            }
                            // } else {
                            // $idsp = $_GET['idsp'];
                            // $name = $loadone_sp[0]['name'];
                            // $gia = $loadone_sp[0]['gia_new'];
                            // $soluong = 1;
                            // $thanhtien = $_POST['thanhtien'];
                            // $img = $loadone_sp[0]['img'];
                            // }
                            insert_chitietdonhang($iddh, $idsp, $name, $gia, $soluong, $thanhtien, $img);
                            $_SESSION['count_cart'] = count(count_cart($_SESSION['iduser']));
                            header("Location: view/cart/thanhtoantc.php");
                            echo 'thanh toan thanh cong';
                            $thanhtien = $_POST['thanhtien'];
                            echo $thanhtien;
    
                            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
    
                            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                            $vnp_Returnurl = "http://localhost/Nhom10_BookingVePhim_CinemaSeat/?act=thanhtoantc";
                            $vnp_TmnCode = "WG6RCT6R"; //Mã website tại VNPAY 
                            $vnp_HashSecret = "EMNBSNLHGWLGFOQXDXZZQGNONOSETZZF"; //Chuỗi bí mật
                            $startTime = date("YmdHis");
                            $expire = date('YmdHis', strtotime('+5 minutes', strtotime($startTime)));
                            $vnp_TxnRef = time() . ''; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                            $vnp_OrderInfo = 'hahah';
                            $vnp_OrderType = 'noi dung thanh toan';
                            $vnp_Amount = $thanhtien * 100;
                            $vnp_Locale = 'vn';
                            $vnp_BankCode = 'NCB';
                            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                            $vnp_ExpireDate = $expire;
    
                            $inputData = array(
                                "vnp_Version" => "2.1.0",
                                "vnp_TmnCode" => $vnp_TmnCode,
                                "vnp_Amount" => $vnp_Amount,
                                "vnp_Command" => "pay",
                                "vnp_CreateDate" => date('YmdHis'),
                                "vnp_CurrCode" => "VND",
                                "vnp_IpAddr" => $vnp_IpAddr,
                                "vnp_Locale" => $vnp_Locale,
                                "vnp_OrderInfo" => $vnp_OrderInfo,
                                "vnp_OrderType" => $vnp_OrderType,
                                "vnp_ReturnUrl" => $vnp_Returnurl,
                                "vnp_TxnRef" => $vnp_TxnRef,
                                "vnp_ExpireDate" => $vnp_ExpireDate,
                            );
    
                            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                                $inputData['vnp_BankCode'] = $vnp_BankCode;
                            }
                            ksort($inputData);
                            $query = "";
                            $i = 0;
                            $hashdata = "";
                            foreach ($inputData as $key => $value) {
                                if ($i == 1) {
                                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                                } else {
                                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                                    $i = 1;
                                }
                                $query .= urlencode($key) . "=" . urlencode($value) . '&';
                            }
    
                            $vnp_Url = $vnp_Url . "?" . $query;
                            if (isset($vnp_HashSecret)) {
                                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                            }
                            $returnData = array(
                                'code' => '00', 'message' => 'success', 'data' => $vnp_Url
                            );
                            if (isset($_POST['redirect'])) {
                                header('Location: ' . $vnp_Url);
                                die();
                            } else {
                                echo json_encode($returnData);
                            }
                        }
                    } else {
                        $error = 'Vui lòng chọn phương thức thanh toán!';
                    }
                }
                $loadAll_cart = loadAll_cart($_SESSION['iduser']);
                include 'view/cart/thanhtoan.php';
                break;
        case 'mytaikhoan':
            if (isset($_POST['btn_tt']) && $_POST['btn_tt']) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $address = $_POST['diachi'];
                $err = validate_form($user, $email, $sdt, $address);
                if (empty($err)) {
                    update_taikhoan($_SESSION['iduser'], $user, $email, $sdt, $address);
                }
            }
            if (isset($_POST['btn_update_pass']) && $_POST['btn_update_pass']) {
                $pass = $_POST['pass'];
                $captcha = $_POST['captcha'];
                $ma = $_POST['ma'];
                $confim = $_POST['confim'];
                $pass2 = $_POST['pass2'];
                $err  = check_update_pass($pass, $ma, $captcha, $confim, $pass2);
                if (empty($err)) {
                    update_mk($_SESSION['iduser'], $pass2);
                    echo "<script>alert('Đổi mật khẩu thành công!')</script>";
                }
            }
            $tk =  selectone_tk($_SESSION['iduser']);
            $ctdh = load_ctdh($_SESSION['iduser']);
            include 'view/taikhoan/mytaikhoan.php';
            break;
    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
ob_end_flush();
