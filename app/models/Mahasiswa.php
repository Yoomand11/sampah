<?php
require_once __DIR__ ."../../config/Database.php";
class Mahasiswa{

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