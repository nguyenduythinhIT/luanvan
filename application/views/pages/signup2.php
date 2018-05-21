<div class='container-fluid' style='min-height:500px;background:url(<?php echo base_url();?>image/login_background) no-repeat; background-size:1400px 500px;background-position:center;'>
    <h2 class='text-primary' style='text-align:center'>Đăng kí - Bước 2</h2>
    <form method="post" action="<?php echo base_url();?>Dangki/buoc3" style='margin:0 auto;width:300px;border-radius:5px;background:rgba(0,0,0,0.75);padding:10px'>
        <div class='form-group text-light'>
            <label for="name">Tên người dùng:</label>
            <input type='text' class='form-control' name="name" id="name" placeholder="Họ và Tên">
        </div>
        <div class='form-group text-light'>
            <label for="phone">Số điện thoại</label>
            <input type='text' class='form-control' name="phone" id="phone" placeholder="Số điện thoại">
        </div>
        <div class='form-group text-light'>
            <label for="mail">Địa chỉ mail:</label>
            <input type='mail' class='form-control' name="mail" id="mail" placeholder="Mail@example.com">
            <small>Mail này sẽ dùng kích hoạt tài khoản</small>
        </div>
        <div class='form-group text-light'>
            <label for="id_card">Số chứng minh thư:</label>
            <input type='text' class='form-control' name="id_card" id="id_card" placeholder="Số CMND, Hộ chiếu, ...">
        </div>
        <small class='text-danger'><?php if(isset($error)) echo $error;?></small>
        <div class='form-group text-dark'>
            <input type='submit' class='btn btn-primary' name="signup2_sm" value="Xác nhận">
        </div>  
    </form>
</div>