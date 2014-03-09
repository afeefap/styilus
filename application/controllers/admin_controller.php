<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
class admin_controller extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$this->load->view("template/header");
		$this->load->view('admin/login');
		$this->load->view("template/footer");

	}
	public function admin_login()

	{
		$this->load->view("template/header");
		$this->load->view('admin/home');
		$this->load->view("template/footer");

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
	
	public function do_upload()
	{
		
		
		
		
		
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin/product/error', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('success', $data);
		}
	
	
	
	
	
	//insert in to db
	
	
				$this->load->model('upload_product');
				$data= array
				( 'model'        => $this->input->post('name'),
              'description'          => $this->input->post('description'),
              'image'       => $this->input->post('upload'),
              'price'        => $this->input->post('price'),
              'quantity'       => $this->input->post('quantity'),
			  'manufacture_id'        => $this->input->post('manufacturer'),
			  'category'        => $this->input->post('category'),
			  'related_product'        => $this->input->post('related_product')
			  
            );
				$this->upload_product->insert($data);
	}
     }
?>
</body>
</html>