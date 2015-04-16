<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* ////
*/
session_start();

class VerifyLogin extends CI_Controller {
	function __construct(){
        // Call the Model constructor
		parent::__construct();
		$this->load->model('user','',TRUE);
	}

	function index(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('useremail','Useremail','trim(')
	}
}
?>