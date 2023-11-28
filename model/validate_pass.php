<?php

function check_update_pass($pass, $ma, $captcha, $confim, $pass2)
{
    $err = [];
    if ($pass != $_SESSION['pass']) {
        $err['pass'] = "Mật khẩu hiện tại không đúng!";
    }

    if (empty($pass2)) {
        $err['pass2'] = "Không được để trống!";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,20}$/", $pass2)) {
        $err["pass2"] = "Mật khẩu không đúng định dạng!";
    }

    if (empty($confim)) {
        $err['confim'] = "Nhập lại mật khẩu!";
    } elseif ($confim != $pass2) {
        $err['confim'] = "Mật khẩu không trùng khớp!";
    }

    if ($ma != $captcha) {
        $err['ma'] = "Mã xác nhận hiện tại không đúng!";
    } elseif (empty($ma)) {
        $err['ma'] = "Mã xác nhận không được để trống!";
    }

    return $err;
}
