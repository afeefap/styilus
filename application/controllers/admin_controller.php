<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
class admin_controller extends CI_Controller {
	public function index()
	{

		$this->load->view('admin/login');


	}
	public function admin_login()

	{
		$this->load->view('admin/home');


	}
	
	public function upload()
	{
		$this->load->view('admin/product/upload');


	}
	public function updations()
	{
		$this->load->view('admin/product/updations');


	}	
	public function top10()
	{
		$this->load->view('admin/product/top10');


	}
	public function produpdate()
	{
		$this->load->view('admin/product/produpdate');


	}
	public function neworders()
	{
		$this->load->view('admin/product/neworders');


	}
	public function menu()
	{
		$this->load->view('admin/product/menu');


	}
	public function current1()
	{
		$this->load->view('admin/product/current1');


	}
	public function available()
	{
		$this->load->view('admin/product/available');


	}
	
	public function allproducts()
	{
		$this->load->view('admin/product/allproducts');


	}
	
	
     }
?>
</body>
</html>