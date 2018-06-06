    <div class='right bg-light'>
    <h2 class='text-primary'>Thông tin người dùng</h2>
        <form action="<?php echo base_url();?>admin/thanhvien/userupdate/<?php echo $user[0]['id'];?>" method="post">
        <table >
        <tr><td>Mã người dùng:</td><td><input name='id' type='text' value='<?php echo $user[0]['id']; ?>' class='form-control' disabled></td></tr>
        <tr><td>Tên người dùng:</td><td><input name='name' type='text'  class='form-control' value='<?php echo $user[0]['name'];?>' ></td></tr>
        <tr><td>Số điện thoại:</td><td><input name='phone' type='text' value=<?php echo $user[0]['phone']; ?> class='form-control' ></td></tr>
        <tr><td>Mail:</td><td><input name='mail' type='text' value=<?php echo $user[0]['mail']; ?> class='form-control' ></td></tr>
        <tr><td>Địa chỉ:</td><td><input name='address' type='text' value=<?php echo $user[0]['address']; ?> class='form-control' ></td></tr>
        <tr><td>Chứng minh/Hộ chiếu:</td><td><input name='id_card' type='text' value=<?php echo $user[0]['id_card']; ?> class='form-control' ></td></tr>
        <tr><td>Đăng kí ngày:</td><td><?php  echo $user[0]['created_at'];?></td></tr>
        <tr><td>Cập nhật lần cuối:</td><td><?php  echo $user[0]['updated_at'];?></td></tr>
        <tr><td></td><td><input type='submit' class='btn btn-success' value='Cập nhật'></td></tr>
        </table>    
        </form>
        <?php if($account!=array()){
            ?>
            <h3 class='text-primary'>Thông tin tài khoản</h3>
            <table >
            <tr><td>Tài khoản:</td><td><?php echo $account[0]['username']; ?></td></tr>
            </table>    
            <?php
        }
        ?>
        <h3 class='text-primary'>Lịch sử mua hàng</h3>
        Không có
    </div>
    <br style='clear:both'>
</div>
