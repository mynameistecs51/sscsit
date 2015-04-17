<?php if (! defined('BASEPATH')) exit("No direct script access allowed");
/**
* check login users
*/
class M_user extends CI_model
{
	function __construct()
	{
	// Call the Model constructor
		parent::__construct();
	}

	function login($useremail,$userpassword){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_email',$useremail);
		$this->db->where('user_password',$userpassword);

		$query = $this->db->get();

		if($query->num_rows() ===1){
			return $query->result();
		}else{
			return false;
		}
	}

	function check_user($fb_data){
		$check_user = $this->db->query('SELECT * FROM users WHERE user_email = "'.$fb_data['user_email'].'"');
		return $check_user;
	}
}
?>