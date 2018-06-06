<style>
.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
  <?php $flag=0;
  foreach($slider as $k=>$v){
    ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $flag;?>" <?php if($flag == 0) {echo "class='active'";$flag++;} else $flag++;?>></li>
  <?php } ?>
  </ol>
  <div class="carousel-inner">
  <?php $flag=0;
  foreach($slider as $k=>$v){
    ?>
      <div class="carousel-item <?php if($flag == 0) {echo "active";$flag++;}?>"><a href="<?php echo base_url().$v['url'];?>">
      <img style='width:80%;height:40vw' class="d-block w-100" src="<?php echo base_url();?>image/slider_<?php echo $v['id'];?>.png" alt="First slide">
      </a></div>
    <?php
  }
  ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>