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
		$this->form_validation->set_rules('useremail','Useremail','trim|required|xss_clean');
		$this->form_validation->set_rules('userpassword','Userpassword','trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() === FALSE){
			redirect('main/login','refresh');
		}else{
			redirect('main','refresh');
		}
	}

	function check_database(){
		//field input email
		$useremail = $this->input->post('useremail');

		$result = $this->user->login($useremail,$userpassword);

		if($result){
			$sess_array();
			foreach ($result as $row_result) {
					$sess_array = array(
						'id' =>$row->id,
						'username' => $row->username,
					);
					$this->session->set_userdata('fb_data',$sess_array);
			}
			return TRUE;
		}else{
			$this->form_validation->set_message('check_database','Invalid useremail && userpassword');
			return FALSE;
		}
	}
}
?>