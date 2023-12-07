<?php
function loadall_taikhoan($key = "", $idtk = 0)
{
    $sql = "SELECT * FROM taikhoan";
    if ($key != "") {
        $sql .= " WHERE user = '$key'";
    }
    if ($idtk > 0) {
        $sql .= " WHERE id = $idtk";
    }
    $sql .= " ORDER BY id desc";
    return pdo_query($sql);
}
function insert_taikhoan($user, $email, $pass)
{
    $sql = "INSERT INTO taikhoan(user,email,pass) values('$user','$email','$pass')";
    pdo_execute($sql);
}

function update_mk($id,$pass)
{
    $sql = "UPDATE taikhoan SET pass = '$pass' WHERE id = " . $id;
    pdo_execute($sql);
}
function delete_taikhoan($id)
{
    $sql = "delete FROM taikhoan WHERE id=" . $id;
    pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE  user='" . $user . "' AND  pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE  email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function  update_taikhoan($id, $user, $email, $sdt, $address)
{
    $sql = "UPDATE `taikhoan` SET `user`='$user',`email`='$email',`tel`='$sdt',`address`='$address', `checkname` = '1'  WHERE id=" . $id;
    pdo_execute($sql);
}

function update_role($id, $role)
{
    $sql = "UPDATE taikhoan SET role='" . $role . "' WHERE id=" . $id;
    pdo_execute($sql);
}
function checkuserlogin($user)
{
    $sql = "SELECT * FROM taikhoan WHERE  user='" . $user . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function selectone_tk($id)
{
    $sql = "SELECT * FROM taikhoan WHERE id=" . $id;
    return pdo_query_one($sql);
}
function sendMail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);
    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);

        return "Gửi email thành công";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}
function sendMailPass($email, $username, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '9f617564ac09c3';                     //SMTP username
        $mail->Password   = '0b66c12f5edf43';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('duanmau2023@example.com', 'DuAnMau');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Lay lai mat khau';
        $mail->Body    = 'Mat khau cua ban la: ' . $pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}