<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Thongtincanhan extends CI_Controller {
	public function view($page='thongtin')
	{
		if ( ! file_exists(APPPATH.'views/pages/info.php'))
        {
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Trangchu";
		}
                show_404();
        }
        $data['page']=$page;
        if($page=='thongtin'){$data['h2']="Trang thông tin";
            $account=new account();
            $info=$account->getInfo($_SESSION['user_data']['username']);
            $data['info']=$info;
        }
        else if($page=='lichsu'){$data['h2']="Lịch sử mua hàng";}
        else if($page=='donhang'){$data['h2']="Đơn hàng";}
        $data['user_data']=$_SESSION['user_data'];
		$data['title'] ="Trang cá nhân";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navibar', $data);
		$this->load->view('pages/info', $data);
		$this->load->view('templates/footer', $data);
	}
	public function update($username)
	{
		$account=new account();
		if($_SESSION['user_data']['username']!=$username)
		{
			redirect(base_url(),'location');
		}
		if(isset($_POST['updateinfo1_sm']))
		{
			if($_POST['password']=="" || count($account->check_password(md5(sha1($username.$_POST['password']))))==0)
			{
				if ( ! file_exists(APPPATH.'views/pages/info.php'))
				{
				if(!isset($_SESSION['user_data']))
				{
					$_SESSION['user_data']['username']="Guess";
					$_SESSION['user_data']['userid']="";
					$_SESSION['pre_page']="Trangchu";
				}
						show_404();
				}
				$data['page']='thongtin';
				$data['h2']="Trang thông tin";
				$account=new account();
				$info=$account->getInfo($_SESSION['user_data']['username']);
				$data['info']=$info;
				$data['user_data']=$_SESSION['user_data'];
				$data['title'] ="Trang cá nhân";
				$data['error1']="Sai mật khẩu";
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navibar', $data);
				$this->load->view('pages/info', $data);
				$this->load->view('templates/footer', $data);
			}
			else
			{
				$user=new user();
				$u=$account->getUserbyUsername($username);
				$id=$u[0]['id'];
				$user->update($id,$_POST['name'],$_POST['phone'],$_POST['mail'],$_POST['address'],$_POST['id_card']);
				redirect(base_url(""."trangcanhan"),'location');
			}
		}else if(isset($_POST['updateinfo2_sm'])){
			if($_POST['password']=="" || count($account->check_password(md5(sha1($username.$_POST['password']))))==0 ||$_POST['new-password'] != $_POST['re-password'] ||  $_POST['re-password']=="" || $_POST['new-password']=="")
			{
				if ( ! file_exists(APPPATH.'views/pages/info.php'))
				{
				if(!isset($_SESSION['user_data']))
				{
					$_SESSION['user_data']['username']="Guess";
					$_SESSION['user_data']['userid']="";
					$_SESSION['pre_page']="Trangchu";
				}
						show_404();
				}
				$data['page']='thongtin';
				$data['h2']="Trang thông tin";
				$account=new account();
				$info=$account->getInfo($_SESSION['user_data']['username']);
				$data['info']=$info;
				$data['user_data']=$_SESSION['user_data'];
				$data['title'] ="Trang cá nhân";
				$data['error2']="Sai mật khẩu hoặc mật khẩu mới không trùng khớp";
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navibar', $data);
				$this->load->view('pages/info', $data);
				$this->load->view('templates/footer', $data);
			}
			else
			{
				$account=new account();
				$account->updatePassword($username,md5(sha1($username.$_POST['new-password'])));
				redirect(base_url(""."trangcanhan"),'location');
			}
		}else if(isset($_POST['updateinfo3_sm'])){
			if($_POST['password']=="" || count($account->check_password(md5(sha1($username.$_POST['password']))))==0 || $_POST['new-pin']=="")
			{
				if ( ! file_exists(APPPATH.'views/pages/info.php'))
				{
				if(!isset($_SESSION['user_data']))
				{
					$_SESSION['user_data']['username']="Guess";
					$_SESSION['user_data']['userid']="";
					$_SESSION['pre_page']="Trangchu";
				}
						show_404();
				}
				$data['page']='thongtin';
				$data['h2']="Trang thông tin";
				$account=new account();
				$info=$account->getInfo($_SESSION['user_data']['username']);
				$data['info']=$info;
				$data['user_data']=$_SESSION['user_data'];
				$data['title'] ="Trang cá nhân";
				$data['error3']="Hệ thống chưa phát triển";
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navibar', $data);
				$this->load->view('pages/info', $data);
				$this->load->view('templates/footer', $data);
			}
			else
			{
				print_r($_POST);
				//redirect(base_url(""."trangcanhan"),'location');
			}
		}else if(isset($_POST['updateinfo4_sm'])){
			if($_POST['password']=="" || count($account->check_password(md5(sha1($username.$_POST['password']))))==0 || $_POST['pin']=="" || count($account->check_pin($_POST['pin'])))
			{
				if ( ! file_exists(APPPATH.'views/pages/info.php'))
				{
				if(!isset($_SESSION['user_data']))
				{
					$_SESSION['user_data']['username']="Guess";
					$_SESSION['user_data']['userid']="";
					$_SESSION['pre_page']="Trangchu";
				}
						show_404();
				}
				$data['page']='thongtin';
				$data['h2']="Trang thông tin";
				$account=new account();
				$info=$account->getInfo($_SESSION['user_data']['username']);
				$data['info']=$info;
				$data['user_data']=$_SESSION['user_data'];
				$data['title'] ="Trang cá nhân";
				$data['error4']="Hệ thống chưa phát triển";
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navibar', $data);
				$this->load->view('pages/info', $data);
				$this->load->view('templates/footer', $data);
			}
			else
			{

				redirect(base_url(""."trangcanhan"),'location');
			}
		}
	}
}
?>