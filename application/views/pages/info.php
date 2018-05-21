<style>
.vertical-menu > a{
    padding:10px;
    text-decoration:none;
}
.vertical-menu{
    margin:10px;
}
.contain table{
    width:400px;
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
       <table>
        <tr><td>Tài khoản: </td><td><?php echo $info['username'];?></td></tr>
        <tr><td>Tên khách hàng: </td><td><?php echo $info['name'];?></td></tr>
        <tr><td>Số điện thoại: </td><td><?php echo $info['phone'];?></td></tr>
        <tr><td>Email: </td><td><?php echo $info['mail'];?></td></tr>
        <tr><td>Địa chỉ: </td><td><?php echo $info['address'];?></td></tr>
        <tr><td>CMND/Hộ chiếu: </td><td><?php echo $info['id_card'];?></td></tr>
       </table>
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