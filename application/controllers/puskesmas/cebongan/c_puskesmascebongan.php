<?php
class C_puskesmascebongan extends CI_Controller
 {

	public function __construct()
	{
		parent::__construct();
		if (($this->session->userdata('username')=="") && ($this->session->userdata('username')!='admincebongan'))
		{
			echo "<script>Alert('Hak akses dilarang');</script>";
		}	
		$this->load->helper('url','log');
		$this->load->model('m_aktivitas');
		$this->load->model('m_jumlahkk');
		
	}
	public function index()
	{		
		$admin=	$this->session->userdata('username');
		$data['username'] = $this->session->userdata('username');
		$data['logging'] = $this->m_aktivitas->ambil_log();		
		$data['jml'] = $this->m_jumlahkk->tampil_user($admin);		
		$data['jmlh'] = $this->m_jumlahkk->tampil_data($admin);
		$this->load->view('viewpuskesmas/cebongan/dashboaradmincebongan', $data);
	}

	public function logout()
	{
		helper_log("logout", "logout");
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('lokasi');
		session_destroy();		
		redirect('index.php/auth');
	}
}

?>