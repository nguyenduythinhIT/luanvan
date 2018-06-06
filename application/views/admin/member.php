    <div class='right bg-light'>
        <div class='flex-contain'>
            <div class='bg-primary'>
				<p><b>Tổng số khách hàng</b></p>
				<p><?php echo $countCustom;?></p>
                <hr>
                <p>Tổng số thành viên:<?php echo $countMember;?><p>
			</div>
			<div class='bg-success'>
				<p><b>Tổng số nhân viên</b></p>
				<p><?php echo $countEmploy;?></p>
			</div>
        </div>
		<div class='filter'>
		<h2 class='text-primary'>Danh sách người dùng</h2>
		<form method="get" action="<?php echo base_url();?>admin/thanhvien" ><select name='filter'>
			<option value=0>All</option>
			<option value=2>Thành viên</option>
			<option value=1>Nhân viên</option>
		</select>
		<input type='submit' class='btn btn-success' value='Lọc'>
        </form>
		<form method="get" action="<?php echo base_url();?>admin/thanhvien" class='form-group row'>
        <input type='search' class='form-control' name='search' placeholder='Tìm kiếm' style='max-width:300px'>
        <input type='submit' class='btn btn-success' value='Tìm kiếm' style='margin-left:5px'>
        </form> </div>
		<div class='show'>
		<table class='table'>
			<tr><th style='width:10%'>ID</th><th style='width:35%'>Tên</th><th  style='width:15%'>Chức vụ</th><th  style='width:15%'>Tài khoản</th><th>Thao tác</th></tr>
			<?php
			foreach($user as $k=>$v)
			{
				?>
				<tr>
					<td><?php echo $v['id']; ?></td>
					<td><?php echo $v['name']; ?></td>
					<td><?php echo $v['role']; ?></td>
					<td><?php echo $v['username']; ?></td>
					<td>
						<a href="<?php echo base_url();?>admin/thanhvien/<?php echo $v['id'];?>"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"  alt="Xem"></a>	
						<a style='margin-left:15px' href="<?php echo base_url();?>admin/thanhvien/delete/<?php echo $v['id'];?>"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a>
					</td>
				</tr>
				<?php
			}
			?>
			</table>
		</div>
		</div>
    </div>
    <br style='clear:both'>
</div>
