<?php
class Shop extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->vfolder = 'shop_now';
    }

    public function index()
    {
		$error="";
			$this->load->view("template/header");
    		$this->load->view("$this->vfolder/shop_now",$error);
			$this->load->view("template/footer");

    }

    public function newacc()
    {
        $this->load->view("$this->vfolder/new_acc");
    }

    public function forgot()
    {
        $this->load->view("$this->vfolder/forgot");
    }

    public function ok()
    {
		if($this->input->post('username') && $this->input->post('password'))
		 {
            $this->load->model('create_acc'); 
            if($this->create_acc->authenticate($this->input->post('username'), $this->input->post('password')))
			{
                redirect('shop/login');
					
            }
            else {
			$error="Incorrect password or username";
			$this->load->view("template/header");
    		$this->load->view("$this->vfolder/shop_now",$error);
			$this->load->view("template/footer");				
            }
        }
        
	

    }
	    public function login()

	{
		$this->load->view("template/header");
	$this->load->view("$this->vfolder/profile");
	$this->load->view("template/footer");
	}

    public function notification()
    {

        $this->load->view("$this->vfolder/notification");
    }

    public function select_items()
    {

        $this->load->view("$this->vfolder/select_items");
    }

    public function mycart()
    {

        $this->load->view("$this->vfolder/mycart");
    }

    public function settings()
    {
        $this->load->view("$this->vfolder/settings");
    }

    public function profile()
    {
        $this->load->view("$this->vfolder/add");
    }

    public function logout()
    {
        $this->load->view("$this->vfolder/shop_now");
    }
	 public function newacc1()
		{
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mob', 'Mobile number', 'required');
		$this->form_validation->set_rules('fax', 'Fax', 'required');
		
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('postcode', 'Postcode', 'required');
		$this->form_validation->set_rules('district', 'District', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');

		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'Password Conformation', 'required');
		
			if ($this->form_validation->run() == FALSE)
			{
			$this->load->view('shop_now/new_acc');
			}
			else
			{			
						$this->load->model('create_acc');
						$d=date('Y-m-d');
						$pwd=md5($this->input->post('password'));
						
				$data1= array
			( 'firstname'        => $this->input->post('firstname'),
              'lastname'          => $this->input->post('lastname'),
              'email'       => $this->input->post('email'),
              'mob'        => $this->input->post('mob'),
              'fax'       => $this->input->post('fax'),
			  'password'        =>$pwd,
			  'status'        => 0,
			  'date' => $d,
			  'newsletter' => $this->input->post('newsletter')
			  );
			$data2= array
			( 'status'        => 0,
			  'date' => $d,
              'email'       => $this->input->post('email'),
			  'password'        => $pwd
			  	);
			$data3= array
			( 'firstname'        => $this->input->post('firstname'),
              'lastname'          => $this->input->post('lastname'),
              'address'       => $this->input->post('address'),
              'city'        => $this->input->post('city'),
              'postcode'       => $this->input->post('postcode'),
			  'state'        => $this->input->post('state'),
			  'date'        => $d,
			'district'        => $this->input->post('district')
			 );
				$this->create_acc->insert($data1,$data2,$data3);
				
				redirect('shop/index');
		 }
		
		}



}
