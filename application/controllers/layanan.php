<?php
defined('BASEPATH') or exit('No direct script access allowed');

class layanan extends CI_Controller
{

    public function index()
    {
        // Memuat view home.php
        $this->load->view('layanan');

        //helper url 
        $this->load->helper('url');
    }
}