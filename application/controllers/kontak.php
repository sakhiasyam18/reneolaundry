<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kontak extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url'); // Tambahin ini
        $this->load->view('kontak');
        $this->load->view('templates/footer');
    }
}