<?php
function validate_form($user, $email, $sdt, $address)
{
    $checkname = checkuserlogin($user);
    $err = [];
    if ($user == '') {
        $err['user'] = 'Tên người dùng không được để trống';
    } elseif ($_GET['act'] == "mytaikhoan") {
        if ($checkname) {
            $err['user'] = 'Tên người dùng đã tồn tại';
        }
    }
    if ($email == '') {
        $err['email'] = 'Email không được để trống';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err['email'] = 'Email không đúng định dạng';
    }
    if ($sdt == '') {
        $err['sdt'] = 'Số điện thoại không được để trống';
    } elseif (!preg_match('/^0[0-9]{9}$/', $sdt)) {
        $err['sdt'] = 'Số điện thoại không đúng định dạng';
    }
    if ($address == '') {
        $err['address'] = 'Địa chỉ không được để trống';
    }
    return $err;
}
