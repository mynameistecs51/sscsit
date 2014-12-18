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

			$config['upload_path'] = 'images/file_project_doc';
			$config['allowed_types'] = 'doc|docx|pdf';
			$config['max_size'] = '7000';	//kb
			$config['file_name'] = trim($_FILES['fileProject']['name']);		//fiel_name
			$config['remove_spaces'] = TRUE;
			$file_project =$config['file_name'];			//name file project

			$this->load->library("upload",$config);		//library upload
			if($this->upload->do_upload('fileProject'))	//ถ้า upload ไม่มีปัญหา
			{
				 $data_fileProject = $this->upload->data();
				 //print_r($data_fileProject);
				return $file_project;

			}
			else
			{
				echo $this->upload->display_errors()."doc";
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
			$file_pictrue = $config['file_name'];		//name picture  project

			$this->load->library('upload',$config);
			if($this->upload->do_upload('filePictureProject'))
			{
				 $data_filePictureProject = $this->upload->data();
				 print_r($data_filePictureProject);
				return $file_pictrue;
			}
			else
			{
				echo $this->upload->display_errors()."picture";
			}
			return true;
		}
	}
	?>