<?php
class user_model extends CI_MODEL{
 function __construct(){
 	parent::__construct();
 	$this->table='agent';

	}

	public function login($username,$enc_pasword){
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('email',$username);
		$this->db->where('password',$enc_pasword);
		
		$this->db->limit(1);

		$query=$this->db->get();

		if($query->num_rows()==1){
			return $query->row()->id;
		}

		else {
			return false;
		}


	}

}

?>


?>