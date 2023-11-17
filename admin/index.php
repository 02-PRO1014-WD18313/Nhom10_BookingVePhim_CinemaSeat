<?php
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            //quan ly danh muc
        case "add_dm": {
                if (isset($_POST['submit']) && ($_POST['submit'])) {
                    $name = $_POST['name'];
                    $img = null;

                    if ($_FILES['img']['name'] != "") {

                        $img = time() . "_" . $_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/image_dm/$img");
                    }
                    insert_dm($name, $img);
                    $thongbao = "Thêm danh mục thành công";
                } else {
                    $err = "Không được để trống tên danh mục";
                }

                include "./danhmuc/add_dm.php";
                break;
            }
        case "list_dm": {
                $list_dm = loadAll_danhmuc();
                include "./danhmuc/list_dm.php";
                break;
            }
        case "delete_dm": {
                break;
            }
        case "update_dm": {
                include "./danhmuc/update_dm.php";
                break;
            }
            //quan ly san pham
        case "add_sp": {
                include "./sanpham/add_sp.php";
                break;
            }
        case "list_sp": {
                include "./sanpham/list_sp.php";
                break;
            }
        case "update_sp": {
                include "./sanpham/update_sp.php";
                break;
            }
            //quan ly tai khoan
        case "list_tk": {
                include "./taikhoan/list_tk.php";
                break;
            }
        case "update_tk": {
                include "./taikhoan/update_tk.php";
                break;
            }

            //quan ly binh luan
        case "list_binhluan": {
                include "./binhluan/list_binhluan.php";
                break;
            }


            //thong ke
        case "thongke": {
                include "./thongke/thongke.php";
                break;
            }
    }
} else {
    include "home.php";
}
include "footer.php";
