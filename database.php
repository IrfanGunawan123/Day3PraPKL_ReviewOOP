<?php

class Database
{
    public $host = "localhost", $user = "root", $pass = "", $db = "bd2";
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            //echo "Koneksi Berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}
// Data Tabel Guru
include 'guru.php';
include 'dosen.php';

// data tabel A
// include ''

// koneksi DB
$db = new Database();

?>