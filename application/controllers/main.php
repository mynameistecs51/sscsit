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
		$fb_data = $this->session->userdata('fb_data');

		if(!$fb_data['me']){
			$data = array(
				'title' => "Student Symposium",
				'fb_data' => $fb_data,
				'get_paper' => $this->m_main->get_paper(),
				'get_status_paper' => $this->m_main->get_status_paper(), 
				'committee_profile' => $this->db->query('SELECT * FROM users WHERE user_status = "admin" OR user_status ="committee" ')->result(),
				);
			$this->load->view('index',$data);
		}elseif($this->facebook_model->id_check($fb_data)->num_rows() <= 0)  {	//login ครั้งแรก

			$data = array(
				'title' => "Student Symposium",
				'fb_data' => $fb_data,
				);
			$this->load->view('login',$data);
		} else{
			foreach ($this->facebook_model->id_check($fb_data)->result() as $key_users => $row_users) {
				switch ($row_users->user_status) {
					case 'student_udru':
					redirect('main/home','refresh');
					break;
					// --------------end status student udru ------------//
					case 'student_paper':
					redirect('main/home','refresh');
					break;
					// --------------end status student paper ------------//
					case 'student_public':
					redirect('main/home','refresh');
					break;
					// --------------end status student public ------------//
					case 'teacher_public':
					redirect('main/home','refresh');
					break;
					// --------------end status teacher public  ------------//
					case 'people_public':
					redirect('main/home','refresh');
					break;
					// --------------end status people public ------------//
					case 'admin':
					redirect('main/admin','refresh');
					break;
					// --------------end status admin ------------//
					case 'committee':
					redirect('main/committee_check_paper','refresh');
					break;
					// --------------end status committee ------------//
					case 'supper_admin':
					redirect('main/admin','refresh');
					break;
					// --------------end status subper_admin ------------//

					default:
					$data = array(
						'title' => "Student Symposium",
						'fb_data' => $fb_data,
						);
					$this->load->view('index',$data);
					break;
				}
			}
		}
	}

	public function home(){
		$fb_data = $this->session->userdata('fb_data');
		$data = array(
			'title' => "Student Symposium",
			'fb_data' => $fb_data,
			'get_paper' => $this->m_main->get_paper(),
			'get_status_paper' => $this->m_main->get_status_paper(), 
			'committee_profile' => $this->db->query('SELECT * FROM users WHERE user_status = "admin" OR user_status ="committee" ')->result(),
			);
		$this->load->view('index',$data);
	}

	public function insert_users(){
		$this->m_main->insert_users(); 
		redirect('main','refresh');
	}

	public function send_page($error =''){
		$fb_data = $this->session->userdata('fb_data');
		if(!$fb_data['me']['id']){
			$data = array(
				'title'       => "Send paper",
				'fb_data'     => $fb_data,
				'paper_group' => $this->m_main->get_paper_group(),
				'error'       => $error,
				);
			$this->load->view('send-paper',$data);
			echo "3--";
		}else{
			$get_paper = $this->db->query('SELECT * FROM paper WHERE user_facebook_id ='.$fb_data['me']['id'])->result();
			foreach ($get_paper as $key_get_paper => $value_get_paper) {
				if($value_get_paper->user_facebook_id === $fb_data['me']['id']){
					$data = array(
						'title' => "UPDATE PAPER",
						'fb_data' => $fb_data,
						'paper_group' => $this->m_main->get_paper_group(),
						'get_paper_data' => $get_paper,
						);
					$this->load->view('paper_update',$data);
					echo "1---";
				}
			}
		}
	}

	public function add_project(){
		$fb_data = $this->session->userdata('fb_data');
		// $rand = rand(1111,9999);
		$date = date("Y_m_d_H_i");
		$file_project = "";
		$file_pictrue ="";

		if($_FILES['fileProject']['name'] != null && $fb_data['me']['id'] != null)
		{
			$file_project = $this->m_main->upload_fileproject();		//upload file

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
			'user_facebook_id' => $fb_data['me']['id'],//$fb_data['me']['id'],
			);

		$this->db->insert('paper',$insert_paper);	//insert data to database
	}else{
		$error = "error";
		redirect('main/send_page/'.$error,'refresh');
	}

	redirect('main','refresh');
}

