<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_danhmuc extends CI_Controller {
	public function view()
	{
		if ( ! file_exists(APPPATH.'views/admin/product_type.php'))
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
		$pt=new product_type();
		$data['product_type']=$pt->getall();
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="Trang chủ";
		$this->load->view('templates/header', $data);
        $this->load->view('templates/navibar', $data);
        $this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/product_type', $data);
		$this->load->view('templates/footer', $data);
	}
	public function view2($id)
	{
		if ( ! file_exists(APPPATH.'views/admin/product_type_detail.php'))
        	{
		show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Trangchu";
        }
		$pt=new product_type();
        $data['category']=$pt->searchbyID($id);
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="Trang chủ";
		$this->load->view('templates/header', $data);
        $this->load->view('templates/navibar', $data);
        $this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/product_type_detail', $data);
		$this->load->view('templates/footer', $data);
	}
	public function insert()
	{
		if(isset($_POST['submit']))
		{
			$pt=new product_type();
			$pt->insert($_POST['name']);
			redirect(base_url(""."admin/product_type"),'location');
		}
		else{
			show_404();
			}
	}
	public function delete($id)
	{
		$ct=new product_type();
		$ct->delete($id);
		redirect(base_url(""."admin/product_type"),'location');
	}
	public function update($id)
	{
		if(isset($_POST['submit']))
		{
			$ct=new product_type();
			$ct->update($id,$_POST['name'],$_POST['status']);
			redirect(base_url(""."admin/product_type/$id"),'location');
		}
		else{
			show_404();
			}
	}
}
?>