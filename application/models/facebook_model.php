<?php if (! defined('BASEPATH')) exit("No direct script access allowed");

class Facebook_model extends CI_model{

    public function __construct() {
        parent::__construct();
     

        $this->load->library('facebook');

    }

    public function id_check($fb_data){
        $query_faceboo_id = $this->db->query("SELECT * FROM users WHERE user_facebook_id =".$fb_data['id']);

        return $query_faceboo_id;
    }
}
?>