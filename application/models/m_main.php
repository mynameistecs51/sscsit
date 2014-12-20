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

		function upload_picture_project()
		{
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

		public function get_paper(){
			$query_paper = $this->db->query("SELECT
				`paper`.`paper_id`,
				`paper`.`paper_sex`,
				`paper`.`paper_inputName1`,
				`paper`.`paper_sex2`,
				`paper`.`paper_inputName2`,
				`paper`.`paper_inputProjectName_TH`,
				`paper`.`paper_inputProjectName_EN`,
				`paper`.`paper_group`,
				`paper`.`paper_fileProject`,
				`paper`.`paper_filePictureProject`,
				`paper`.`paper_date`,
				`paper`.`paper_user`,
				`paper_group`.`group_name`
				FROM
				`paper`
				INNER JOIN `paper_group` ON `paper`.`paper_group` = `paper_group`.`group_id`
				ORDER BY `paper`.`paper_id` DESC
				");
			return $query_paper->result();
		}

		public function get_committee(){
			$this->db->where('user_status','committee');
			$get_committee = $this->db->get('users');
			return  $get_committee->result();
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
	}
	?>