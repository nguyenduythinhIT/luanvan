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
          Đồ điện/gia dụng
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>danhsachsanpham?t=dodiengiadung">Xem tất cả</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>">Tivi</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Tủ lạnh</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Máy lạnh</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Máy giặc</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Nồi chảo</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Bếp</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>wiki" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          thời trang
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>">Xem tất cả</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>">Đồ nam</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Đồ nữ</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Trẻ em</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Phụ kiện</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>wiki" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Thực phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>">Xem tất cả</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>">Đóng hộp, đóng gói</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Nước uống</a>
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
    <form class="form-inline my-2 my-lg-0" style='margin-left:10px;'>
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Đăng kí/Đăng nhập</button>
    </form>
  </div>
</nav>
  