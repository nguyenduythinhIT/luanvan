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
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>admin">Trang chủ<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>admin/thanhvien">Quản lý thành viên<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>wiki" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Quản lý giao diện
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>admin/menu">Quản lý menu</a>
          <a class="dropdown-item" href="<?php echo base_url();?>admin/slider">Quản lý slider</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>wiki" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Quản lý danh mục
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>admin/category">Category</a>
          <a class="dropdown-item" href="<?php echo base_url();?>admin/product_type">Loại sản phẩm</a>
        </div>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>admin/sanpham">Quản lý sản phẩm<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>admin/khuyenmai">Quản lý khuyến mại<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>admin/thongbao">Quản lý thông báo<span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </nav>
    </div>