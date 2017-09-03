<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Chart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_datawilayah');
        $this->load->helper('url','log');
    }

    public function index()
    {
        $data['report'] = $this->m_datawilayah->report();
        $this->load->view('viewpuskesmas/mangunsari/grafik', $data);
    }
    public function progress()
    {
        $data['report'] = $this->m_datawilayah->progres();
        $this->load->view('viewpuskesmas/mangunsari/progres', $data);
    }

}