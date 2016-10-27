<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller{


	public function logout(){
		
        // Message
     
        redirect('../index.php');
	}

}


?>