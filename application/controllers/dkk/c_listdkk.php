<?php 


class C_listdkk extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')=="")
		{
			redirect('index.php/auth');
		}				
		$this->load->model('m_list');
		$this->load->helper('url');

	}

	function index()
	{
		$data['username'] = $this->session->userdata('username');		
		$data['list'] = $this->m_list->tampil_data();
		$this->load->view('viewdkk/viewlistdkk',$data);
	}

	function tambah()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('viewdkk/addlistdkk',$data);
	}

	function tambah_aksi()
	{
		$username = $this->input->post('user');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');

		$data = array(
			'cat_username' => $username,
			'cat_judul' => $judul,
			'cat_isi' => $isi
			);
		$this->m_list->input_data($data,'catatanadmin');
		redirect('index.php/dkk/c_listdkk/index');	
	}

	function hapus($nokk)
	{
		$where = array('nokk' => $nokk);
		$this->m_data->hapus_data($where,'kk');
		redirect('index.php/puskesmas/crud/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['kk'] = $this->m_data->edit_data($where,'kk')->result();
		$this->load->view('viewpuskesmas/v_edit',$data);
	}
	
	function update()
	{
		$id=$this->input->post('id');
		$tahunrekap = $this->input->post('pilhun');
		$wilayah = $this->input->post('pilihwil');
		$kode = $this->input->post('pilkod');
		$kk = $this->input->post('nokk');
		$keluarga = $this->input->post('namakk');
		$alamat = $this->input->post('alamat');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$persalinan = $this->input->post('persalinan');
		$kehamilan = $this->input->post('kehamilan');
		$asi = $this->input->post('asi');
		$timbang = $this->input->post('timbang');
		$gizi = $this->input->post('gizi');
		$air = $this->input->post('air');
		$jamban = $this->input->post('jamban');
		$sampah = $this->input->post('sampah');
		$lantai = $this->input->post('lantai');
		$fisik = $this->input->post('aktif');
		$rokok = $this->input->post('rokok');
		$cuci = $this->input->post('cucitangan');
		$gigi = $this->input->post('gigi');
		$miras = $this->input->post('miras');
		$jpk = $this->input->post('jpk');
		$psn = $this->input->post('psn');

		$data = array
		(
			'id' => $id,
			'tahun' => $tahunrekap,
			'namakelurahan' => $wilayah,
			'kodepos' => $kode,
			'nokk' => $kk,
			'namakepala' => $keluarga,
			'alamat' => $alamat,
			'rt' => $rt,
			'rw' => $rw,
			'persalinan' => $persalinan,
			'kehamilan' => $kehamilan,
			'asi' => $asi,
			'timbang' => $timbang,
			'gizi' => $gizi,
			'airbersih' => $air,
			'jamban' => $jamban,
			'sampah' => $sampah,
			'lantai' => $lantai,
			'fisik' => $fisik,
			'merokok' => $rokok,
			'cucitangan' => $cuci,
			'gosokgigi' => $gigi,
			'miras' => $miras,
			'jpk' => $jpk,
			'psn' => $psn
		);

		$where = array
		(
			'id' => $id
		);
		$this->m_data->update_data($where,$data,'kk');
		helper_log("edit", "edit data kk");
		redirect('index.php/puskesmas/crud/index');
	}
	function kelola()
	{
		$this->load->view('viewpuskesmas/keloladatapuskesmas');
	}
	function caridata()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->m_data->search($keyword);
        $this->load->view('viewpuskesmas/caridatapuskesmas',$data);
    }
    function menu()
	{
		redirect('index.php/puskesmas/c_puskesmas/index');
	}

	function detail($id)
	{
		
		$data['kk'] = $this->m_data->detaildata($id);
		$this->load->view('viewpuskesmas/detailkk',$data);
	}
	

}