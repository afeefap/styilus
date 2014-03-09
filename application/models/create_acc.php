<?php 
class create_acc extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();


    }
	
	
	function insert($data1,$data2,$data3)
	{
		
          $insert = $this->db->insert("customer",$data1);
		  $insert = $this->db->insert("user",$data2);
		  $insert = $this->db->insert("address",$data3);

	}
	  
	  function authenticate($username, $password)
	   {
        $this->db->where('email', $username);
        $this->db->where('password', $password);
		$q = $this->db->get('user');
	       return $q->num_rows()===1;	
	
    }

}
