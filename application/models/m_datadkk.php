<?php 

class M_datadkk extends CI_Model
{
	function tampil_data()
	{
		$query=$this->db->query("SELECT * FROM datawilayah");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}
	}
	function tampil_strata()
	{
		$query=$this->db->query("SELECT * FROM strata");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}
	}
	function search($keyword)
    {
        $this->db->like('nokk',$keyword);
        $query  =   $this->db->get('kk');
        return $query->result();
    }	
}