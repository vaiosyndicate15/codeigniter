<?php
	class Get_require extends CI_Model
	{
		function data($kode)
		{
				$query=$this->db->query("SELECT namakelurahan, 
												COUNT(nokk) AS jumlahKK, 
												SUM(IF(persalinan='ya',1,0)) AS persalinanYa,
												SUM(IF(kehamilan='ya',1,0)) AS kehamilanYa,
												SUM(IF(asi='ya',1,0)) AS asiYa,
												SUM(IF(timbang='ya',1,0)) AS timbangYa,
												SUM(IF(gizi='ya',1,0)) AS giziYa,
												SUM(IF(airbersih='ya',1,0)) AS airbersihYa,
												SUM(IF(jamban='ya',1,0)) AS jambanYa,
												SUM(IF(sampah='ya',1,0)) AS sampahYa,
												SUM(IF(lantai='ya',1,0)) AS lantaiYa,
												SUM(IF(fisik='ya',1,0)) AS fisikYa,
												SUM(IF(merokok='ya',1,0)) AS merokokYa,
												SUM(IF(cucitangan='ya',1,0)) AS cucitanganYa,
												SUM(IF(gosokgigi='ya',1,0)) AS gosokgigiYa,
												SUM(IF(miras='ya',1,0)) AS mirasYa,
												SUM(IF(jpk='ya',1,0)) AS jpkYa,
												SUM(IF(psn='ya',1,0)) AS psnYa
												FROM kk
												WHERE kodepos=$kode");
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