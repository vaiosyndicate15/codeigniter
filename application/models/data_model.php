<?php
 
if (!defined('BASEPATH'))exit('No direct script access allowed');
 
class Data_model extends CI_Model
{
 
    public $table = 'kk';
    public $id = 'id';
    public $order = 'DESC';
 
    function __construct() {
        parent::__construct();
    }
 
    //ini untuk memasukkan kedalam tabel pegawai
    function loaddata($dataarray)
    {
        for ($i = 0; $i < count($dataarray); $i++) 
        {
            $data = array(
                'id'=>$dataarray[$i]['id'],
                'tahun'=>$dataarray[$i]['tahun'],
                'admin'=>$dataarray[$i]['admin'],
                'namakelurahan'=>$dataarray[$i]['namakelurahan'], 
                'kodepos'=>$dataarray[$i]['kodepos'],
                'nokk'=>$dataarray[$i]['nokk'],
                'namakepala'=>$dataarray[$i]['namakepala'],
                'alamat'=>$dataarray[$i]['alamat'],
                'rt'=>$dataarray[$i]['rt'],
                'rw'=>$dataarray[$i]['rw'],
                'persalinan'=>$dataarray[$i]['persalinan'],
                'kehamilan'=>$dataarray[$i]['kehamilan'],
                'asi'=>$dataarray[$i]['asi'],
                'timbang'=>$dataarray[$i]['timbang'],
                'gizi'=>$dataarray[$i]['gizi'],
                'airbersih'=>$dataarray[$i]['airbersih'], 
                'jamban'=>$dataarray[$i]['jamban'],
                'sampah'=>$dataarray[$i]['sampah'],
                'lantai'=>$dataarray[$i]['lantai'], 
                'fisik'=>$dataarray[$i]['fisik'],
                'merokok'=>$dataarray[$i]['merokok'], 
                'cucitangan'=>$dataarray[$i]['cucitangan'],
                'gosokgigi'=>$dataarray[$i]['gosokgigi'],
                'miras'=>$dataarray[$i]['miras'],
                'jpk'=>$dataarray[$i]['jpk'],
                'psn'=>$dataarray[$i]['psn']
            );
            //ini untuk menambahkan apakah dalam tabel sudah ada data yang sama
            //apabila data sudah ada maka data di-skip
            // saya contohkan kalau ada data nama yang sama maka data tidak dimasukkan
            $this->db->where('id', $this->input->post('id'));            
            if ($cek)
            {
                $this->db->insert($this->table, $data);
            }
        }
    }
}