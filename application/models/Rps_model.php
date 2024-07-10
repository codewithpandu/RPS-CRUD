<?php
class Rps_model extends CI_Model {
    // ambil id
    function get_rps_by_id($id) {
        return $this->db->get_where('tb_rps', array('id_rps' => $id))->row();
    }

    // Metode untuk menambahkan RPS ke database
    public function create_rps($data) {
        $this->db->insert('tb_rps', $data);
    }

    // Metode untuk mendapatkan daftar RPS
    public function get_rps_list() {
        return $this->db->get('tb_rps')->result();
    }

    // Metode untuk memperbarui RPS
    public function update_rps($id, $data) {
        $this->db->where('id_rps', $id);
        $this->db->update('tb_rps', $data);
    }

    // Metode untuk menghapus RPS
    public function delete_rps($id) {
        $this->db->where('id_rps', $id);
        $this->db->delete('tb_rps');
    }
}
