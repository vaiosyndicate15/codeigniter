<?php 

class M_jumlahkk extends CI_Model{

	function tampil_user($admin)
	{
		$query=$this->db->query("SELECT COUNT(nokk) AS jumlahkk FROM kk WHERE admin='$admin'");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}
	}
	function tampil_data($admin)
	{
		$query=$this->db->query("SELECT COUNT(id) AS jumlahdata FROM datawilayah WHERE admin='$admin'");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}
	}
}