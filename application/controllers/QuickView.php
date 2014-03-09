<?php
class QuickView extends CI_Controller {
    
    public function index()
    {
        $this->load->view('quick_view/quick_view');
    }

    public function newacc()
    {
        $this->load->view('shop_now/new_acc');
    }

}
