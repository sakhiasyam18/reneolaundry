<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tentangkami extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url'); // Tambahin ini
        $this->load->view('tentangkami');
        $this->load->view('templates/footer');
    }
}