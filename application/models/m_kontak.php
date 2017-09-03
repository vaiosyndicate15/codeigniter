<?php 

class M_kontak extends CI_Model
{
	function admin()
	{
		$query=$this->db->query("SELECT * FROM tbpuskesmas WHERE pus_desc='Admin Puskesmas' ORDER BY pus_namalengkap");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}
	}

	function edit_data($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}	
}