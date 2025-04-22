<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Testimoni_model'); // pastikan ini betul
    }

    public function index()
    {
        $data['testimoni'] = $this->Testimoni_model->get_all();
        $this->load->view('testimoni_view', $data);
    }

    public function tambah()
    {
        $this->Testimoni_model->insert($this->input->post());
        redirect('testimoni');
    }
}
