<?php if (! defined('BASEPATH')) exit("No direct script access allowed");
	/**
	* 
	*/
	class Main_m extends CI_model
	{		
		public function __construct()
		{
			parent::__construct();
		}

		public function get_paper_group(){
			$paper_group =  $this->db->get('paper_group');
			return $paper_group->result();
			print_r($paper_group);
		}
	}
	?>