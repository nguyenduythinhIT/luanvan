<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dangnhap extends CI_Controller {
	public function view()
	{
		if ( ! file_exists(APPPATH.'views/pages/login.php'))
        	{
                show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Dangnhap";
			$_SESSION['user_data']['role']="2";
		}
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] = "Đăng nhập";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navibar', $data);
		$this->load->view('pages/login', $data);
		$this->load->view('templates/footer', $data);
	}
	public function login()
	{
		if ( ! file_exists(APPPATH.'views/pages/login.php'))
        	{
                show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Dangnhap";
			$_SESSION['user_data']['role']="2";
		}
		$data['user_data']=$_SESSION['user_data'];
		if(isset($_POST['login_sm']) && isset($_POST['username']) && isset($_POST['password']))
		$account=new account();
		$user=new user();
		if(count($account->check_password(md5(sha1($_POST['username'].$_POST['password']))))==1)
		{
			$sld=new slider();
			$role=$account->getRole($_POST['username']);
			$role=$role[0]['position'];
			$_SESSION['user_data']['role']=$role;
			$data['title'] ="Trang chủ";
			$_SESSION['user_data']['username']=$_POST['username'];
			$data['user_data']['username']=$_SESSION['user_data']['username'];
			$u=$account->getUserbyUsername($_SESSION['user_data']['username']);
			$data['user_data']['userid']=$u[0]['id'];
			$data['user_data']['name']=$u[0]['name'];
			$_SESSION['user_data']['userid']=$u[0]['id'];
			$_SESSION['user_data']['name']=$u[0]['name'];
			$data['slider']=$sld->getall();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navibar', $data);
			$this->load->view('templates/slider', $data);
			$this->load->view('pages/home', $data);
			$this->load->view('templates/footer', $data);
		}
		else{
			$data['title'] = "Đăng nhập";
			$data['error'] ='Tài khoản hoặc mật khẩu không đúng';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navibar', $data);
			$this->load->view('pages/login', $data);
			$this->load->view('templates/footer', $data);
		}
	}
	public function logout()
	{
		if ( ! file_exists(APPPATH.'views/pages/login.php'))
        	{
                show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Dangnhap";
			$_SESSION['user_data']['role']="2";
		}
		$_SESSION['user_data']['username']='Guess';
		$_SESSION['user_data']['userid']='';
		$_SESSION['user_data']['name']='Đăng nhập/Đăng kí';
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] = "Trang chủ";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navibar', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
	}
}
?>