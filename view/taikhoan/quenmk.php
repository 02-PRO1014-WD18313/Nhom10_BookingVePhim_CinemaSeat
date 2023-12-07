<div class="box-qmk">

    <form action="?act=quenmk" method="post">
        <h3>Quên mật khẩu</h3>
        <input type="text" name="email" placeholder="Mời nhập Email"> <br>
        <?php if (isset($sendMailMess) && $sendMailMess != '') {
            if($sendMailMess == 'Gửi email thành công'){
                echo '<span style="color:green">' . $sendMailMess . '</span> <br>';
            }else{
                echo '<span class="error">' . $sendMailMess . '</span> <br>';
            }
           
        } ?>
        <button name="guiemail" value="guiemail" type="submit">Gửi</button>
       
    </form>
</div>