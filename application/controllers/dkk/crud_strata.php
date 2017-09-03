<?php 
	class Crud_strata extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('username')=="")
			{
				redirect('index.php/auth');
			}		
			$this->load->model('model_strata');
			$this->load->helper('url');

		}

	    function index()
		{
			$data['username'] = $this->session->userdata('username');
			$data['strata'] = $this->model_strata->tampil_strata();
			$this->load->view('viewdkk/strataview',$data);
		}

		function tambahstrata()
	    {
	    	$data['username'] = $this->session->userdata('username');
	        $this->load->view('viewdkk/addstrata',$data);
	    }

	    function tambah_aksi()
		{			
			$this->model_strata->cek_data();
			$this->session->set_flashdata('category_success', 'Berhasil Input Data.');
					
		}
		function hapus($id)
		{
			$where = array('id' => $id);
			$this->model_strata->hapus_data($where,'strata');
			redirect('index.php/dkk/crud_strata/index');
		}
		function edit($id)
		{
			$where = array('id' => $id);
			$data['username'] = $this->session->userdata('username');
			$data['strata'] = $this->model_strata->edit_data($where,'strata')->result();
			$this->load->view('viewdkk/updatestrata',$data);
		}

		function update()
		{	
			$id=$this->input->post('id');
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

			$where = array
			(
				'id' => $id
			);
			$this->model_strata->update_data($where,$data,'strata');
			redirect('index.php/dkk/crud_strata/index');
		}

}