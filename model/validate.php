<?php
function validate($user, $pass, $email, $confirmPass)
{
    $error = [];
    // Validate user
    if (empty($user)) {
        $error['user'] = "Tên không được để trống!";
    } elseif (strlen($user) < 6) {
        $error["user"] = "Tên phải lớn hơn 6 ký tự!";
    } elseif (strlen($user) > 10) {
        $error["user"] = "Tên phải nhỏ hơn 10 ký tự!";
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
            $loi=checkuser($user,$pass);            
            if(!is_array($loi)){
                echo 'tk ko chính xác';
            }else{
                $_SESSION['user'] = $user;
                header('location:index.php');
            }
        } elseif ($_GET['act'] == 'dangky') {
            insert_taikhoan($user,$email,$pass);
        }
    }
}
