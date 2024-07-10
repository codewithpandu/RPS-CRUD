<?php
// Login_model.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function check_login($email, $password) {
        // Lakukan pengecekan login ke dalam database
        // Ganti bagian ini sesuai dengan metode autentikasi yang Anda gunakan, seperti menggunakan password_hash() dan password_verify()
        $query = $this->db->get_where('user', array('email' => $email, 'password' => $password));
        return $query->row();
    }
}


