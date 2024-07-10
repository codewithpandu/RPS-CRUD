<?php
// User_model.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function is_email_taken($email) {
        // Cek apakah email sudah terpakai
        $query = $this->db->get_where('user', array('email' => $email));
        return ($query->num_rows() > 0) ? true : false;
    }

    public function create_account($data) {
        // Simpan data ke dalam database
        $this->db->insert('user', $data);
    }
}
