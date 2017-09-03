<?php
if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
	}
	public function index()
	{
		if($this->session->userdata('isLogin') == FALSE)
		{
			redirect('index.php/login/login');
		}
		else
		{
			$this->load->model('login_model');
			$user = $this->session->userdata('username');
			$data['level'] = $this->session->userdata('level');
			$data['tblogin'] = $this->login_model->userData($user);
			$this->load->view('index.php/home', $data);
		}
	}
}
?>
