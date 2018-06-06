<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_menu extends CI_Controller {
	public function view()
	{
		if ( ! file_exists(APPPATH.'views/admin/menu.php'))
        	{
		show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Trangchu";
        }
        $menu=new menu();
        $data['menu']['parent']=$menu->getAllParent();
        foreach($menu->getAllParent() as $k=>$v){

           $data['menu']['parent'][$k]['child']=$menu->getAllbyParent($v['id']);
        }
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="Trang chủ";
		$this->load->view('templates/header', $data);
        $this->load->view('templates/navibar', $data);
        $this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('templates/footer', $data);
	}
	public function update()
	{
		if(isset($_POST['submit']))
		{
			$mn=new menu();
				for($i=0;$i<count($_POST['id']);$i++)
				{
					$id=$_POST['id'][$i];
					$name=$_POST['name'][$i];
					$position=$_POST['position'][$i];
					$url=$_POST['url'][$i];
					$mn->update($id,$name,$position,$url);
				}
		}
		redirect(base_url(""."admin/menu"),'location');
	}
	public function insert()
	{
		if(isset($_POST['submit']))
		{
			$mn=new menu();
			$name=$_POST['name'];
			$parent=$_POST['parent'];
			$position=$_POST['position'];
			$url=$_POST['url'];
			$mn->insert($name,$parent,$position,$url);
		}
		redirect(base_url(""."admin/menu"),'location');
	}
	public function delete($id)
	{
		$mn=new menu();
		$mn->delete($id);
		redirect(base_url(""."admin/menu"),'location');
	}
}
?>