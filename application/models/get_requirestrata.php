<?php
	class Get_requirestrata extends CI_Model
	{
		function data($kode)
		{
			$t1=0;
		    $t2=0;
		    $t3=0;
		    $t4=0;
			$query=$this->db->query("SELECT
					id,tahun,namakelurahan,kodepos,nokk,namakepala,alamat,rt,rw,persalinan,kehamilan,
					asi,timbang,gizi,airbersih,jamban,
					sampah,lantai,fisik,merokok,cucitangan,
					gosokgigi,miras,jpk,psn,
					IF(persalinan='ya',1,0)
					+IF(kehamilan='ya',1,0)
					+IF(asi='ya',1,0)
					+IF(timbang='ya',1,0)
					+IF(gizi='ya',1,0)
					+IF(airbersih='ya',1,0)
					+IF(jamban='ya',1,0)
					+IF(sampah='ya',1,0)
					+IF(lantai='ya',1,0)
					+IF(fisik='ya',1,0)
					+IF(merokok='ya',1,0)
					+IF(cucitangan='ya',1,0)
					+IF(gosokgigi='ya',1,0)
					+IF(miras='ya',1,0)
					+IF(jpk='ya',1,0)
					+IF(psn='ya',1,0)
					AS totalYa
					FROM kk WHERE kodepos=$kode");
				
			if ($query->num_rows() > 0)
			{
				foreach ($query->result() as $value)
		    	{    	
				
					$paripurna="Sehat Paripurna";
					$utama="Sehat Utama";
					$madya="Sehat Madya";
					$pratama="Sehat Pratama"; 
					$nilai = $value->totalYa;
					$tingkat="";
			    	if($nilai<5)
			    	{ 
			    		$t1++;
			    	}

					else if($nilai<10)
					{
						$t2++;
					}
					else if($nilai<14)
					{
						$t3++;
					}
					else
					{
						$t4++;
					}

		   		}
			    $value->jumlahpratama=$t1;
			    $value->jumlahmadya=$t2;
			    $value->jumlahutama=$t3;
			    $value->jumlahparipurna=$t4;
			  	return $value;
			}
			else
			{
			  	return false;
			}
		}  	
	}	