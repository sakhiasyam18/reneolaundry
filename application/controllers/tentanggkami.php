<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tentanggkami extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url'); // Tambahin ini
        $this->load->view('tentanggkami');
        $this->load->view('templates/footer');
    }
}
