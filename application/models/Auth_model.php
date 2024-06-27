<?php

class Auth_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    //model untuk menangkap aksi login
    public function getData($email, $password)
    {

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query;
    }

    public function registerUser($data)
    {
        // Simpan data registrasi pengguna baru ke dalam tabel 'users'
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
}
