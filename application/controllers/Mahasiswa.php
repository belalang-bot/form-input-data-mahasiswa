<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model_mahasiswa model
        $this->load->model('model_mahasiswa');
    }

    public function index() {
        // Load the Form Helper
        $this->load->helper('form');
        
        // Fetch all mahasiswa data
        $data['mahasiswa'] = $this->model_mahasiswa->get_all_mahasiswa();
        
        // Load the view with data
        $this->load->view('form_input_mahasiswa', $data);
    }

    public function save() {
        $this->load->helper('form');

        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'prodi' => $this->input->post('prodi'),
            'email' => $this->input->post('email')
        );

        // Insert data into database
        $this->model_mahasiswa->insert_mahasiswa($data);
        
        // Redirect to form
        redirect('mahasiswa');
    }
}
