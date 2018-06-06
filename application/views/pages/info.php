<style>
.vertical-menu > a{
    margin:5px;
    padding:10px;
    text-decoration:none;
}
.vertical-menu{
    margin:10px;
    display:flex;
    flex-wrap:wrap;
}
.contain table{
    width:65%;
    min-width:250px
}
.contain table td:first-child{
    text-align:right;
    width:200px;
    padding:10px;
    font-weight:bold;
}
</style>

<div class='container'>
<h2 class='text-primary' style='margin:10px;'>Trang cá nhân - <?php echo $h2;?></h2>
    <div class="vertical-menu">
        <a href="<?php echo base_url();?>trangcanhan/thongtin" class="btn-success">Trang thông tin</a>
        <?php if($user_data['role']!=2) {?><a href="<?php echo base_url();?>admin" class="btn-primary">Trang quản lý</a><?php }
        else {
            ?>
            <a href="<?php echo base_url();?>trangcanhan/lichsu" class="btn-success">Lịch sử mua hàng</a>
        <a href="<?php echo base_url();?>trangcanhan/donhang" class="btn-success">Đơn hàng đang xử lý</a>
            <?php
        }?>
        <a href="<?php echo base_url();?>Dangnhap/logout" class="btn-danger">Đăng xuất</a>    
</div>
    <div class='contain'>
    <?php 
    if($page=='thongtin'){
       $info=$info[0];
       ?>
       <form action="<?php echo base_url();?>user/<?php echo $user_data['username'];?>/update" method="post" class="form group">
       <table>
        <tr><td>Tài khoản: </td><td><input class="form-control" type="text" value=<?php echo $info['username'];?> name="username" disabled></td></tr>
        <tr><td>Tên khách hàng: </td><td><input class="form-control" type="text" value='<?php echo $info['name'];?>' name="name"></td></tr>
        <tr><td>Số điện thoại: </td><td><input class="form-control" type="text" value='<?php echo $info['phone'];?>' name="phone"></td></tr>
        <tr><td>Email: </td><td><input class="form-control" type="text" value='<?php echo $info['mail'];?>' name="mail"></td></tr>
        <tr><td>Địa chỉ: </td><td><input type="text" class="form-control" value='<?php echo $info['address'];?>' name="address"></td></tr>
        <tr><td>CMND/Hộ chiếu: </td><td><input type="text"  class="form-control" value='<?php echo $info['id_card'];?>' name="id_card"></td></tr>
        <tr><td colspan=2><small>Nhập mật khẩu để cập nhật thông tin</small</td></tr>
        <tr><td>Mật khẩu: </td><td><input type="password"  class="form-control" name="password"></td></tr>
        <tr><td></td><td><input type="submit"  class="btn btn-primary" value="Cập nhật" name="updateinfo1_sm"></td></tr>
        <tr><td></td><td> <small class="text-danger"><?php if(isset($error1)) echo $error1;?></small></td></tr>
       </table>
       </form>
       <form action="<?php echo base_url();?>user/<?php echo $user_data['username'];?>/update" method="post" class="form group">
       <table>
        <tr><th class="text-primary" colspan=2 style="font-size:20px;text-align:center">Đổi mật khẩu</th></tr>
        <tr><td>Mật khẩu mới: </td><td><input class="form-control" type="password" pattern=".{6,}" name="new-password"  title="6 kí tự trở lên"></td></tr>
        <tr><td>Nhập lại mật khẩu: </td><td><input class="form-control" type="password" pattern=".{6,}"  title="6 kí tự trở lên" name="re-password"></td></tr>
        <tr><td colspan=2><small>Nhập mật khẩu để cập nhật thông tin</small</td></tr>
        <tr><td>Mật khẩu cũ: </td><td><input type="password"  class="form-control" name="password" pattern=".{6,}"  title="6 kí tự trở lên" ></td></tr>
        <tr><td></td><td><input type="submit"  class="btn btn-primary" value="Cập nhật" name="updateinfo2_sm"></td></tr>
        <tr><td></td><td> <small class="text-danger"><?php if(isset($error2)) echo $error2;?></small></td></tr>
       </table>
       </form>
       <form action="<?php echo base_url();?>user/<?php echo $user_data['username'];?>/update" method="post" class="form group">
       <table>
        <tr><th class="text-primary" colspan=2 style="font-size:20px;text-align:center">Đổi mã pin</th></tr>
        <tr><td>Mã pin mới: </td><td><input class="form-control" type=""  name="new-pin"></td></tr>
        <tr><td colspan=2><small>Nhập mật khẩu để cập nhật thông tin</small</td></tr>
        <tr><td>Mật khẩu: </td><td><input type="password"  class="form-control" name="password"></td></tr>
        <tr><td></td><td><input type="submit"  class="btn btn-primary" value="Cập nhật" name="updateinfo3_sm"></td></tr>
        <tr><td></td><td> <small class="text-danger"><?php if(isset($error3)) echo $error3;?></small></td></tr>
       </table>
       </form>
       </form>
       <form action="<?php echo base_url();?>user/<?php echo $user_data['username'];?>/update" method="post" class="form group">
       <table>
        <tr><th class="text-primary" colspan=2 style="font-size:20px;text-align:center">Đổi câu hỏi bí mật</th></tr>
        <tr><td>Chọn câu hỏi:</td><td><input class="form-control" type="text"  name="question"></td></tr>
        <tr><td>Đáp án:</td><td><input class="form-control" type="text" name="answer"></td></tr>
        <tr><td colspan=2><small>Nhập mật khẩu và mã pin để cập nhật thông tin</small</td></tr>
        <tr><td>Mật khẩu: </td><td><input type="password"  class="form-control" name="password"></td></tr>
        <tr><td></td><td><input type="submit"  class="btn btn-primary" value="Cập nhật" name="updateinfo4_sm"></td></tr>
        <tr><td></td><td> <small class="text-danger"><?php if(isset($error4)) echo $error4;?></small></td></tr>
       </table>
       </form>
       <?php
    }else if($page=='lichsu'){
        ?>
        Phần chưa phát triển
        <?php
    }else if($page=='donhang'){
        ?>
        Phần chưa phát triển
        <?php
    }
    ?>
    </div>
</div>