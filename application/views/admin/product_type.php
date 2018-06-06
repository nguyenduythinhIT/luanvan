<div class='right bg-light'>
       <h2 class='text-primary'>Quản lý loại sản phẩm</h2>
       <h3 class='text-primary'>Thêm loại sản phẩm</h3>
        <form class='form-group'><table>
            <tr><td>Mã loại: </td><td><input type='text' class='form-control'></td></tr>
            <tr><td>Tên loại: </td><td><input type='text' class='form-control'></td></tr>
            <tr><td>Category: </td><td><select class='form-control'><option>Điện gia dụng</option></select></td></tr>
            <tr><td colspan=2><input type='submit' class='btn btn-success' value='Thêm'>&nbsp<input type='reset' value='reset' class='btn btn-success'></td></tr>
        </table></form>
        <h3 class='text-primary'>Danh sách sản phẩm</h3>
        <table class='table'>
        <tr><th>Mã</th><th>Loại sản phẩm</th><th>Trạng thái</th><th>Thao tác</th></tr>
        <?php foreach($product_type as $k=>$v){ if($v['id']!=""){?>
        <tr><td><?php echo $v['id'] ?></td><td><?php echo $v['name'] ?></td><td><?php if($v['status']==1) echo "Hoạt động"; else echo "Ngừng hoạt động"; ?></td><td><a href="<?php echo base_url();?>admin/product_type/<?php $v['id'];?>"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
		<a style='margin-left:15px' href="<?php echo base_url();?>admin/product_type/delete/<?php $v['id']?>"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td></tr>
        <?php } }?></table>
</div>