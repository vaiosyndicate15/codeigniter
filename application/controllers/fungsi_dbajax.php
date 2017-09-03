<?php
	
	class Fungsi_dbajax extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();		
			$this->load->model('get_require');
		}
		
		function ambilkategori()
		{
			$kode = $_GET['kode'];
      		$data["results"] = $this->get_require->data($kode);
       		echo json_encode($data["results"]);
		}
	}