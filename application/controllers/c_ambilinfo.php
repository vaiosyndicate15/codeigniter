<?php
	
	class C_ambilinfo extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();		
			$this->load->model('get_info');
		}
		
		function ambilinfo()
		{
			$kode = $_GET['kode'];
      		$data["results"] = $this->get_info->data($kode);
      		var_dump($data);
		}
	}