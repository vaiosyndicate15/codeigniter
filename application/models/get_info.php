<?php
	class Get_info extends CI_Model
	{
		function data($kode)
		{
			$query=$this->db->query("SELECT kelurahan, tingkat,total FROM strata WHERE kodepos=$kode");
			if ($query->num_rows() > 0)
			{
			   	return $query->row();
			}
			else
			{
			  	return false;
			}
		}  	
	}	