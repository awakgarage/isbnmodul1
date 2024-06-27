<?php 

class Rekap_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function showPengajuan(){
        $this->db->select('judul, isbn, editor, tanggalPengajuan, status');
         $this->db->from('buku');
         $query = $this->db->get();
         return $query;
    }

}