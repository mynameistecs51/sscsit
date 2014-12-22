<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
	* 
	*/
	class Main extends CI_Controller {
		function __construct()
		{
        // Call the controll constructor
			parent::__construct();
			date_default_timezone_set("Asia/Bangkok");
			$this->load->model('m_main','',TRUE);
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
			// 'paper_group' => $this->db->get('paper_group')->result(),
				'paper_group' => $this->m_main->get_paper_group(),
				);
			$this->load->view('send-paper',$data);
		}

		public function add_project(){
			// $rand = rand(1111,9999);
			$date = date("Y_m_d_H_i");
			$file_project = "";
			$file_pictrue ="";

			if($_FILES['fileProject'] != null)
			{
				$file_project = $this->m_main->upload_fileproject();
			}

			//echo $file_project['file_name']."<br/>";
			// if($_FILES['filePictureProject'] != null){
			// 	// -------- upload pictuer project ---------------//
			// 	//$file_pictrue = $file_project = $this->m_main->upload_picture_project();
			// }

			$insert_paper = array(
				'paper_id' => '',
				'paper_sex' => $this->input->post('sex'),
				'paper_inputName1' => $this->input->post('inputName1'),
				'paper_sex2' => $this->input->post('sex2'),
				'paper_inputName2' => $this->input->post('inputName2'),
				'paper_inputProjectName_TH' => $this->input->post("inputProjectName_TH"),
				'paper_inputProjectName_EN' => $this->input->post('inputProjectName_EN'),
				'paper_group' => $this->input->post('select_group'),
				'paper_fileProject' => $file_project['file_name'],
				'paper_filePictureProject' => "null",
				'paper_date' => $date,
			'user_facebook_id' => '01',//$fb_data['me']['id'],
			);
			
			$this->db->insert('paper',$insert_paper);
			redirect('main','refresh');
		//print_r($insert_paper);
		}

		public function status_page(){
			$data = array(
				'title' => 'Status Paper',
				'get_paper' => $this->m_main->get_paper(), 
				);
			$this->load->view('status_paper',$data);
		}

		public function  admin()			// admin page
		{
			$data = array(
				'title' => 'Admin student symposim',
				'get_paper' => $this->m_main->get_paper(),		//all paper
				'get_user_committee' => $this->m_main->get_user_committee(),		//get user status committee
				'get_send_committee' => $this->m_main->get_committee(),			//get data table committee
				'get_count_paper_committee' => $this->db->group_by('paper_id')->get('committee')->result(),	//paper ที่ส่งแล้ว
				);
			$this->load->view('admin/index',$data);
		}

		public function admin_status_paper(){
			$data = array(
				'title' => "Status Paper",
				'get_paper' => $this->m_main->get_paper(),
				'get_paper_committee' => $this->db->group_by('paper_id')->get('committee')->result(),
			);
		
			$this->load->view('admin/admin_status_paper',$data);
		}
		public function login(){
			$data = array(
				'title' => "Login",
				'user_name' => $this->m_main->get_users(),
				);
			$this->load->view('login',$data);
			//print_r($data['user_name'][0]);
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

	public function send_paper(){			//send project for committee reading 
		$this->m_main->send_paper();
		redirect('main/admin','refresh');  
		
	}

	public function id_check($fb_data){
		$query_faceboo_id = $this->db->query("SELECT * FROM users WHERE user_facebook_id =".$fb_data['me']['id'])->num_rows();

		return $query_faceboo_id;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>