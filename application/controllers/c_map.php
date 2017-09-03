<?php
	
	class C_map extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url','log');
			$this->load->model('m_pesan');			
		}

		function index()
		{
			$this->load->view("user/frontuser");			
		}
		function tambah_aksi()
		{
			$nama = $this->input->post('name');
			$email = $this->input->post('email');
			$pesan = $this->input->post('message');

			$data = array(
				'nama' => $nama,
				'email' => $email,
				'pesan' => $pesan
				);
			$this->m_pesan->input_data($data,'tbpesan');
			redirect('index.php/c_map/index');	
		}
		function peta()
		{
			$this->load->view("peta");
		}

	}