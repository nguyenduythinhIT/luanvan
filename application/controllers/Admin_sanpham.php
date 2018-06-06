<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_sanpham extends CI_Controller {
	public function view()
	{
		if ( ! file_exists(APPPATH.'views/admin/product.php'))
        	{
		show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Trangchu";
		}
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="MiniShop";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navibar', $data);
		$this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/product', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>