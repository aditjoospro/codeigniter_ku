<?php

class Model_Orang extends CI_Model {

    public function ambilDataOrang() {
        $this->load->database();

        $hasil = $this->db->query("SELECT * FROM orang");

        return $hasil->result();
    }

    public function prosesTambahOrang($nama, $alamat) {
        $this->load->database();

        $this->db->query("INSERT INTO orang(nama, alamat) VALUES('$nama', '$alamat')");
    }

}

?>