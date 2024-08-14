<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model {

    private $table = 'mahasiswa';

    public function __construct() {
        parent::__construct();
        // Load database
        $this->load->database();
    }

    // Fungsi untuk mendapatkan semua data mahasiswa
    public function get_all_mahasiswa() {
        return $this->db->get($this->table)->result_array();
    }

    // Fungsi untuk menyimpan data mahasiswa
    public function insert_mahasiswa($data) {
        return $this->db->insert($this->table, $data);
    }

    // Fungsi untuk mendapatkan data mahasiswa berdasarkan NIM
    public function get_mahasiswa_by_nim($nim) {
        return $this->db->get_where($this->table, ['nim' => $nim])->row_array();
    }

    // Fungsi untuk memperbarui data mahasiswa
    public function update_mahasiswa($nim, $data) {
        $this->db->where('nim', $nim);
        return $this->db->update($this->table, $data);
    }

    // Fungsi untuk menghapus data mahasiswa
    public function delete_mahasiswa($nim) {
        $this->db->where('nim', $nim);
        return $this->db->delete($this->table);
    }
}