public function update_project(){
	$fb_data = $this->session->userdata('fb_data');
// $rand = rand(1111,9999);
	$date = date("Y_m_d_H_i");
	$file_project = "";

	if(!empty($_FILES['fileProject']['name']) ){
		$paper_query = $this->db->query("SELECT * FROM paper WHERE user_facebook_id=".$fb_data['me']['id'])->result();
		echo '<meta charset="UTF-8" /> ';
		foreach ($paper_query as $key_paper => $value_paper) {
			echo $value_paper->paper_fileProject;
			unlink('./images/file_project_doc/'.$value_paper->paper_fileProject);  //delete file project again update
			$file_project = $this->m_main->upload_fileproject(); //อัพโหลดไฟล์ใหม่
		}
		$update_paper = array(
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
			'user_facebook_id' => $fb_data['me']['id'],//facebook id
			);
		$this->db->where('user_facebook_id',$fb_data['me']['id']);
		$this->db->update('paper',$update_paper);

		redirect('main','refresh');
	}else{
		echo "กรุณาเลือกไฟล์";	//ทำใหม่ให้มันดี ๆ
	}

}

public function status_page(){
	$fb_data = $this->session->userdata('fb_data');

	$data = array(
		'title' => 'Status Paper',
		'fb_data' => $fb_data,
		'get_paper' => $this->m_main->get_paper(),
		'get_status_paper' => $this->m_main->get_status_paper(),
		);
	$this->load->view('status_paper',$data);
		//print_r($data);

}

	public function  admin()	{		// admin page
		$fb_data = $this->session->userdata('fb_data');
		if(!($fb_data['me']['id'])){
			redirect('main','refresh');
		}else{
			foreach ($this->facebook_model->id_check($fb_data)->result() as $admin_row) {
				if($admin_row->user_status === "admin" || $admin_row->user_status === "supper_admin"){

					$data = array(
						'title' => 'Admin student symposim',
						'fb_data' => $fb_data,
						'get_paper' => $this->m_main->get_paper(),		//all paper
						'get_user_committee' => $this->m_main->get_user_committee(),		//get user status committee
						'get_send_committee' => $this->m_main->get_committee(),			//get data table committee
						'get_count_paper_committee' => $this->db->group_by('paper_id')->get('committee')->result(),	//paper ที่ส่งแล้ว
						'check_paper' => $this->db->group_by('user_facebook_id')->get('committee')->result(),	//โครงงานที่ต้องตรวจ
						'count_paper_check' => $this->db->query('SELECT * FROM `check_paper` group by paper_id')->result(),		// count โครงงานที่ตรวจแล้ว
						);
					$this->load->view('admin/index',$data);

				}else{
					redirect('main','refresh');
				}
		}	//------- /. end foreach./------//
	}

}

public function admin_status_paper(){
	$fb_data = $this->session->userdata('fb_data');
	$data = array(
		'fb_data' => $fb_data,
		'title' => "Status Paper",
		'get_paper' => $this->m_main->get_paper(),  //all paper
		'get_paper_committee' => $this->db->group_by('paper_id')->get('committee')->result(),  //paper ที่ส่งแล้ว
		'check_paper' => $this->db->where('user_facebook_id' , $fb_data['me']['id'])->get('committee')->result(),	//โครงงานที่ต้องตรวจ
		'get_paper' => $this->m_main->get_paper(),
		'get_status_paper' => $this->m_main->get_status_paper(),
		);

	$this->load->view('admin/admin_status_paper',$data);
}

