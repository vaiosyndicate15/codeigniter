<?php    
class Model_peter extends CI_Model
{
    function report()
    {
        $query = $this->db->query("SELECT bulan,tahun,count(bulan) as data  from tbsurat where tahun=2016  group by tahun,bulan");
         
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