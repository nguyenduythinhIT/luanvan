<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_category extends CI_Controller {
	public function view()
	{
		if ( ! file_exists(APPPATH.'views/admin/category.php'))
        	{
		show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Trangchu";
        }
        $ctl=new category();
        $data['category']=$ctl->getall();
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="Trang chủ";
		$this->load->view('templates/header', $data);
        $this->load->view('templates/navibar', $data);
        $this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/category', $data);
		$this->load->view('templates/footer', $data);
	}
	public function view2($id)
	{
		if ( ! file_exists(APPPATH.'views/admin/category.php'))
        	{
		show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Trangchu";
        }
        $ctl=new category();
        $data['category']=$ctl->searchbyID($id);
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="Trang chủ";
		$this->load->view('templates/header', $data);
        $this->load->view('templates/navibar', $data);
        $this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/category_detail', $data);
		$this->load->view('templates/footer', $data);
	}
	public function insert()
	{
		if(isset($_POST['submit']))
		{
			$ct=new category();
			$ct->insert($_POST['name']);
			redirect(base_url(""."admin/category"),'location');
		}
		else{
			show_404();
			}
	}
	public function delete($id)
	{
		$ct=new category();
		$ct->delete($id);
		redirect(base_url(""."admin/category"),'location');
	}
	public function update($id)
	{
		if(isset($_POST['submit']))
		{
			$ct=new category();
			$ct->update($id,$_POST['name'],$_POST['status']);
			redirect(base_url(""."admin/category/$id"),'location');
		}
		else{
			show_404();
			}
	}
}
?>