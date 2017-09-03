<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Chart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_grafik');
        $this->load->helper('url','log');
    }

    public function index()
    {
        $data['report'] = $this->model_grafik->report();
        $this->load->view('grafik', $data);
    }
}