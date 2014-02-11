<?php
class shop_now_controller extends CI_Controller {
	public function index()
	{			$this->load->helper(array('form', 'url'));

				$this->load->view('shop_now/shop_now');
	}
	public function newacc()
	{
				
				$this->load->view('shop_now/new_acc');
	}
	public function forgot()
	{

				$this->load->view('shop_now/forgot');
	}
	
	public function ok()
	{
				$this->load->helper(array('form', 'url'));

				$this->load->view('shop_now/profile');
	}
	public function notification()
	{
				$this->load->helper(array('form', 'url'));

				$this->load->view('shop_now/notification');
	}
	public function select_items()
	{
				$this->load->helper(array('form', 'url'));

				$this->load->view('shop_now/select_items');
	}
	public function mycart()
	{
				$this->load->helper(array('form', 'url'));

				$this->load->view('shop_now/mycart');
	}
	public function settings()
	{
				$this->load->helper(array('form', 'url'));

				$this->load->view('shop_now/settings');
	}
	public function profile()
	{
				$this->load->helper(array('form', 'url'));

				$this->load->view('shop_now/add');
	}
	public function logout()
	{
				$this->load->helper(array('form', 'url'));

				$this->load->view('shop_now/shop_now');
	}
	
	
}