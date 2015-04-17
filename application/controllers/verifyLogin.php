<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* ////
*/
session_start();

class VerifyLogin extends CI_Controller {
	function __construct(){
        // Call the Model constructor
		parent::__construct();
		$this->load->model('m_user','',TRUE);
	}

	function index(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('useremail','Useremail','trim|required|xss_clean');
		$this->form_validation->set_rules('userpassword','Userpassword','trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() === FALSE){
			redirect('main/login_view','refresh');
		}elseif($this->session->userdata('fb_data')){
			$session_data = $this->session->userdata('fb_data');
			//print_r($session_data);
			redirect('main','refresh');
		}else{
			redirect('main','refresh');
		}
	}

	function check_database(){
		//field input email
		$useremail = $this->input->post('useremail');
		$userpassword = $this->input->post('userpassword');

		$result = $this->m_user->login($useremail,$userpassword);

		if($result){
			$sess_array = array();
			foreach ($result as $row_result) {
					$sess_array = array(
						'user_id' =>$row_result->user_id,
						'user_first_name' => $row_result->user_first_name,
						'user_last_name' => $row_result->user_last_name,
						'user_email' => $row_result->user_email,
						'user_gender' => $row_result->user_gender,
						'user_status' => $row_result->user_status,
					);
					$this->session->set_userdata('fb_data',$sess_array);
			}
			return TRUE;
		}else{
			$this->form_validation->set_message('check_database','Invalid useremail && userpassword');
			return FALSE;
		}
	}

	public function logout(){
		$this->session->unset_userdata('fb_data');
		session_destroy();
		redirect('main','refresh');
	}
}
?>