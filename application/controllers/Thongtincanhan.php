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
}
?>