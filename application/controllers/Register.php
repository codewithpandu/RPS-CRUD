<?php
// Register.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model dan library yang dibutuhkan
        $this->load->model('Register_model');
    }

    public function index() {
        $this->load->view('register');
    }

    public function create_account() {
        // Ambil data dari form registrasi
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        // Lakukan validasi (misalnya: email harus unik)
        // Di sini bisa ditambahkan validasi lain sesuai kebutuhan

        // Contoh validasi: cek apakah username sudah terpakai
        $is_email_taken = $this->Register_model->is_email_taken($email);
        if ($is_email_taken) {
            $this->session->set_flashdata('error', 'email is already taken');
            redirect('register');
        } else {
            // Jika data valid, simpan ke dalam database
            $data = array(
                'email' => $email,
                'password' => $password, 
                'email' => $email,
                // Tambahkan data lain yang diperlukan
            );
            $this->Register_model->create_account($data);
            $this->session->set_flashdata('success', 'Account created successfully');
            redirect('login'); // Redirect ke halaman login setelah registrasi berhasil
        }
    }
}
