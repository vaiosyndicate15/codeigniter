<?php 

class M_datawilayah extends CI_Model{
	function tampil_data()
	{
		$this->db->order_by('tahun','desc');
		return $this->db->get_where('datawilayah',array('admin'=>$this->session->userdata('username')))->result();
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
	function report()
    {
        $query = $this->db->query("SELECT 
					        	namawil,persen1,persen2,persen3,persen4,persen5,persen6,persen7,persen8,
					        	persen9,persen10,persen11,persen12,persen13,persen14,persen15,persen16 from datawilayah"
							);
         
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $data)
            {
                $hasil[] = $data;
            }
            return $hasil;
        }
        else
        {
        	return false;
        }
    }
    function progres()
    {
        $query = $this->db->query("SELECT 
					        	namawil,(sum(persen1+persen2+persen3+persen4+persen5+persen6+persen7+persen8+
					        	persen9+persen10+persen11+persen12+persen13+persen14+persen15+persen16)/16) as progres from datawilayah group by namawil"
							);
         
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $data)
            {
                $hasil[] = $data;
            }
            return $hasil;
        }
        else
        {
        	return false;
        }
    }	
}