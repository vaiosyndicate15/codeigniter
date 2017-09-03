<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
 {

	public function index()
	 {
		$this->load->view('login/login');
	}

	public function cek_login()
	{
		$data = array('pus_username' => $this->input->post('username', TRUE),
						'pus_password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('login_model');
		$hasil = $this->login_model->cek_user($data);
		if ($hasil->num_rows() == 1)
		{
			foreach ($hasil->result() as $sess)
			{
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->pus_id;
				$sess_data['username'] = $sess->pus_username;
				$sess_data['lokasi'] = $sess->pus_loc;
				$sess_data['level'] = $sess->pus_level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')==1)
			{
				redirect('index.php/dkk/c_dkk');
			}
			else if ($this->session->userdata('level')==2)
			{
				if($this->session->userdata('lokasi')=="Kalicacing")
				{			
					helper_log("login", "admin puskesmas login");
					redirect('index.php/puskesmas/kalicacing/c_puskesmaskalicacing/index');	
				}
				else if($this->session->userdata('lokasi')=="Mangunsari")
				{			
					helper_log("login", "admin puskesmas login");
					redirect('index.php/puskesmas/mangunsari/c_puskesmasmangunsari/index');	
				}
				else if($this->session->userdata('lokasi')=="Cebongan")
				{			
					helper_log("login", "admin puskesmas login");
					redirect('index.php/puskesmas/cebongan/c_puskesmascebongan/index');	
				}		
				else if($this->session->userdata('lokasi')=="Tegalrejo")
				{			
					helper_log("login", "admin puskesmas login");
					redirect('index.php/puskesmas/tegalrejo/c_puskesmastegalrejo/index');	
				}
				else if($this->session->userdata('lokasi')=="Sidorejo Kidul")
				{			
					helper_log("login", "admin puskesmas login");
					redirect('index.php/puskesmas/sidorejokidul/c_puskesmassidorejokidul/index');	
				}
				else if($this->session->userdata('lokasi')=="Sidorejo Lor")
				{			
					helper_log("login", "admin puskesmas login");
					redirect('index.php/puskesmas/sidorejolor/c_puskesmassidorejolor/index');	
				}						
			}		
		}
		else
		{
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>