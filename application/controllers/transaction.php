<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class transaction extends CI_Controller{

	public function bou_sold(){
		$this->form_validation->set_rules('bou_rate','bou_rate','trim|required|min_length[1]');
		$this->form_validation->set_rules('sold_rate','sold_rate','trim|required|min_length[1]');

		if($this->form_validation->run()==FALSE){

			$this->template->load('main','bou_sold');

		}
		else{
			
			$data=array('bou'=>$this->input->post('bou_rate'),
				'sold'=>$this->input->post('sold_rate')
				);
			$this->manage->add($data);
			$this->session->set_flashdata('success','succesfully submitted');
			redirect('transaction/bou_sold');

		}
	}

	public function report(){
		$data['report']=$this->manage->get_trans();
		$data['main']='report';
		//$this->template->load('main','report',$data);
		$this->load->view('Templates/main',$data);

	}

	
}
?>

