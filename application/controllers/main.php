<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __constrct(){
		parent::__constrct();
	}

	public function index()
	{
		$this->load->view('index');
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
			'inputProjectName_ENG' => $ths->input->post('inputProjectName_ENG'),
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