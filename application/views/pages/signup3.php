<div class='container-fluid' style='min-height:500px;background:url(<?php echo base_url();?>image/login_background) no-repeat; background-size:1400px 500px;background-position:center;'>
    <h2 class='text-primary' style='text-align:center'>Đăng kí - Bước 3</h2>
    <form  method="post" action="<?php echo base_url();?>Dangki/vertify" style='margin:0 auto;width:300px;border-radius:5px;background:rgba(0,0,0,0.75);padding:10px'>
        <div class='form-group text-light'>
            <label for="name">Địa chỉ giao hàng</label>
            <input type='text' class='form-control' name="address" id="address" placeholder="Địa chỉ">
            <small for="name">(Lưu ý nhập chính xác địa chỉ để tiện cho việc giao hàng)</small>
        </div>
        <div class='form-group text-light'>
            <label for="check">Tôi chấp nhận <a target="blank" href="<?php echo base_url();?>Dieukhoan">Điều khoản & dịch vụ</a>: </label>
            <input type='checkbox' name='check' id="check" value='yes'>
        </div>
        <small class='text-danger'><?php if(isset($error)) echo $error;?></small>
        <div class='form-group text-dark'>
            <input type='submit' class='btn btn-primary' name="signup3_sm" id='signup3_sm' value="Xác nhận" onclick="check()">
        </div>  
    </form>
</div>