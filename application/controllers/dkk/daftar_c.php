<?php
class Daftar_c extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')=="")
		{
			redirect('index.php/auth');
		}		
		$this->load->helper('url');
		$this->load->model('login_model');
		
	}
	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view("viewdkk/signup/tambahadmin",$data);
	}
	function tambah_aksi()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		$jenis = $this->input->post('desc');
		$lokasi = $this->input->post('locpus');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');

		$data = array(
			'pus_id' => $id,
			'pus_namalengkap' => $nama,
			'pus_notelp' => $telp,
			'pus_email' => $email,
			'pus_desc' => $jenis,
			'pus_loc' => $lokasi,
			'pus_username' => $username,
			'pus_password' => $password,
			'pus_level' => $level
			);
		$this->login_model->input_data($data,'tbpuskesmas');
		redirect('index.php/dkk/c_dkk/index');	
	}
}

?>