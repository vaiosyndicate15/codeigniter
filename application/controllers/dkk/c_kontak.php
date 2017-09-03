<?php 


class C_kontak extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')=="")
		{
			redirect('index.php/auth');
		}		
		$this->load->model('m_kontak');
		$this->load->helper('url');

	}

	function index()
	{
		$data['username'] = $this->session->userdata('username');	
		$data['kontak'] = $this->m_kontak->admin();
		$this->load->view('viewdkk/kontak',$data);
	}
	
	function edit($id)
	{
		$where = array('pus_id' => $id);
		$data['username'] = $this->session->userdata('username');
		$data['kontak'] = $this->m_kontak->edit_data($where,'tbpuskesmas')->result();
		$this->load->view('viewdkk/editadmin',$data);
	}

	function update()
	{
		$id=$this->input->post('id');
		$nama = $this->input->post('nama');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		$password = md5($this->input->post('pw'));
			$data = array(
			'pus_id' => $id,
			'pus_namalengkap' => $nama,
			'pus_notelp' => $telp,
			'pus_email' => $email,
			'pus_password' => $password
			);
		$where = array
		(
			'pus_id' => $id
		);
		$this->m_kontak->update_data($where,$data,'tbpuskesmas');
		redirect('index.php/dkk/c_kontak/index');
	}

	function hapus($id)
	{
		$where = array('pus_id' => $id);
		$this->m_kontak->hapus_data($where,'tbpuskesmas');
		redirect('index.php/dkk/c_kontak/index');
	}

}