<div class='right bg-light'>
       <h2 class='text-primary'>Slider chi tiết</h2>
       <img src='<?php echo base_url();?>image/slider_<?php echo $slider[0]['id'];?>' width='400'>
       URL:<?php echo $slider[0]['url'];?>
       <h2 class='text-primary'>Cập nhật</h2>
        <form action='<?php echo base_url();?>admin/slider/update/<?php  echo $slider[0]['id'];?>' id='form1' method='post' enctype="multipart/form-data" >
        <table>
        <tr><td>Đổi hình:</td><td><input type='file' name='hinh' class='form-control'></td></tr>
        <tr><td>URL:</td><td><input type='text' name='url' value='<?php  echo $slider[0]['url'];?>' class='form-control'></td></tr>
        <tr><td colspan=2><input type='submit' class='btn btn-success' name='submit' value='Cập nhật'></td></tr>
        </table>
        </form>
</div>