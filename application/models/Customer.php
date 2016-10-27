
<?php
class Customer extends CI_MODEL{

	function __construct(){
		parent:: __construct();
		$this->table='trans2_customer';
	}

	public function insert_customer($data){
		$this->db->insert('trans2_customer',$data);
		$updateid= $this->db->insert_id();
		
		$unique_id='NU'.$updateid;
		$data=array('custid'=>$unique_id);
		$this->updateid($updateid,$data);
		return TRUE;
	}

	public function customer_list($limit=NULL)
	{
		$limit==""?"":$limit;
		$this->db->select('*');
		$this->db->from('trans2_customer');
		$this->db->order_by('date_reg','desc');
		$this->db->limit($limit);

		$query = $this->db->get();
		$query=$query->result();
		return $query;
	}

	private function updateid($id,$data){
		$this->db->where('id',$id);
		$this->db->update('trans2_customer',$data);

	}


	public function update_customer($id,$data){
		$this->db->where('id',$id);
		$this->db->update('trans2_customer',$data);
		return true;

	}


	

	public function customer_get($id){
		$this->db->where('id', $id);
		$query = $this->db->get('trans2_customer');	
		return $query->row();



	}

	
}

?>