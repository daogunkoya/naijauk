<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customers extends CI_Controller{


public function customer_list(){
	$data['customer']=$this->Customer->customer_list();
	$data['main']='customer_list';
	$this->load->view('templates/main',$data);
}

	public function new_customer(){

		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[1]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[1]');
		$this->form_validation->set_rules('middle_name','Middle Name','trim|min_length[1]');
		$this->form_validation->set_rules('date1','Date Of Birth','trim|min_length[1]');
		$this->form_validation->set_rules('contact','Contact Phone','trim|min_length[1]');
		$this->form_validation->set_rules('mobile','Mobile Phone','trim|min_length[1]');
		$this->form_validation->set_rules('email','Email','trim|min_length[1]');
		$this->form_validation->set_rules('postcode','Post Code','trim|min_length[1]');
		$this->form_validation->set_rules('line1','line1','trim|min_length[1]');
		$this->form_validation->set_rules('line2','line2 Phone','trim|min_length[1]');
		$this->form_validation->set_rules('town','town','trim|min_length[1]');
		$this->form_validation->set_rules('county','county','trim|min_length[1]');
		$this->form_validation->set_rules('country','country','trim|min_length[1]');
		$this->form_validation->set_rules('title','title','trim|min_length[1]');

		if($this->form_validation->run()==FALSE){

			$data['main']="new_customer";
			$this->load->view('Templates/main',$data);
		}
		else{
			$now = time();
			$date_reg=unix_to_human($now, TRUE, 'eu');
			$data=array('fname'=>$this->input->post('first_name'),
				'lname'=>$this->input->post('last_name'),
				'mname'=>$this->input->post('middle_name'),
				'dob'=>$this->input->post('date1'),
				'pnumber'=>$this->input->post('contact'),
				'mnumber'=>$this->input->post('mobile'),
				'postcode'=>$this->input->post('postcode'),
				'line1'=>$this->input->post('line1'),
				'line2'=>$this->input->post('line2'),
				'town'=>$this->input->post('town'),
				'county'=>$this->input->post('county'),
				'country'=>$this->input->post('country'),
				'title'=>$this->input->post('title'),
				'active'=>1,
				'custid'=>'NU'.$this->db->insert_id(),
				'date_reg'=>$date_reg
			
				);
			$id=$this->Customer->insert_customer($data);
			$this->session->set_flashdata('success','successfully registered');
			redirect('Customers/new_customer');
		}
	}

	public function customer_edit($id){
		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[1]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[1]');
		$this->form_validation->set_rules('middle_name','Middle Name','trim|min_length[1]');
		$this->form_validation->set_rules('date1','Date Of Birth','trim|min_length[1]');
		$this->form_validation->set_rules('contact','Contact Phone','trim|min_length[1]');
		$this->form_validation->set_rules('mobile','Mobile Phone','trim|min_length[1]');
		$this->form_validation->set_rules('email','Email','trim|min_length[1]');
		$this->form_validation->set_rules('postcode','Post Code','trim|min_length[1]');
		$this->form_validation->set_rules('line1','line1','trim|min_length[1]');
		$this->form_validation->set_rules('line2','line2 Phone','trim|min_length[1]');
		$this->form_validation->set_rules('town','town','trim|min_length[1]');
		$this->form_validation->set_rules('county','county','trim|min_length[1]');
		$this->form_validation->set_rules('country','country','trim|min_length[1]');
		$this->form_validation->set_rules('title','title','trim|min_length[1]');



		if($this->form_validation->run()==FALSE){
				$data['item']=$this->Customer->customer_get($id);
				$data['main']='customer_edit';
				$this->load->view('templates/main',$data);
				//$this->template->load('main','customer_edit',$data);

			}

			else{

				$data=array('fname'=>$this->input->post('first_name'),
				'lname'=>$this->input->post('last_name'),
				'mname'=>$this->input->post('middle_name'),
				'dob'=>$this->input->post('date1'),
				'pnumber'=>$this->input->post('contact'),
				'mnumber'=>$this->input->post('mobile'),
				'email'=>$this->input->post('email'),
				'postcode'=>$this->input->post('postcode'),
				'line1'=>$this->input->post('line1'),
				'line2'=>$this->input->post('line2'),
				'town'=>$this->input->post('town'),
				'county'=>$this->input->post('county'),
				'country'=>$this->input->post('country'),
				'title'=>$this->input->post('title')
				);

				if($this->Customer->update_customer($id,$data)){;
				redirect('Customers/customer_edit/'.$id);
					}

			


			}
		}

		public function new_receiver($id){
			$data['id']=$id;
			$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[1]');
			$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[1]');
			$this->form_validation->set_rules('middle_name','Middle Name','trim|min_length[1]');
			$this->form_validation->set_rules('type','Type','trim|required|min_length[1]');

			if($this->form_validation->run()==FALSE){

				$this->template->load('main','new_receiver');
			}

			else{

			}



		}
	}

?>