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
		$insert_paper = array(
			'sex' => $this->input->post(),
			'inputName1' => $this->input->post(),
		);
		print_r($insert_paper);
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