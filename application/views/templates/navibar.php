<?php
$menu=new menu();
$menu_parent=$menu->getAllParent();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();?>">Mini Shoping</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php foreach($menu_parent as $k => $v){
      $menu_item=$menu->getAllbyParent($v['id']);
      if(count($menu_item)==0){
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().$v['url'];?>"><?php echo $v['name'];?><span class="sr-only">(current)</span></a>
      </li>
      <?php } else { ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url().$v['url'];?>wiki" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $v['name'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php foreach($menu_item as $k2=>$v2){?>
          <a class="dropdown-item" href="<?php echo base_url().$v2['url'];?>"><?php echo $v2['name'];?></a>
        <?php }?>
        </div>
      </li>
    <?php }}?>
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