<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login_model extends CI_Model
	{

		public function cek_user($data)
		{
			$query = $this->db->get_where('tbpuskesmas', $data);
			return $query;
		}
		public function input_data($data,$table)
		{
			$this->db->insert($table,$data);
		}

	}

?>