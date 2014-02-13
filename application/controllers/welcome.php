<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -  
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('first.php');
    }
    
    public function aboutus()
    {
        $this->load->view('home/about_us');
    }
    
    public function image()
    {
        $this->load->view('index.php');
    }
    
    public function career()
    {
        $this->load->view('home/career');
    }
    
    public function gurantee()
    {
        $this->load->view('home/gurantee');
    }
    
    public function contactus()
    {
        $this->load->view('home/contact_us');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
