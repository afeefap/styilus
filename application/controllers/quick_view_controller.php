<?php
class Quick_view_controller extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');

				$this->load->view('quick_view/quick_view');
	}
	public function newacc()
	{

				$this->load->view('shop_now/new_acc');
	}
	
	
}
