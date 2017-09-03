<?php    
class Model_grafik extends CI_Model
{
    function report()
    {
        $query = $this->db->query("SELECT kelurahan,total from strata");
         
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