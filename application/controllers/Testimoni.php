<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        // Ambil semua testimoni dari database
        // Jika sudah ada kolom created_at, tambahkan pengurutan
        if ($this->db->field_exists('created_at', 'testimoni')) {
            $this->db->order_by('created_at', 'DESC');
        } else {
            // Jika tidak ada created_at, urutkan berdasarkan ID (terbaru di atas)
            $this->db->order_by('id', 'DESC');
        }
        $this->load->view('templates/header');

        $query = $this->db->get('testimoni');
        $data['testimoni'] = $query->result();

        $this->load->view('testimoni_view', $data);
        $this->load->view('templates/footer');
    }

    public function submit()
    {
        // Ambil input dari form
        $nama   = $this->input->post('nama');
        $isi    = $this->input->post('isi');
        $rating = $this->input->post('rating');

        // Data yang akan dimasukkan
        $data = [
            'nama' => $nama,
            'isi' => $isi,
            'rating' => $rating
        ];

        // Tambahkan created_at jika kolomnya ada
        if ($this->db->field_exists('created_at', 'testimoni')) {
            $data['created_at'] = date('Y-m-d H:i:s');
        }

        // Masukkan ke database
        $this->db->insert('testimoni', $data);

        // Redirect balik ke halaman testimoni
        redirect('testimoni');
    }
}