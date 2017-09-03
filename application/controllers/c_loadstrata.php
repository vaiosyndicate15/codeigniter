<?php
	
	class C_loadstrata extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();		
			$this->load->model('model_loadstrata');
		}
		
		function ambilstrata()
		{
			$kode = $_GET['kode'];
      		$data["results"]= $this->model_loadstrata->data($kode);
      		var_dump($data);		
		}
	}