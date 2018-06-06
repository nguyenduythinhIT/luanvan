<div class='right bg-light'>
       <h2 class='text-primary'>Category chi tiết</h2>
        <form method='post' action='<?php echo base_url();?>admin/category/update/<?php echo $category[0]['id'];?>' class='form-group'><table>
            <tr><td>Tên category: </td><td><input type='text' class='form-control' name='name' value='<?php echo $category[0]['name'];?>'></td></tr>
            <tr><td>Trạng thái: </td><td>
            <select class='form-control' name='status'>
            <option <?php if($category[0]['status']==1) echo 'selected';?> value=1>Hoạt động</option>
            <option <?php if($category[0]['status']==0) echo 'selected';?> value=0>Ngừng hoạt động</option>
            </select>
            </td></tr>
            <tr><td colspan=2><input type='submit' class='btn btn-success' name='submit' value='Cập nhật'></td></tr>
        </table></form>
</div>