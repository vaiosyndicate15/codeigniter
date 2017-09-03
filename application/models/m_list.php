<?php 

class M_list extends CI_Model{
	function tampil_data()
	{
		$this->db->order_by('cat_id','desc');
		return $this->db->get_where('catatanadmin',array('cat_username'=>$this->session->userdata('username')))->result();
	}

	function tampil_user()
	{
		$query=$this->db->query("SELECT COUNT(pus_id) AS jumlahadmin FROM tbpuskesmas WHERE pus_desc='Admin Puskesmas'");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}
	}

	function tampil_pesan()
	{
		$query=$this->db->query("SELECT nama,email,pesan,waktu FROM tbpesan ORDER BY waktu DESC LIMIT 5");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}	
	}

	function admin()
	{
		$query=$this->db->query("SELECT * FROM tbpuskesmas WHERE pus_desc='Admin Puskesmas'");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}
	}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
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