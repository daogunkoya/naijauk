<?php
class manage extends CI_MODEL{
	function __construct(){
		parent:: __construct();
		$this->table='trans2_rate';
	}

public function add($data){
	$this->db->insert($this->table,$data);
	return TRUE;

}

public function get_trans(){
	$query=$this->db->get('trans2');
	return $query->result();

}

}

?>