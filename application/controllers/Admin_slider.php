<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_slider extends CI_Controller {
	public function view()
	{
		if ( ! file_exists(APPPATH.'views/admin/slider.php'))
        	{
		show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Trangchu";
        }
		$sld=new slider();
		$data['slider']=$sld->getall();
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="Trang chủ";
		$this->load->view('templates/header', $data);
        $this->load->view('templates/navibar', $data);
        $this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/slider', $data);
		$this->load->view('templates/footer', $data);
	}
	public function view2($id)
	{
		if ( ! file_exists(APPPATH.'views/admin/slider.php'))
        	{
		show_404();
		}
		if(!isset($_SESSION['user_data']))
		{
			$_SESSION['user_data']['username']="Guess";
			$_SESSION['user_data']['userid']="";
			$_SESSION['pre_page']="Trangchu";
        }
		$sld=new slider();
		$data['slider']=$sld->searchbyID($id);
		$data['user_data']=$_SESSION['user_data'];
		$data['title'] ="Trang chủ";
		$this->load->view('templates/header', $data);
        $this->load->view('templates/navibar', $data);
        $this->load->view('templates/admin-menu', $data);
		$this->load->view('admin/slider_detail', $data);
		$this->load->view('templates/footer', $data);
	}
	public function insert()
	{
		$sld=new slider();
		if(isset($_POST['submit'])){
			if($_POST['submit']=='Thêm')
			{
				$error=array();
				$file_name = $_FILES['hinh']['name'];
				$file_size =$_FILES['hinh']['size'];
				$file_tmp =$_FILES['hinh']['tmp_name'];
				$file_type=$_FILES['hinh']['type'];

				$expensions= array("image/jpeg","image/jpg","image/png");
				if(in_array($file_type,$expensions)== false){
					$errors[]="extension not allowed, please choose a JPEG or PNG file.";
				}
				if($file_size > 10097152){
					$errors[]='File size must be excately 10 MB';
				 }
				 if(empty($errors)==true){
					$sld->insert($_POST['url']);
					$new=$sld->getlastID();
					$new=$new[0]['id'];
					$config['upload_path']          = './image/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']="slider_".$new.".png";
                $config['max_size']             = 10000;
                $config['max_width']            = 2048;
                $config['max_height']           = 1500;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('hinh'))
                {
                        $error = array('error' => $this->upload->display_errors());
						redirect(base_url(""."admin/slider"),'location');
                }
                else
                {
					redirect(base_url(""."admin/slider"),'location');
                }
				 }else{
					redirect(base_url(""."admin/slider"),'location');
				 }
			}
			else if($_POST['submit']=='Đổi hình')
			{
				print_r($_POST);
				print_r($_FILES);
			}
		}
	}
	public function delete($id)
	{
		$sld=new slider();
		$sld->delete($id);
		unlink('image/slider_'.$id.'.png');
		redirect(base_url(""."admin/slider"),'location');
	}
	public function update($id)
	{
		$sld=new slider();
		if(isset($_POST['submit'])){
			if(count($sld->searchbyID($id))==1)
			{
				if(isset($_POST['url']))
				{
					$sld->update($id,$_POST['url']);
				}
				if(isset($_FILES['hinh']))
				{
					$error=array();
				$file_name = $_FILES['hinh']['name'];
				$file_size =$_FILES['hinh']['size'];
				$file_tmp =$_FILES['hinh']['tmp_name'];
				$file_type=$_FILES['hinh']['type'];

				$expensions= array("image/jpeg","image/jpg","image/png");
				if(in_array($file_type,$expensions)== false){
					$errors[]="extension not allowed, please choose a JPEG or PNG file.";
				}
				if($file_size > 10097152){
					$errors[]='File size must be excately 10 MB';
				 }
				 if(empty($errors)==true){
					$config['overwrite']=true;
					$config['upload_path']          = './image/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['file_name']="slider_".$id.".png";
                	$config['max_size']             = 10000;
                	$config['max_width']            = 2048;
                	$config['max_height']           = 1500;
                	$this->load->library('upload', $config);
                	if ( ! $this->upload->do_upload('hinh'))
                	{
                        $error = array('error' => $this->upload->display_errors());
						redirect(base_url(""."admin/slider/$id"),'location');
                	}
                	else
                	{
						redirect(base_url(""."admin/slider/$id"),'location');
                	}
				 }else{
					print_r($errors);
					redirect(base_url(""."admin/slider/$id"),'location');
				 }
				}
			}
		}
	}
}
?>