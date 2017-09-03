<?php 

class Model_strata extends CI_Model
{
	function tampil_strata()
	{
		$query=$this->db->query("SELECT * FROM strata ORDER BY tahun DESC");
		if ($query->num_rows() > 0)
		{
		   	return $query->result();
		}
		else
		{
		  	return false;
		}
	}

	function cek_data()
	{
		$tahunrekap = $this->input->post('pilhun');
		$kecamatan = $this->input->post('pilkec');
		$kelurahan = $this->input->post('pilihwil');
		$kode = $this->input->post('pilkod');
		$sampel = $this->input->post('sample');
		$pratama = $this->input->post('a');
		$p1 = $this->input->post('pa');
		$madya = $this->input->post('b');
		$p2 = $this->input->post('pb');
		$utama = $this->input->post('c');
		$p3 = $this->input->post('pc');
		$paripurna = $this->input->post('d');
		$p4 = $this->input->post('pd');
		$total = $this->input->post('e');
		$strata = $this->input->post('f');

		$data = array(
			'tahun' => $tahunrekap,
			'kecamatan' => $kecamatan,
			'kelurahan' => $kelurahan,
			'kodepos' => $kode,
			'sampel' => $sampel,
			'pratama' => $pratama,
			'persen1' => $p1,
			'madya' => $madya,
			'persen2' => $p2,
			'utama' => $utama,
			'persen3' => $p3,
			'paripurna' => $paripurna,
			'persen4' => $p4,
			'total' => $total,
			'tingkat' => $strata
			);
		$query = $this ->db->get_where('strata',array('kelurahan'=>$kelurahan));
		$row = $query->row_array();
		if(!$row['kelurahan']==$kelurahan)
		{
			$this->model_strata->input_data($data,'strata');	
			$this ->session->set_flashdata('info','Data Sukses Di Simpan');
			redirect('index.php/dkk/crud_strata/tambahstrata');
		}
		else
		{
			echo "<script>alert('Kelurahan sudah ada!'); history.go(-1)</script>";
		}
	}
	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

    function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
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
}