<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller{

	public function index(){
		$limit=6;
		$data['customer']=$this->Customer->customer_list($limit);
		$data['main']='home';
		//$this->load->view('index');
		//$this->template->load('main','home',$data);
		$this->load->view('templates/main',$data);
	}
}

?>