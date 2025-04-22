<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kontakk extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url'); // Tambahin ini
        $this->load->view('kontakk');
        $this->load->view('templates/footer');
    }
}
