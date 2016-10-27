<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller{
	public function index(){
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[2]');
        $data=array();
	if($this->form_validation->run()==FALSE){
		
		$this->template->load('login','home');
		//$data['main']='home';
		//$this->load->view('templates/login',$data);
		}

		else{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$enc_password=md5($password);

			$user_id=$this->User_model->login($username,$enc_password);
			if($user_id){
				$user_data=array(
					'username' =>$username,
					'logged_in' =>true,
					'user_id' =>$user_id
					);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('success','you now logged in');
				redirect('home');
			}

			else{
				$this->session->set_flashdata('error','invalid login');
				redirect('login');


			}

		}

	}

}
?>