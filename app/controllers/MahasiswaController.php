<?php
require_once __DIR__ ."../models/Mahasiswa.php";

class MahasiswaController{

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function getAllMahasiswa(){

    }

    public function insertMahasiswa(){

    }

    public function updateMahasiswa(){

    }

    public function deleteMahasiswa(){

    }
}

?>