<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();?>">Mini Shoping</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">Trang chủ<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>wiki" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Danh mục sản phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>danhsachsanpham">Xem tất cả</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>">Bán chạy</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Mới nhập</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>">Điện gia dụng</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Nội thất</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Trang phục</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Thực phẩm</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>">Khuyến mại<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>wiki" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Liên hệ
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>">Giới thiệu về siêu thị</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Các câu hỏi thường gặp</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Đổi trả sản phẩm</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input name='s' class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
    </form>
    <form class="form-inline my-2 my-lg-0" style='margin-left:10px;'>
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><img src="https://png.icons8.com/ultraviolet/25/000000/shopping-cart.png"> 0 sp</button>
    </form>
<form <?php if($user_data['userid']=="") { ?>action="<?php echo base_url();?>Dangnhap" <?php } else {?> action="<?php echo base_url();?>trangcanhan" <?php }?> class="form-inline my-2 my-lg-0" style='margin-left:10px;'>
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><?php 
      if(isset($user_data['name'])) {echo $user_data['name'];}
      else{
        echo "Đăng nhập/Đăng kí";
      }
      ?></button>
    </form>
  </div>
</nav>
  