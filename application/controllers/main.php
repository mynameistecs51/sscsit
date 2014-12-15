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
			echo $fb_data['me']['id']."<br/>";
			echo $fb_data['me']['name']."<br/>";
			echo $fb_data['me']['first_name']."<br/>";
			echo $fb_data['me']['last_name']."<br/>";
			echo $fb_data['me']['email']."<br/>";
			echo $fb_data['me']['gender']."<br/>";
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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */