<?php
defined('BASEPATH') or exit('No direct script access allowed');

class landingg extends CI_Controller
{

    public function index()
    {
        $this->load->view('landingg');
        $this->load->helper('url'); // Tambahin ini
        $this->load->view('templates/footer');
    }
    public function biru()
    {
        $this->load->view('templates/biru'); // ini yang dimuat lewat iframe
    }
}