<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __constrct(){
		parent::__constrct();
		$this->load->model('facebook_model','',TRUE);
	}

	public function index(){
		$fb_data = $this->session->userdata('fb_data'); // This array contains all the user FB information

		if((!$fb_data['uid']) or (!$fb_data['me']))
		{
            // If this is a protected section that needs user authentication
            // you can redirect the user somewhere else
            // or take any other action you need
			$data = array(
				'title' => "Student Symposium",	
				'fb_data' => $fb_data,
				'data_toggle' => 'data-toggle="modal"',
				'data_target' => ' data-target=".bs-example-modal-lg"',
				);	
			$this->load->view('login',$data);			
			//redirect('sci_con/list_news/','refresh');
		}
		else
		{
			$data  = array(
				'fb_data' => $fb_data,
				);
			$this->load->view('admin/index',$data);
			echo ' <img src="https://graph.facebook.com/'.$fb_data['uid'].'/picture" alt="" class="pic" />';
			echo $fb_data['me']['id']."<br/>";
			echo $fb_data['me']['name']."<br/>";
			echo $fb_data['me']['first_name']."<br/>";
			echo $fb_data['me']['last_name']."<br/>";
			echo $fb_data['me']['email']."<br/>";
			echo $fb_data['me']['gender']."<br/>";
			echo anchor('main/logout','logout');
		}
	}

	public function send_page(){
		$this->load->view('send-paper');
	}

	public function add_project(){
		$data_paper ="";

		$select_paper = $this->input->post('select_paper');
		foreach ($select_paper as $key_select_paper => $data_select) {
			$data_paper .= $data_select.",";	//หาค่า select paper จาก array
		}

		$insert_paper = array(
			'sex' => $this->input->post('sex'),
			'inputName1' => $this->input->post('inputName1'),
			'sex2' => $tihs->input->post('sex2'),
			'inputName2' => $tihs->input->post('inputName2'),
			'inputProjectName_TH' => $this->input->post("inputProjectName_TH"),
			'inputProjectName_EN' => $ths->input->post('inputProjectName_EN'),
			'select_paper' => substr($data_paper, 0,-1),
			'fileProject' => $this->input->post('fileProject'),
			'filePictureProject' => $this->input->post('filePictureProject'),
			);

	}

	public function status_page(){
		$this->load->view('services');
	}

	public function  admin(){
		$this->load->view('admin/index');
	}

	public function logout() {
		$fb_data = $this->session->userdata('fb_data'); // This array contains all the user FB information

		$this->session->sess_destroy();
		
		setcookie('PHPSESSID', '', time()-10, "/");
		$this->session->unset_userdata($fb_data);
		//$this->facebook->getLogoutUrl(array('next' => site_url('user/logout'));
		//redirect('sci_con/', 'refresh');  //redirect to the home page

		//redirect($fb_data['logoutUrl'],'refresh');
		redirect('main','refresh');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>