<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_thanhvien extends CI_Controller {
	public function view()
	{
		if ( ! file_exists(APPPATH.'views/pages/home.php'))
        	{
		show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Trangchu";
		}
		$user=new user();
		$data['countCustom']=$user->countCustom();
		$data['countEmploy']=$user->countEmploy();
		$data['countMember']=$user->countMember();
		$data['user']=$user->getall();
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="Trang chủ";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navibar', $data);
		$this->load->view('admin/member', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>