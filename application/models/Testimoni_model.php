<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Ambil semua testimoni (urut dari terbaru)
    public function get_all_testimoni()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('testimoni')->result();
    }

    // Simpan testimoni baru
    public function insert_testimoni($data)
    {
        return $this->db->insert('testimoni', $data);
    }
}
