<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Template {
    var $ci;
       
    function __construct() {
       $this->ci =& get_instance();
    }

   
    function load( $tpl_name, $view, $data = null) {
      

    	$data['main'] = $view;
    	$this->ci->load->view('/templates/'.$tpl_name, $data);
	}
}