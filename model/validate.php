<?php
session_start();
function validate($user, $pass, $email, $confirmPass)
{
    $checkuser = checkuserlogin($user);
    $checkemail = checkemail($email);

    $error = [];
    // Validate user
    if (empty($user)) {
        $error['user'] = "Tên không được để trống!";
    } elseif (strlen($user) < 6) {
        $error["user"] = "Tên phải lớn hơn 6 ký tự!";
    } elseif (strlen($user) > 15) {
        $error["user"] = "Tên phải nhỏ hơn 15 ký tự!";
    } elseif ($_GET['act'] == 'dangky' && $checkuser == true) {
        $error["user"] = "Tên đã tồn tại!";
    }


    // Validate pass
    if (empty($pass)) {
        $error["pass"] = "Mật khẩu không được để trống!";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,20}$/", $pass)) {
        $error["pass"] = "Mật khẩu không đúng định dạng!";
    }

    //Validate Email
    if (empty($email)) {
        $error["email"] = "Email không được để trống!";
    } elseif (!preg_match("/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i", $email)) {
        $error["email"] = "Email không đúng định dạng!";
    } elseif ($checkemail == true) {
        $error['email'] = 'Email đã tồn tại!';
    }


    if (empty($confirmPass)) {
        $error["confirmPass"] = "Mật khẩu không được để trống!";
    } elseif ($confirmPass != $pass) {
        $error['confirmPass'] = "Mật khẩu không trùng khớp!";
    }

    return $error;
}

if (isset($_POST['btn']) && $_POST['btn']) {
    if (isset($_POST['email']) && isset($_POST['confirmPass'])) {
        $email = $_POST['email'];
        $confirmPass = $_POST['confirmPass'];
    } else {
        $email = 'admin@gmail.com';
        $confirmPass =  $_POST['pass'];
    }
    $pass = $_POST['pass'];
    $user = $_POST['user'];


    $error = validate($user, $pass, $email, $confirmPass);

    if (empty($error)) {
        if ($_GET['act'] == 'dangnhap') {
            $dangnhap = checkuser($user, $pass);
            if (!is_array($dangnhap)) {
                $err =  'Tài khoản hoặc mật khẩu không đúng';
            } else {
                $_SESSION['count_cart'] = count(count_cart($dangnhap['id']));
                $_SESSION['role'] = $dangnhap['role'];
                $_SESSION['user'] = $user;
                $_SESSION['iduser'] = $dangnhap['id'];
                if (isset($_SESSION['role'])) {
                    if ($_SESSION['role'] == 1) {
                        header('location: ../../admin/index.php');
                    } else {
                        $_SESSION['email'] = $dangnhap['email'];
                        $_SESSION['pass'] = $dangnhap['pass'];
                        header('location: ../../index.php');
                    }
                }
            }
        } elseif ($_GET['act'] == 'dangky') {
            insert_taikhoan($user, $email, $pass, 0);
            header('Location: dangnhap.php?act=dangnhap');
        }
    }
}
