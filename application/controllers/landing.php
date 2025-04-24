<?php
defined('BASEPATH') or exit('No direct script access allowed');

class landing extends CI_Controller
{

    public function index()
    {
        $this->load->view('landing');
        $this->load->helper('url'); // Tambahin ini
        $this->load->view('templates/footer');
    }
}
