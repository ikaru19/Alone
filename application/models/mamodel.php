	<?php 
 
class Mamodel extends CI_Model{
	function input_post($data,$table){
		$this->db->insert($table,$data);
	}
	function get_post(){
		return  $this->db->get('post');
	}
	function get_name($id){
		$q = $this->db->query("SELECT username FROM post INNER JOIN login ON post.user_id=login.user_id where login.user_id = $id LIMIT 1");
		$w = $q->result();
		$e = $w[0];
		return $e->username;
	}

	}