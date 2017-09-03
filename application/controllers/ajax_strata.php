<?php
	
	class Ajax_strata extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();		
			$this->load->model('get_requirestrata');
		}
		
		function ambilkategori()
		{
			$kode = $_GET['kode'];
      		$data["results"] = $this->get_requirestrata->data($kode);		   
       		echo json_encode($data["results"]);
		}
	}