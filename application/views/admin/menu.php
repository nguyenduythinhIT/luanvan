<div class='right bg-light'>
       <h2 class='text-primary'>Quản lý menu</h2>
       <form action="<?php echo base_url();?>admin/menu/update" method="post" class='form-group'><table><tr><td>Vị trí</td><td colspan=2>Tiêu đề</td><td>đường dẫn</td></td>
       <?php foreach($menu['parent'] as $k=>$v)
       {
            ?>
            <tr>
            <td><input name='position[]' type='number' style='width:50px' class='form-control bg-dark text-light' value='<?php echo $v['position'];?>'></td>
            <td colspan=2><input name='name[]' type='text'  class='form-control bg-dark text-light' value='<?php echo $v['name'];?>'></td>
            <td><input name='url[]' type='text'class='form-control bg-dark text-light' value='<?php  echo $v['url'];?>'></td>
            <td style='width:0px;overflow:hidden;'><input style='width:0px;overflow:hidden;' type='number' name='id[]' value='<?php echo $v['id'] ?>' readonly></td>
            <td><a style='margin-left:15px' href="<?php echo base_url();?>admin/menu/delete/<?php echo $v['id'];?>"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td>
            </tr>
            <?php foreach($menu['parent'][$k]['child'] as $k2=>$v2){
                ?>
                <tr><td style='width:20px'></td><td><input name='position[]' type='number' style='width:50px' class='form-control' value='<?php echo $v2['position'];?>'></td>
            <td><input name='name[]' type='text'  class='form-control' value='<?php echo $v2['name'];?>'></td>
            <td><input name='url[]' type='text'class='form-control' value='<?php echo $v2['url'];?>'></td>
            <td style='width:0px;overflow:hidden;'><input style='width:0px;overflow:hidden;' type='number' name='id[]' value='<?php echo $v2['id'] ?>' readonly></td>
            <td><a style='margin-left:15px' href="<?php echo base_url();?>admin/menu/delete/<?php echo $v2['id'];?>"><img src="https://png.icons8.com/color/50/000000/cancel.png" width="20" alt="Xóa"></a></td>
            </tr>
                <?php
            }
        }
       ?><tr><td colspan=3><input type='submit' name='submit' class='btn btn-success' value='Cập nhật'>&nbsp<input type='reset' class='btn btn-success' value='Reset'></td></tr></table>
       </form>
       <small class='text-danger'><?php if(isset($error1)) echo $error1;?></small><br>
       <big class='text-primary'>* Thay đổi số trong vị trí sẽ thay đổi thứ tự của menu, menu xắp sếp theo vị trí từ nhỏ đến lớn, từ trái qua phải</big><br>
       <big class='text-primary'>* Nếu để trùng vị trí menu sẽ sắp xếp theo thứ tự chử cái của tiêu đề.</big>
       <h3 class='text-primary'>Thêm menu</h3>
       <form class='form-group' method='post' action='<?php echo base_url();?>admin/menu/insert'>
        <table>
        <tr><td>Vị trí</td><td><input type='text' class='form-control' name='position' value="0"></td></tr>
        <tr><td>Tiêu đề</td><td><input type='text' class='form-control' name='name'  placeholder=' tối đa 50 kí tự' pattern='.{,50}' title=' tối đa 50 kí tự'></td></tr>
        <tr>
        <td>Menu con của:</td>
        <td>
        <select class='form-control' name='parent'>
        <option value=0>Không có</option>
        <?php foreach($menu['parent'] as $k=>$v){?>
            <option value='<?php echo $v['id'];?>'><?php echo $v['name']; ?></option>
        <?php }?>
        </select>
        </td>
        <tr><td>Đường dẫn:</td><td><input type='text' name='url' class='form-control'></tr>
        </tr>
        <tr><td colspan=2><input type='submit' name='submit' class='btn btn-success' value='Thêm' >&nbsp<input type='reset' class='btn btn-success' value='Reset'></td></tr>
        </table>
       </form>
</div>