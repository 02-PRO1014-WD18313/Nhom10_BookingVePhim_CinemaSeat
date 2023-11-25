<h1>Cập nhật tài khoản</h1>

<form action="?act=uploadtk" method="post">
    <div>
        <p>Email</p>
        <input type="email" name="email" value="<?= $lay['email'] ?>">
    </div>
    <div>
        <p>Tên đăng nhập</p>
        <input type="text" name="user" value="<?= $lay['user'] ?>">
    </div>
    <p>Mật khẩu</p>
    <div>
        <input type="text" name="pass" value="<?= $lay['pass'] ?>">
    </div>
    <input type="hidden" name="id" value="<?= $lay['id'] ?>">
    <input type="submit" value="Cập nhật" name="btn">
    <input type="reset" value="Nhập lại">
</form>