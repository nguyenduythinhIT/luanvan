<div class='container-fluid' style='min-height:500px;background:url(<?php echo base_url();?>image/login_background) no-repeat; background-size:1400px 500px;background-position:center;'>
    <h2 class='text-primary' style='text-align:center'>Đăng kí - Bước 1</h2>
    <form method='post' action="<?php echo base_url();?>Dangki/buoc2" style='margin:0 auto;width:300px;border-radius:5px;background:rgba(0,0,0,0.75);padding:10px'>
        <div class='form-group text-light'>
            <label for="username">Tài khoản:</label>
            <input type='text' class='form-control' name="username" id="username" placeholder="tài khoản đăng nhập">
        </div>
        <div class='form-group text-light'>
            <label for="password">Mật khẩu:</label>
            <input type='password' class='form-control' name="password" id="password" placeholder="Mật khẩu" pattern=".{6,}"  title="6 kí tự trở lên" >
        </div>
        <div class='form-group text-light'>
            <label for="re-password">nhập lại mật khẩu:</label>
            <input type='password' class='form-control' name="re-password" id="re-password" placeholder="Mật khẩu" pattern=".{6,}"  title="6 kí tự trở lên" >
        </div>
        <small class='text-danger'><?php if(isset($error)) echo $error;?></small>
        <div class='form-group text-dark'>
            <input type='submit' class='btn btn-primary' name="signup_sm" value="Đăng kí">
        </div>  
    </form>
</div>