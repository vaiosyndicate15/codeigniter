<?php 

class M_data extends CI_Model
{
	function tampil_data($admin)
	{
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
			FROM kk WHERE admin='$admin' ORDER BY tahun DESC");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}
		return result();
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
	function detaildata($id,$admin)
	{		
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
			FROM kk WHERE id=$id AND admin='$admin'");
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