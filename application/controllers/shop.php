<?php
class Shop extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->vfolder = 'shop_now';
    }

    public function index()
    {
    $this->load->view("$this->vfolder/shop_now");
    }

    public function newacc()
    {
        $this->load->view('$this->vfolder/new_acc');
    }

    public function forgot()
    {
        $this->load->view('$this->vfolder/forgot');
    }

    public function ok()
    {
        $this->load->view("$this->vfolder/profile");
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


}
