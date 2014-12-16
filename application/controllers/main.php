<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __constrct(){
		parent::__constrct();
		$this->load->model('main_m','',TRUE);
		$this->load->model('facebook_model','',TRUE);
	}

	public function index(){
		$data = array(
			'title' => "Student Symposium",
			);
		$this->load->view('index',$data);
	}

	public function send_page(){
		$data = array(
			'title' => "Send paper",
			'paper_group' => $this->db->get('paper_group')->result(),//$this->main_m->get_paper_group(),
		);
		$this->load->view('send-paper',$data);
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
			'select_group' => substr($data_paper, 0,-1),
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

	public function get_paper_group(){
		$paper_group = $this->m_main->get_paper_group();

	}

	 public function id_check($fb_data){
     $query_faceboo_id = $this->db->query("SELECT * FROM users WHERE user_facebook_id =".$fb_data['me']['id'])->num_rows();

     return $query_faceboo_id;
 } 

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>