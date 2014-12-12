<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __constrct(){
		parent::__constrct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function send_paper(){
		$this->load->view('send-paper');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */