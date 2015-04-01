<?php if (! defined('BASEPATH')) exit("No direct script access allowed");
	/**
	* 
	*/
	class M_main extends CI_model
	{
		function __construct()
		{
        // Call the Model constructor
			parent::__construct();
		}

		public function get_paper_group(){
			$paper_group =  $this->db->get('paper_group');
			return $paper_group->result();
			//print_r($paper_group);
		}

		function upload_fileproject(){

			$config['upload_path'] = './images/file_project_doc';
			$config['allowed_types'] = 'doc|docx|pdf';
			$config['max_size'] = '7000';	// 7mb
			$config['file_name'] = $this->input->post('inputProjectName_EN');		//fiel_name
			$config['remove_spaces'] = TRUE;
			//$file_project = $config['file_name'];		//name file project

			$this->load->library("upload",$config);		//library upload
			if($this->upload->do_upload('fileProject'))	//ถ้า upload ไม่มีปัญหา
			{
				$data_fileProject = $this->upload->data();
				 // print_r($data_fileProject);
				return $data_fileProject;

			}
			else
			{
				echo $this->upload->display_errors()."error_doc";
			}

			return true;
		}

		function upload_picture_project(){
			$config['upload_path'] = 'images/file_project_picture';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '5000';	//kb
			$config['file_name'] = $this->input->post('inputProjectName_EN');		//fiel_name
			$config['remove_spaces'] = TRUE;
			$file_pictrue = rename($config['file_name'],$this->input->post('inputProjectName_EN').$config['file_ext']);		//name picture  project

			$this->load->library('upload',$config);
			if($this->upload->do_upload('filePictureProject'))
			{
				$data_filePictureProject = $this->upload->data();
				 //print_r($data_filePictureProject);
				return $file_pictrue;
			}
			else
			{
				echo $this->upload->display_errors()."picture";
			}
			return true;
		}

		public function upload_picture_payment(){

			$config['upload_path'] = './images/file_payment';
			$config['allowed_types'] = 'jpg|jpeg|png|';
			$config['max_size'] = '7000';	// 7mb
			$config['file_name'] = $this->input->post('fb_id');	//fiel_name
			$config['remove_spaces'] = TRUE;
			//$file_project = $config['file_name'];		//name file project

			$this->load->library("upload",$config);		//library upload
			if($this->upload->do_upload('file_payment'))	//ถ้า upload ไม่มีปัญหา
			{
				$data_fileProject = $this->upload->data();
				 // print_r($data_fileProject);
				return $data_fileProject;
			}
			else
			{
				echo $this->upload->display_errors()."picture payment error";
			}

			return true;
		}

		public function get_paper(){
			$query_paper = $this->db->query("SELECT
				paper.*, paper_group.*, users.*
				FROM (paper INNER JOIN paper_group ON  paper.paper_group = paper_group.group_id) 
				INNER JOIN users ON(users.user_facebook_id = paper.user_facebook_id)
				ORDER BY paper.paper_id DESC
				");
			return $query_paper->result();
		}

		public function get_user_committee(){
			$this->db->where('user_status','committee');
			$this->db->or_where('user_status','admin');
			$get_user_committee = $this->db->get('users');
			return  $get_user_committee->result();
		}

		public function check_paper($fb_data){
			$qery_check_paper = $this->db->query("SELECT
				`users`.*,
				`committee`.*,
				`paper`.*,
				`paper_group`.*
				FROM
				`committee`
				INNER JOIN `paper` ON `committee`.`paper_id` = `paper`.`paper_id`
				INNER JOIN `users` ON `users`.`user_facebook_id` =
				`committee`.`user_facebook_id`
				INNER JOIN `paper_group` ON `paper`.`paper_group` = `paper_group`.`group_id`
				WHERE `committee`.`user_facebook_id` ='".$fb_data['me']['id']."'
				");
			return $qery_check_paper->result();
		}

		public function send_paper(){
			$committee = $this->input->post('select_committee');
			$paper_id = $this->input->post('paper_id');
			$select_committee = array();
		foreach ($committee as $key => $value_select_committee) 		// อ่านค่าจาก multi  select
		{
			$select_committee[] .= $value_select_committee;		//เก็บจำนวน กรรมการว่ามีใครบ้าง

		}
		for($i=0;	$i < count($select_committee); $i++)
		{
			$data = array(
				'comm_id' => '',
				'user_facebook_id' => $select_committee[$i],
				'paper_id' => $paper_id,
				);
			$this->db->insert('committee',$data);
		}
		return true;
	}

	public function insert_users(){
		$data = array(
			'user_facebook_id' => $this->input->post('inputFB_ID'),
			'user_fb_name' => $this->input->post('inputFB_name'),
			'user_email' => $this->input->post('inputEmail'),
			'user_gender' => $this->input->post('inputGender'),
			'user_first_name' => $this->input->post('inputFirst_name'),
			'user_last_name' => $this->input->post('inputLast_name'),
			'user_status' => $this->input->post('status_user'),
			);
		$this->db->insert('users',$data);
		return true;
	}

	public function get_users(){
		$get_users = $this->db->query("SELECT * FROM users WHERE user_status != 'admin' AND user_status != 'supper_admin' ");
		return $get_users->result();
	}

	public function get_users_id($fb_data){
		$query_user_id = $this->db->query("SELECT
			users.*,paper.*,paper_group.*
			FROM `users`
			INNER JOIN paper
			ON users.user_facebook_id = paper.user_facebook_id
			INNER JOIN paper_group 
			ON paper_group.group_id = paper.paper_group 
			WHERE users.user_facebook_id ='".$fb_data['uid']."'  ");
		return $query_user_id->result();
	}
	public function  get_committee(){
		$query_table_committee = $this->db->query("SELECT
			`users`.`user_fb_name`,
			`users`.`user_first_name`,
			`users`.`user_last_name`,
			`users`.`user_email`,
			`users`.`user_gender`,
			`users`.`user_status`,
			`committee`.`comm_id`,
			`committee`.`user_facebook_id`,
			`committee`.`paper_id`
			FROM
			`users`
			INNER JOIN `committee` 
			ON `users`.`user_facebook_id` =	`committee`.`user_facebook_id`
			");
		return $query_table_committee->result();
	}

	public function update_user_status($status){
		$user_id = $this->input->post('user_id');
		$user = $this->input->post('user');

		$update_status = $this->db->query('UPDATE users
			SET user_status = "'.$status.'"
			WHERE user_facebook_id = "'.$user_id.'"
			');
		return $update_status;
	}

	public function checked_paper(){		//insert data กรรมการตรวจเอกสาร 
		$fb_data = $this->session->userdata('fb_data');
		$data = array(
			'user_facebook_id' => $fb_data['me']['id'],
			'check_status' => $this->input->post('checked_paper'),
			'check_comment' => $this->input->post('comment'),
			'paper_id' => $this->input->post('project_id')
			);
		$this->db->insert('check_paper',$data);
		return true;
	}

	public function get_committee_checkpaper(){
		$fb_data = $this->session->userdata('fb_data');

		$get_committee_checkpaper = $this->db->query('SELECT * FROM check_paper WHERE user_facebook_id = "'.$fb_data['me']['id'].'" GROUP BY paper_id'
			);
		return $get_committee_checkpaper->result();
	}

	public function get_status_paper(){
		$get_status_paper = $this->db->query('SELECT
			`paper`.*,
			`check_paper`.*,
			`paper_group`.*,
			`users`.*
			FROM
			`check_paper`
			INNER JOIN `paper` ON `paper`.`paper_id` = `check_paper`.`paper_id`
			INNER JOIN `paper_group` ON `paper`.`paper_group` = `paper_group`.`group_id`
			INNER JOIN `users` ON `check_paper`.`user_facebook_id` = `users`.`user_facebook_id`
			');
		return $get_status_paper->result();
	}

}
?>