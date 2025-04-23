<?php
defined('BASEPATH') or exit('No direct script access allowed');

class layanann extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->helper('url'); // Tambahin ini
        $this->load->view('layanann');
        $this->load->view('templates/footer');
    }
}
