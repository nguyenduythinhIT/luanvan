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
		$data['user']=$user->getall();
		if(isset($_GET['filter']))
		{
			$data['filter']=$_GET['filter'];
			if($_GET['filter']==0){
				$data['user']=$user->getall();
			}
			else if($_GET['filter']==-1){
				$data['user']=$user->getallbyRole("NULL");
			}
			else if($_GET['filter']==1){
				$data['user']=$user->getallbyRole("1");
			}
			else if($_GET['filter']==2){
				$data['user']=$user->getallbyRole("2");
			}
		}
		if(isset($_GET['search'])){
			$data['user']=$user->search($_GET['search']);
		}
		$data['countMember']=$user->countCustom();
		$data['countEmploy']=$user->countEmploy();
		$data['countCustom']=count($user->getall()) - $data['countEmploy'];
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="MiniShop";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navibar', $data);
		$this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/member', $data);
		$this->load->view('templates/footer', $data);
	}
	public function viewmember($id)
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
		$account=new account();
		$data['user']=$user->searchbyID($id);
		$data['account']=$account->searchbyID($id);
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="MiniShop";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navibar', $data);
		$this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/member-info', $data);
		$this->load->view('templates/footer', $data);
	}
	public function delete($id)
	{
		$user=new user();
		$account=new account();
		$user->delete($id);
		$account->deletebyUser_id($id);
		redirect(base_url(""."admin/thanhvien"),'location');
	}
	public function update($id)
	{
		$user=new user();
		$user->update($id,$_POST['name'],$_POST['phone'],$_POST['mail'],$_POST['address'],$_POST['id_card']);
		redirect(base_url(""."admin/thanhvien"),'location');
	}
}
?>