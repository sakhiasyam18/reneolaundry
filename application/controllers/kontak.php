<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kontak extends CI_Controller
{

    public function index()
    {
        // Memuat view home.php
        $this->load->view('kontak');
    }
}