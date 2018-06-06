<div class='right bg-light'>
       <h2 class='text-primary'>Quản lý category</h2>
       <h3 class='text-primary'>Thêm loại category</h3>
        <form method='post' action='<?php echo base_url();?>admin/category/insert' class='form-group'><table>
            <tr><td>Tên category: </td><td><input type='text' class='form-control' name='name' ></td></tr>
            <tr><td colspan=2><input type='submit' class='btn btn-success' name='submit' value='Thêm'>&nbsp<input type='reset' value='Reset form' class='btn btn-success'></td></tr>
        </table></form>
        <h3 class='text-primary'>Danh sách category</h3>
        <table class='table'>
        <tr><th>Category</th><th>Trạng thái</th><th>Thao tác</th></tr>
        <?php foreach($category as $k=>$v){
            ?>
             <tr><td><?php echo $v['name'];?></td>
             <td><?php if($v['status']==1) echo 'Hoạt động'; else echo 'Ngừng hoạt động';?></td>
             <td><a href="<?php echo base_url();?>admin/category/<?php echo $v['id']?>"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
		<a style='margin-left:15px' href="<?php echo base_url();?>admin/category/delete/<?php echo $v['id']?>"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td></tr>
            <?php
        }?>
        </table>
</div>