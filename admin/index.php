<?php
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "add_dm": {
                include "./danhmuc/add_dm.php";
                break;
            }
        case "list_dm": {
                include "./danhmuc/list_dm.php";
                break;
            }
        case "update_dm": {
                include "./danhmuc/update_dm.php";
                break;
            }
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
    }
} else {
    include "home.php";
}
include "footer.php";
