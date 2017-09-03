<?php 


class Crudkktegalrejo extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		if (($this->session->userdata('username')=="") && ($this->session->userdata('username')!='admintegalrejo'))
		{
			echo "<script>Alert('Hak akses dilarang');</script>";
		}			
		$this->load->model('m_data');
		$this->load->helper('url','log');

	}

	function index()
	{
		$data['username'] = $this->session->userdata('username');
		$admin=$this->session->userdata('username');
		$data['kk'] = $this->m_data->tampil_data($admin);
		$this->load->view('viewpuskesmas/tegalrejo/datakktegalrejo',$data);
	}

	function tambah()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('viewpuskesmas/tegalrejo/tambahdatakk',$data);
	}

	function tambah_aksi()
	{
		$tahunrekap = $this->input->post('pilhun');
		$admin = $this->input->post('admin');
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

		$data = array(
			'tahun' => $tahunrekap,
			'admin' => $admin,
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
		$this->m_data->input_data($data,'kk');
		helper_log("add", "menambahkan data");
		$this->session->set_flashdata('category_success', 'Berhasil Input Data.');
		redirect('index.php/puskesmas/tegalrejo/crudkktegalrejo/tambah');	
	}

	function hapus($nokk)
	{
		$where = array('nokk' => $nokk);
		$this->m_data->hapus_data($where,'kk');
		redirect('index.php/puskesmas/tegalrejo/crudkktegalrejo/index');
	}

	function edit($id)
	{
		$data['username'] = $this->session->userdata('username');
		$where = array('id' => $id);
		$data['kk'] = $this->m_data->edit_data($where,'kk')->result();
		$this->load->view('viewpuskesmas/tegalrejo/editdatakk',$data);
	}
	
	function update()
	{
		$id=$this->input->post('id');
		$tahunrekap = $this->input->post('pilhun');
		$admin = $this->input->post('admin');
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
			'admin' => $admin,
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
		redirect('index.php/puskesmas/tegalrejo/crudkktegalrejo/index');
	}

	function detail($id)
	{
		$admin=$this->session->userdata('username');
		$data['username'] = $this->session->userdata('username');
		$data['kk'] = $this->m_data->detaildata($id,$admin);
		$this->load->view('viewpuskesmas/tegalrejo/detailkktegalrejo',$data);
	}
	

}