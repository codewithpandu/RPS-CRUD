<?php
// Login.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model dan library yang dibutuhkan
        $this->load->model('Login_model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function authenticate() {
        // Ambil input dari form
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Panggil fungsi untuk memeriksa login dari model
        $user = $this->Login_model->check_login($email, $password);

        if ($user) {
            // Jika data login benar, set session dan redirect ke halaman sukses
            $userdata = array(
                'user_id' => $user->id,
                'email' => $user->email,
                // Tambahkan data lain yang diperlukan ke dalam session jika diperlukan
            );

            $this->session->set_userdata($userdata);
            redirect('Home'); // Ganti dengan halaman setelah login berhasil
        } else {
            // Jika data login salah, tampilkan pesan error dan redirect kembali ke halaman login
            $this->session->set_flashdata('error', 'email or password is incorrect');
            redirect('login');
        }
    }

    public function logout() {
        // Hapus semua session yang ada
        $this->session->sess_destroy();
        redirect('login');
    }
}
