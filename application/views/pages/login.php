<div class='container-fluid' style='min-height:500px;background:url(<?php echo base_url();?>image/login_background) no-repeat; background-size:1400px 500px;background-position:center;'>
    <h2 class='text-primary' style='text-align:center'>Đăng nhập tài khoản</h2>
    <form method="post" action="<?php echo base_url();?>Dangnhap/login" style='width:300px;border-radius:5px;background:rgba(0,0,0,0.75);padding:10px;margin:0 auto;'>
        <div class='form-group text-light'>
            <label for="username">Tài khoản:</label>
            <input type='text' class='form-control' name="username" id="username" placeholder="tài khoản đăng nhập">
        </div>
        <div class='form-group text-light'>
            <label for="password">Mật khẩu:</label>
            <input type='password' class='form-control' name="password" id="password" placeholder="Mật khẩu" pattern=".{6,}"  title="6 kí tự trở lên" >
        </div>
        <small class='text-danger'><?php if(isset($error)) echo $error; ?></small>
        <div class='form-group text-dark'>
            <input type='submit' class='btn btn-primary' name="login_sm" value="Đăng nhập">
        </div>
        <a href="<?php echo base_url();?>resetpassword">Quên mật khẩu</a>
    </form>
    <div class='text-light' style='width:300px;border-radius:5px;background:rgba(0,0,0,0.75);padding:10px;margin:10px auto;'>
    Bạn chưa có tài khoản??
        <a href='<?php echo base_url();?>Dangki/buoc1'><button class='btn btn-danger'>Đăng kí ngay</button></a>
    </div>
</div>