<style>
.admin-container{
    width:100%;
    margin:10px auto;
}
.admin-container .left{
    width:200px;
    float:left;
}
.admin-container .right{
    width:calc(100% - 200px);
    float:left;
    padding:10px;
}
.admin-container .left a{
    display:block;
    text-decoration:none;
    
}
.btn-group-vertical{
    width:calc(100% - 20px);
    min-height:calc(80vh - 20px);
}
.flex-contain div {
    width:300px;
}
.flex-contain div hr{
    background:white;
}
.flex-contain div p{
    color:white;
}
.glyph-icon svg {
width:16px;
height:16px;
}
@media only screen and (max-width: 800px){
.admin-container .left{
    width:90%;
    margin:10px auto;
    float:none;
}
.admin-container .right{
    width:90%;
    min-height:100px;
    padding:10px;
    margin:10px auto;
    float:none;
}
}
.btn-group-vertical{
    margin:10px;
    width:calc(100% - 20px);
    min-height:calc(80vh - 20px);
}
.btn-group-vertical > button{float:left;}

}
</style>
  <div class='admin-container'>
    <div class='left'>
    <nav class="navbar navbar-expand-lg-vertical navbar-dark bg-dark">
        <p class='text-primary'>MENU</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin">Trang chủ<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin/thanhvien">Quản lý thành viên<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin">Sản phẩm<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin">Thông báo<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin">Đơn hàng<span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </div>
    </nav>
    
    </div>
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
		<form class='form-group'><select>
			<option>Chọn chức vụ</option>
			<option>Khách hàng</option>
			<option>Nhân viên</option>
		</select>
		<input type='submit' class='btn btn-success' value='Lọc'>
		</form>
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
						<a href="#"><img src="https://png.icons8.com/ios-glyphs/50/000000/pencil.png" width="20"></a>	
						<a style='margin-left:15px' href="#"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20"></a>
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
