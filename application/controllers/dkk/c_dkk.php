
<?php
class C_dkk extends CI_Controller
 {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')!=1)
		{
			redirect('index.php/auth');
		}
		$this->load->helper('url');
		$this->load->model('m_list');
		
	}
	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$data['list'] = $this->m_list->tampil_data();
		$data['tot'] = $this->m_list->tampil_user();
		$data['pesan'] = $this->m_list->tampil_pesan();
		$this->load->view('viewdkk/dasboardadmindkk', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('index.php/auth');
	}
}

?>