<?php
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'view/header.php';


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
                insert_taikhoan($user,$pass,$email);
                $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận and đặt hàng";
            }
                include "view/taikhoan/dangky.php";
            break;
    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
