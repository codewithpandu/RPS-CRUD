<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rps extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Rps_model');
    }

    function index() {
        // Tampilkan daftar RPS

        $this->load->view('Home/header');
        $data['data_rps'] = $this->Rps_model->get_rps_list();
        $this->load->view('Rps/index', $data);
        $this->load->view('Home/footer');
    }

    function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Simpan data ke database
            $data = array(
                'id_rps' => $this->input->post('id'),
                'nama_prodi' => $this->input->post('nama_prodi'),
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'nama_dosen_penyusun' => $this->input->post('nama_dosen_penyusun'),
                'nik_dosen_penyusun' => $this->input->post('nik_dosen_penyusun'),
                'tgl_disusun' => $this->input->post('tgl_disusun'),
                'tgl_berlaku' => $this->input->post('tgl_berlaku'),
            );
            $this->Rps_model->create_rps($data);

            redirect('Rps');
        } else {
            $this->load->view('Rps/tambah_rps');
        }
    }

    function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Simpan data ke database
            $data = array(
                'id_rps' => $this->input->post('id_rps'),
                'nama_prodi' => $this->input->post('nama_prodi'),
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'nama_dosen_penyusun' => $this->input->post('nama_dosen_penyusun'),
                'nik_dosen_penyusun' => $this->input->post('nik_dosen_penyusun'),
                'tgl_disusun' => $this->input->post('tgl_disusun'),
                'tgl_berlaku' => $this->input->post('tgl_berlaku'),
            );
            $this->Rps_model->update_rps($id, $data);

            redirect('Rps');
        } else {
            $data['rps'] = $this->Rps_model->get_rps_by_id($id);
            $this->load->view('Rps/update_rps', $data);
        }
    }

    function delete($id) {
        // hapus rps
        $this->Rps_model->delete_rps($id);
        redirect('Rps');
    }

    function submit($id) {
        // Ambil data dari database berdasarkan id
        $data['rps'] = $this->Rps_model->get_rps_by_id($id);

        // load library
        $this->load->view('Rps/cetak', $data);
    }
}