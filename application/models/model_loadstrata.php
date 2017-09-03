<?php
	class Model_loadstrata extends CI_Model
	{
		function data($kode)
		{
			$query=$this->db->query("SELECT tingkat FROM strata WHERE kodepos=$kode");
			if ($query->num_rows() > 0)
			{
				foreach ($query->result() as $value)
		    	{
			    	if($value->tingkat=="Sehat Paripurna")
			    	{
			    		echo "blue";
			    	} 
			    	if($value->tingkat=="Sehat Utama")
			    	{
			    		echo "green";
			    	} 
			    	if($value->tingkat=="Sehat Madya")
			    	{
			    		echo "yellow";
			    	} 
			    	if($value->tingkat=="Sehat Pratama")
			    	{
			    		echo "red";
			    	} 
		    	}
		    	return $query->result();
		    }
		    else
		    {
			  	return false;
			}
		}  	
	}	