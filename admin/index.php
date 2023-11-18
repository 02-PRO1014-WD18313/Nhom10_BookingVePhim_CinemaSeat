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

                    $list_dm = loadAll_danhmuc();
                    foreach ($list_dm as $value) {
                        if ($value['name'] == $name) {
                            $err = "Tên danh mục đã tồn tại";
                        } else {
                            if ($_FILES['img']['name'] != "") {

                                $img = time() . "_" . $_FILES['img']['name'];
                                move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/img_dm/$img");
                            }
                            insert_dm($name, $img);
                            $thongbao = "Thêm danh mục thành công";
                        }
                        break;
                    }
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
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $loadone_dm = loadone_danhmuc($_GET['id']);
                    if ($loadone_dm['img'] != null) {
                        $link = "../uploads/img_dm/" . $loadone_dm['img'];
                        unlink("$link");
                    }
                    delete_dm($_GET['id']);
                }
                $list_dm = loadAll_danhmuc();
                include "./danhmuc/list_dm.php";
                break;
            }

        case "sua_dm": {
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $loadone_dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update_dm.php";
                break;
            }
        case "update_dm": {
                if (isset($_POST['submit']) && ($_POST['submit'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = null;
                    if ($_FILES['img']['name'] != "") {
                        $img = time() . "_" . $_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/img_dm/$img");
                    }
                    update_dm($id, $name, $img);
                }
                $list_dm = loadAll_danhmuc();
                $loadone_dm = loadone_danhmuc($_GET['id']);
                include "danhmuc/list_dm.php";
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
            //quan ly don hang
        case "list_donhang": {
                include "./donhang/list_donhang.php";
                break;
            }

            //quan ly ct don hang
        case "list_ctdh": {
                include "./donhang/list_ctdh.php";
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