public function committee_check_paper(){
	$fb_data = $this->session->userdata('fb_data');
	if(!($fb_data['me']['id'])){
		redirect('main','refresh');
	}else{
		foreach ($this->facebook_model->id_check($fb_data)->result() as $admin_row) {
			if($admin_row->user_status === "committee" || $admin_row->user_status === "admin"){
				$data = array(
					'fb_data' => $fb_data,
					'title' => "committee check paper",
							'get_paper' => $this->m_main->get_paper(),  //all paper
							//'get_paper_committee' => $this->db->where($fb_data['me']['id'])->get('committee')->group_by('paper_id')->result(),  //paper ที่ส่งแล้ว
							'get_paper_committee' => $this->db->query('SELECT * FROM committee WHERE user_facebook_id ='.$fb_data['me']['id'].' ORDER BY paper_id')->result(),
							'check_paper' =>$this->m_main->check_paper($fb_data),	//โครงงานที่ต้องตรวจ
							'get_committee_checkpaper' => $this->m_main->get_committee_checkpaper(),		 //paper ที่ตรวจแล้ว
							'count_paper_check' => $this->db->query('SELECT * FROM `check_paper` GROUP BY  paper_id')->result(),		//
							);

				$this->load->view('admin/committee_check_paper',$data);
			}else{
				redirect("main",'refresh');
			}
			}	//---------/. end foreach ./-----------//
		}
	}


	public function update_checked_paper(){  //update committee checkpaper แกไขกรรมการตรวเอกสาร
		$paper_id  = $this->input->post('project_id');
		$committee_id = $this->input->post('user_facebook_id');
		$committee_status = $this->input->post('checked_paper');
		$committee_comment = $this->input->post('comment');
		$committee_check_id = $this->input->post('check_id');

		$data = array(
			//'check_id' => $committee_check_id,
			'user_facebook_id' => $committee_id,
			'paper_id' => $paper_id,
			'check_status' => $committee_status,
			'check_comment' => $committee_comment,
			);
		$this->db->where('check_id',$committee_check_id);
		$this->db->update('check_paper',$data);

		redirect('main/committee_check_paper','refresh');
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
		$this->facebook_model->logout();
		redirect('main','refresh');
	}

	public function get_paper_group(){
		$paper_group = $this->m_main->get_paper_group();

	}

	public function send_paper(){			//send project for committee reading
		$this->m_main->send_paper();
		redirect('main/admin','refresh');

	}

	public function update_send_paper(){		// update committee send paper reading
		$paper_id = $this->input->post('paper_id');
		$committee_id = $this->input->post('commit_id');
		$committee_select = $this->input->post('select_committee');

		$data = array(
			//'comm_id' => $committee_id,
			'user_facebook_id' => $committee_select[0],
			'paper_id' => $paper_id,
			);
		$this->db->where('comm_id', $committee_id);
		$this->db->update('committee', $data);
		redirect('main/admin','refresh');
	}

	public function download($file_name){		// download file project
		$this->load->helper('download');
		$data = file_get_contents("images/file_project_doc/".$file_name); // Read the file's contents
		$name = $file_name;
		echo force_download($name,$data);
		redirect('main/index','refresh');
	}

	public function data_Table(){		//show status paper
		$fb_data = $this->session->userdata('fb_data');
		if(!($fb_data['me']['id'])){
			redirect('main','refresh');
		}else{
			foreach ($this->facebook_model->id_check($fb_data)->result() as $admin_row) {
				if($admin_row->user_status === "admin" || $admin_row->user_status === "supper_admin"){
					$data = array(
						'title' => 'manage status',
						'fb_data' => $fb_data,
						'get_users' => $this->m_main->get_users(),
						'get_paper' => $this->m_main->get_paper(),		//all paper
						'get_user_committee' => $this->m_main->get_user_committee(),		//get user status committee
						'get_send_committee' => $this->m_main->get_committee(),			//get data table committee
						'get_count_paper_committee' => $this->db->group_by('paper_id')->get('committee')->result(),	//paper ที่ส่งแล้ว
						//'check_paper' => $this->db->group_by('user_facebook_id')->get('committee')->result(),	//โครงงานที่ต้องตรวจ
						'get_paper_committee' => $this->db->group_by('paper_id')->get('committee')->result(),  //paper ที่ส่งแล้ว
						'count_paper_check' => $this->db->query('SELECT * FROM `check_paper` GROUP BY paper_id')->result(),		//
						);
					$this->load->view('data',$data);
				} // .. end if ..//
			} //. end foreach..//
		}	// .end else
	} //end function


	public function manage_status(){
		$my_status = $this->input->post('my-checkbox');

		if($my_status === "on"){
			$update_status = $this->m_main->update_user_status($status = "committee");
			echo  $update_status;
			print_r($update_status);
		}else{
			$update_status = $this->m_main->update_user_status($status = "user");
			echo  $update_status;
		}
	}

	public function checked_paper(){
		$fb_data = $this->session->userdata('fb_data');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('checked_paper','checked_paper','required|callback_checked');

		if($this->form_validation->run() == FALSE){
			$data = array(
				'fb_data' => $fb_data,
				'title' => "committee check paper",
				'get_paper' => $this->m_main->get_paper(),  //all paper
				'get_paper_committee' => $this->db->group_by('paper_id')->get('committee')->result(),  //paper ที่ส่งแล้ว
				'check_paper' =>$this->m_main->check_paper($fb_data),	//โครงงานที่ต้องตรวจ
				'javascript_myModal' => '
				<script type="text/javascript">
					$(window).load(function(){
						$("#myModal").modal("show");
					});
		</script>',
		);
			$this->load->view('admin/committee_check_paper',$data);
		}else{
			$insert_check_paper =  $this->m_main->checked_paper();
			redirect('main/committee_check_paper','refresh');
		}
	}


	public function checked(){
		if($this->input->post('checked_paper') != ''){
			return true;
		}else{
			$this->form_validation->set_message('checked_paper', 'กรุณาเลือก');
			echo "<script>alert('error');</script>";
			return false;
		}
	}

	public function profile(){
		$fb_data = $this->session->userdata('fb_data');
		$data = array(
			'title' => "Profile",
			'fb_data' => $fb_data,
			'data_profile' => $this->m_main->get_users_id($fb_data),
		);
		$this->load->view('profile',$data);
	}

}


?>