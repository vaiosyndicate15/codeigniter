<?php 


class Crudkelsidorejolor extends CI_Controller
{

	function __construct()
	{
		parent::__construct();	
		if (($this->session->userdata('username')=="") && ($this->session->userdata('username')!='adminsidorejolor'))
		{
			echo "<script>Alert('Hak akses dilarang');</script>";
		}			
		$this->load->model('m_datawilayah');
		$this->load->helper('url','log');

	}

	function index()
	{
		$data['username'] = $this->session->userdata('username');
		$data['datawilayah'] = $this->m_datawilayah->tampil_data();
		$this->load->view('viewpuskesmas/sidorejolor/datasidorejolor',$data);
	}

	function tambah()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('viewpuskesmas/sidorejolor/tambahdatakel',$data);
	}

	function tambah_aksi()
	{
		$tahunrekap = $this->input->post('pilhun');
		$admin = $this->input->post('admin');
		$namakelurahan = $this->input->post('pilihwil');
		$kode = $this->input->post('pilkod');
		$sampel = $this->input->post('sampel');
		$persalinan = $this->input->post('persalinan');
		$persen1 = $this->input->post('persen1');
		$kehamilan = $this->input->post('kehamilan');
		$persen2 = $this->input->post('persen2');
		$asi = $this->input->post('asi');
		$persen3 = $this->input->post('persen3');
		$timbang = $this->input->post('timbang');
		$persen4 = $this->input->post('persen4');
		$gizi = $this->input->post('gizi');
		$persen5 = $this->input->post('persen5');
		$air = $this->input->post('air');
		$persen6 = $this->input->post('persen6');
		$jamban = $this->input->post('jamban');
		$persen7 = $this->input->post('persen7');
		$sampah = $this->input->post('sampah');
		$persen8 = $this->input->post('persen8');
		$lantai = $this->input->post('lantai');
		$persen9 = $this->input->post('persen9');
		$fisik = $this->input->post('aktif');
		$persen10 = $this->input->post('persen10');
		$rokok = $this->input->post('rokok');
		$persen11 = $this->input->post('persen11');
		$cuci = $this->input->post('cucitangan');
		$persen12 = $this->input->post('persen12');
		$gigi = $this->input->post('gigi');
		$persen13 = $this->input->post('persen13');
		$miras = $this->input->post('miras');
		$persen14= $this->input->post('persen14');
		$jpk = $this->input->post('jpk');
		$persen15 = $this->input->post('persen15');
		$psn = $this->input->post('psn');
		$persen16 = $this->input->post('persen16');

		$data = array(
			'tahun' => $tahunrekap,
			'admin' => $admin,
			'namawil' => $namakelurahan,
			'kodewil' => $kode,
			'sampel' => $sampel,
			'persalinan' => $persalinan,
			'persen1' => $persen1,
			'kehamilan' => $kehamilan,
			'persen2' => $persen2,
			'asi' => $asi,
			'persen3' => $persen3,
			'timbang' => $timbang,
			'persen4' => $persen4,
			'gizi' => $gizi,
			'persen5' => $persen5,
			'air' => $air,
			'persen6' => $persen6,
			'jamban' => $jamban,
			'persen7' => $persen7,
			'sampah' => $sampah,
			'persen8' => $persen8,
			'lantai' => $lantai,
			'persen9' => $persen9,
			'fisik' => $fisik,
			'persen10' => $persen10,
			'rokok' => $rokok,
			'persen11' => $persen11,
			'cuci' => $cuci,
			'persen12' => $persen12,
			'gigi' => $gigi,
			'persen13' => $persen13,
			'miras' => $miras,
			'persen14' => $persen14,
			'jpk' => $jpk,
			'persen15' => $persen15,
			'psn' => $psn,
			'persen16' => $persen16
			);
		$this->m_datawilayah->input_data($data,'datawilayah');
		helper_log("add", "menambahkan data");
		redirect('index.php/puskesmas/sidorejolor/crudkelsidorejolor/index');	
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['username'] = $this->session->userdata('username');
		$data['datawilayah'] = $this->m_datawilayah->edit_data($where,'datawilayah')->result();
		$this->load->view('viewpuskesmas/sidorejolor/editdatakel',$data);
	}

	function update()
	{
		$id = $this->input->post('id');
		$tahunrekap = $this->input->post('pilhun');		
		$admin = $this->input->post('admin');
		$namakelurahan = $this->input->post('pilihwil');
		$kode = $this->input->post('pilkod');
		$sampel = $this->input->post('sampel');
		$persalinan = $this->input->post('persalinan');
		$persen1 = $this->input->post('persen1');
		$kehamilan = $this->input->post('kehamilan');
		$persen2 = $this->input->post('persen2');
		$asi = $this->input->post('asi');
		$persen3 = $this->input->post('persen3');
		$timbang = $this->input->post('timbang');
		$persen4 = $this->input->post('persen4');
		$gizi = $this->input->post('gizi');
		$persen5 = $this->input->post('persen5');
		$jhon = $this->input->post('jhon');
		$persen6 = $this->input->post('persen6');
		$jamban = $this->input->post('jamban');
		$persen7 = $this->input->post('persen7');
		$sampah = $this->input->post('sampah');
		$persen8 = $this->input->post('persen8');
		$lantai = $this->input->post('lantai');
		$persen9 = $this->input->post('persen9');
		$fisik = $this->input->post('aktif');
		$persen10 = $this->input->post('persen10');
		$rokok = $this->input->post('rokok');
		$persen11 = $this->input->post('persen11');
		$cuci = $this->input->post('cucitangan');
		$persen12 = $this->input->post('persen12');
		$gigi = $this->input->post('gigi');
		$persen13 = $this->input->post('persen13');
		$miras = $this->input->post('miras');
		$persen14= $this->input->post('persen14');
		$jpk = $this->input->post('jpk');
		$persen15 = $this->input->post('persen15');
		$psn = $this->input->post('psn');
		$persen16 = $this->input->post('persen16');

		$data = array(
			'id' => $id,
			'tahun' => $tahunrekap,
			'admin' => $admin,
			'namawil' => $namakelurahan,
			'kodewil' => $kode,
			'sampel' => $sampel,
			'persalinan' => $persalinan,
			'persen1' => $persen1,
			'kehamilan' => $kehamilan,
			'persen2' => $persen2,
			'asi' => $asi,
			'persen3' => $persen3,
			'timbang' => $timbang,
			'persen4' => $persen4,
			'gizi' => $gizi,
			'persen5' => $persen5,
			'air' => $jhon,
			'persen6' => $persen6,
			'jamban' => $jamban,
			'persen7' => $persen7,
			'sampah' => $sampah,
			'persen8' => $persen8,
			'lantai' => $lantai,
			'persen9' => $persen9,
			'fisik' => $fisik,
			'persen10' => $persen10,
			'rokok' => $rokok,
			'persen11' => $persen11,
			'cuci' => $cuci,
			'persen12' => $persen12,
			'gigi' => $gigi,
			'persen13' => $persen13,
			'miras' => $miras,
			'persen14' => $persen14,
			'jpk' => $jpk,
			'persen15' => $persen15,
			'psn' => $psn,
			'persen16' => $persen16
			);
		$where = array
		(
			'id'=>$id
		);
		
		$this->m_datawilayah->update_data($where,$data,'datawilayah');
		helper_log("edit", "update data");
		redirect('index.php/puskesmas/sidorejolor/crudkelsidorejolor/index');

	}


	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_datawilayah->hapus_data($where,'datawilayah');
		redirect('index.php/puskesmas/sidorejolor/crudkelsidorejolor/index');
	}


}