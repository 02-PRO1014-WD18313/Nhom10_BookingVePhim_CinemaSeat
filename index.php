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
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky']>0)){
                $user=$_POST['user'];                
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                // $confirmPass=$_POST['confirmPass'];
                // $diachi=$_POST['diachi'];
                // $tel=$_POST['tel'];
                insert_taikhoan($user,$email,$pass);
                $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận and đặt hàng";
            }
                include "view/taikhoan/dangky.php";
            break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap']>0)){
                    $user=$_POST['user'];                
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    //mảng
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        header('location:index.php');
                        // $thongbao="bạn đã đăng nhập thành công!";
                    }else{
                        $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                    }
                }
                    include "view/taikhoan/dangnhap.php";
                break;
            case 'thoat':
                session_unset();
                header('location:index.php');
                break;
    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
