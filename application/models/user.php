<?php if (! defined('BASEPATH')) exit("No direct script access allowed");
/**
* check login users
*/
class User extends CI_model
{
	function __construct()
	{
	// Call the Model constructor
		parent::__construct();
	}

	function login($useremail,$userpassword){
		$this->db->select('id,username,password');
		$this->db->from('users');
		$this->db->where('useremail',$useremail);
		$this->db->where('userpassword',md5($password));

		$query = $this->db->get();

		if($query->num_rows() ===1){
			return $query->result();
		}else{
			return false;
		}
	}
}
?>