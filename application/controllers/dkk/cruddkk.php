<?php 


class Cruddkk extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')=="")
		{
			redirect('index.php/auth');
		}		
		$this->load->model('m_datadkk');
		$this->load->helper('url');

	}

	function index()
	{
		$data['username'] = $this->session->userdata('username');
		$data['datawilayah'] = $this->m_datadkk->tampil_data();
		$this->load->view('viewdkk/viewkelurahan',$data);
	}

	
	function caridata()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->m_data->search($keyword);
        $this->load->view('viewpuskesmas/caridatapuskesmas',$data);
    }

    function strata()
	{
		$data['strata'] = $this->m_datadkk->tampil_strata();
		$this->load->view('viewdkk/viewstrata',$data);
	}

	function tambahstrata()
    {
        $this->load->view('viewdkk/tambahstrata');
    }

}