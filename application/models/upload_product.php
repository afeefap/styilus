<?php 
class upload_product extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();


    }
	
	
	function insert($data)
	{
		
          $insert = $this->db->insert("product",$data);

	}

}
