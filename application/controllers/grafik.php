<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Grafik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_peter');
        $this->load->helper('url','log');
    }

    public function index()
    {
        $data['report'] = $this->model_peter->report();
        $this->load->view('grafikpeter', $data);
    }
}