<div class='right bg-light'>
       <h2 class='text-primary'>Quản lý sản phẩm</h2>
       <h3 class='text-primary'>Thêm sản phẩm</h3>
        <form class='form-group'><table>
            <tr><td>Mã sp: </td><td><input type='text' class='form-control'></td></tr>
            <tr><td>Tên sp: </td><td><input type='text' class='form-control'></td></tr>
            <tr><td>Loại sp: </td><td><select class='form-control'><option>Tivi</option></select></td></tr>
            <tr><td>Mô tả   </td><td><input type='text' class='form-control'></td></tr>
            <tr><td colspan=2><input type='submit' class='btn btn-success' value='Thêm'>&nbsp<input type='reset' value='reset' class='btn btn-primary'></td></tr>
        </table></form>
        <table>
            <tr><td><input type='search' class='form-control' placeholder='Tìm sản phẩm'></td><td><input class='btn btn-primary' value='Tìm' type='submit'></td></tr>
            <tr><td>Bạn đã chọn: 2 sản phẩm</td></tr>
            <tr><td><input type='submit' class='btn btn-success' value='Xóa mục đã chọn'>&nbsp</td></tr>
        </table>
        <table class='table'>
        
        <tr><th>Chọn</th><th>Mã sản phẩm</th><th>Tên sản phẩm</th><th>Số lượng</th><th>Hình ảnh</th><th>trạng thái</th><th>Thao tác</th></tr>
                        <tr><td><input type='checkbox'></td><td>AO01</td><td>Áo 01</td><td>10</td><td><img width='75' src='<?php echo base_url();?>image/upload/AO01'></td><td>Đang bán</td><td>
                        <a href="<?php echo base_url();?>admin/thanhvien/"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
						<a style='margin-left:15px' href="<?php echo base_url();?>admin/thanhvien/delete/"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td></tr>
                        <tr><td><input type='checkbox'></td><td>AO02</td><td>Áo 02</td><td>10</td><td><img width='75' src='<?php echo base_url();?>image/upload/AO02'></td><td>Đang bán</td><td>
                        <a href="<?php echo base_url();?>admin/thanhvien/"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
						<a style='margin-left:15px' href="<?php echo base_url();?>admin/thanhvien/delete/"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td></tr>
                        <tr><td><input type='checkbox'></td><td>QUAN01</td><td>Quần 01</td><td>10</td><td><img width='75' src='<?php echo base_url();?>image/upload/QUAN01'></td><td>Đang bán</td><td>
                        <a href="<?php echo base_url();?>admin/thanhvien/"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
						<a style='margin-left:15px' href="<?php echo base_url();?>admin/thanhvien/delete/"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td></tr>
                        <tr><td><input type='checkbox'></td><td>QUAN02</td><td>Quần 02</td><td>10</td><td><img width='75' src='<?php echo base_url();?>image/upload/QUAN02'></td><td>Đang bán</td><td>
                        <a href="<?php echo base_url();?>admin/thanhvien/"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
						<a style='margin-left:15px' href="<?php echo base_url();?>admin/thanhvien/delete/"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td></tr>
                        <tr><td><input type='checkbox'></td><td>RUOU01</td><td>Rượu 01</td><td>10</td><td><img width='75' src='<?php echo base_url();?>image/upload/RUOU01'></td><td>Đang bán</td><td>
                        <a href="<?php echo base_url();?>admin/thanhvien/"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
						<a style='margin-left:15px' href="<?php echo base_url();?>admin/thanhvien/delete/"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td></tr>
                        <tr><td><input type='checkbox'></td><td>RUOU02</td><td>Rượu 02</td><td>10</td><td><img width='75' src='<?php echo base_url();?>image/upload/RUOU02'></td><td>Đang bán</td><td>
                        <a href="<?php echo base_url();?>admin/thanhvien/"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
						<a style='margin-left:15px' href="<?php echo base_url();?>admin/thanhvien/delete/"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td></tr>                
        </table>
</div>