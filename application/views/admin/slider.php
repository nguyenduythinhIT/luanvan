<div class='right bg-light'>
       <h2 class='text-primary'>Quản lý slider</h2>
       <h3 class='text-primary'>Thêm slider</h3>
        <form action='<?php echo base_url();?>admin/slider/insert' id='form1' method='post' enctype="multipart/form-data" >
        <table>
        <tr><td>Hình</td><td><input type='file' name='hinh' class='form-control'></td><tr>
        <tr><td>Đường dẫn</td><td><input type='text' name='url' class='form-control'></td><tr>
        <tr><td colspan=2><input type='submit' name='submit' value='Thêm' class='btn btn-success'>&nbsp<input type='reset' value='Reset'  class='btn btn-success'></td><tr>
        </table>
        </form>
        <table class='table'>
            <tr><th>Hình</th><th>Đường dẫn</th><th>Thao tác</th></tr>
            <?php foreach($slider as $k=>$v){
                ?>
                <tr><td><img width='250' src="<?php echo base_url();?>image/slider_<?php echo $v['id']?>.png" ></td><td><?php echo $v['url']?></td><td>
                    <a href="<?php echo base_url();?>admin/slider/<?php echo $v['id'];?>"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
					<a style='margin-left:15px' href="<?php echo base_url();?>admin/slider/delete/<?php echo $v['id'];?>"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a>
                </td></tr>
                <?php
            }?>
        </table>
</div>