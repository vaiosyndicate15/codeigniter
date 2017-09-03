<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_aktivitas extends CI_Model 
{
 
    public function ambil_log()
    {
        $this->db->order_by('log_time','desc');
        $this->db->limit(5);
		return $this->db->get_where('tabel_log',array('log_user'=>$this->session->userdata('username')))->result();
    }
}