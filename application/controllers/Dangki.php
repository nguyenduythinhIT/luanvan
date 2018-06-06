<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dangki extends CI_Controller {
	public function view1()
	{
		if ( ! file_exists(APPPATH.'views/pages/signup1.php'))
        	{
                show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Dangki/buoc1";
			$_SESSION['user_data']['role']="2";
		}
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] = "Đăng kí: bước 1";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navibar', $data);
		$this->load->view('pages/signup1', $data);
		$this->load->view('templates/footer', $data);
    	}
    	public function view2()
	{
		if ( ! file_exists(APPPATH.'views/pages/signup1.php'))
        	{
                show_404();
		}
		if ( ! file_exists(APPPATH.'views/pages/signup2.php'))
        	{
                show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Dangki/buoc2";
			$_SESSION['user_data']['role']="2";
		}
		$data['user_data']=$_SESSION['user_data'];
		$account=new account();
		if(isset($_POST['signup_sm']))
		{
			if($_POST['password'] != $_POST['re-password']){
				$data['title'] = "Đăng kí: bước 1";
				$data['error'] = "Mật khẩu không trùng khớp";
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navibar', $data);
				$this->load->view('pages/signup1', $data);
			}
			else if(count($account->search_username($_POST['username']))>0){
				$data['title'] = "Đăng kí: bước 1";
				$data['error'] = "Tài khoản đã tồn tại";
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navibar', $data);
				$this->load->view('pages/signup1', $data);
			}
			else if($_POST['username']=="" || $_POST['password']=="")
			{
				$data['title'] = "Đăng kí: bước 1";
				$data['error'] = "Bạn phải điền đầy đủ thông tin";
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navibar', $data);
				$this->load->view('pages/signup1', $data);
			}
			else{
				$_SESSION['signup']['username']=$_POST['username'];
				$_SESSION['signup']['password']=$_POST['password'];
				$data['title'] = "Đăng kí: bước 2";
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navibar', $data);
				$this->load->view('pages/signup2', $data);
			}
		}
		$this->load->view('templates/footer', $data);
    	}
    	public function view3()
	{
		if ( !file_exists(APPPATH.'views/pages/signup3.php')||!file_exists(APPPATH.'views/pages/signup2.php')||!file_exists(APPPATH.'views/pages/signup1.php') )
        	{
                show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Dangki/buoc3";
			$_SESSION['user_data']['role']="2";
		}
		$data['user_data']=$_SESSION['user_data'];
		$account=new account();
		if(isset($_POST['signup2_sm']))
		{	
				if($_POST['name']==""||$_POST['phone']==""||$_POST['mail']==""||$_POST['id_card']=="")
				{
					$data['error']="Bạn phải nhập đầy đủ thông tin";
					$data['title'] = "Đăng kí: bước 2";
					$this->load->view('templates/header', $data);
					$this->load->view('templates/navibar', $data);
					$this->load->view('pages/signup2', $data);
				}
				else
				{
					$_SESSION['signup']['name']=$_POST['name'];
					$_SESSION['signup']['mail']=$_POST['mail'];
					$_SESSION['signup']['phone']=$_POST['phone'];
					$_SESSION['signup']['id_card']=$_POST['id_card'];
					$data['title'] = "Đăng kí: bước 3";
					$this->load->view('templates/header', $data);
					$this->load->view('templates/navibar', $data);
					$this->load->view('pages/signup3', $data);
				}
		}
		$this->load->view('templates/footer', $data);
    	}
    	public function vertify()
	{
		if ( ! file_exists(APPPATH.'views/pages/signup_vertify.php')||! file_exists(APPPATH.'views/pages/signup3.php')||! file_exists(APPPATH.'views/pages/signup2.php')||! file_exists(APPPATH.'views/pages/signup1.php'))
        	{
                show_404();
		}
		if(!isset($_SESSION))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Dangki/vertify";
			$_SESSION['user_data']['role']="2";
		}
		$data['user_data']=$_SESSION['user_data'];
		$account=new account();
		$user=new user();
		if(isset($_POST['signup3_sm']))
		{	
				if($_POST['address']=="")
				{
					$data['error']="Bạn phải nhập đầy đủ thông tin";
					$data['title'] = "Đăng kí: bước 3";
					$this->load->view('templates/header', $data);
					$this->load->view('templates/navibar', $data);
					$this->load->view('pages/signup3', $data);
				}
				else if(!isset($_POST['check'])){
					$data['error']="Bạn cần chấp nhận điều khoản trước khi đăng kí";
					$data['title'] = "Đăng kí: bước 3";
					$this->load->view('templates/header', $data);
					$this->load->view('templates/navibar', $data);
					$this->load->view('pages/signup3', $data);
				}
				else
				{
					if(count($account->search_username($_SESSION['signup']['username']))==0)
					{
						$_SESSION['signup']['address']=$_POST['address'];
						$id=$user->add($_SESSION['signup']['name'],$_SESSION['signup']['phone'],$_SESSION['signup']['mail'],$_SESSION['signup']['address'],$_SESSION['signup']['id_card']);
						$account->add($_SESSION['signup']['username'],md5(sha1($_SESSION['signup']['username'].$_SESSION['signup']['password'])),$id[0]['id']);
					}
					$data['title'] = "Đăng kí: Thành công";
					$this->load->view('templates/header', $data);
					$this->load->view('templates/navibar', $data);
					$this->load->view('pages/signup_vertify', $data);
				}
		}
		$this->load->view('templates/footer', $data);
	}
}
?>