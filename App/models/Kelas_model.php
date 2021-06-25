<?php

class Kelas_model extends Controller 
{
    private $table = 'kelas';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function tampilKelas()
    {
        $this->db->query("SELECT kelas, mitra, harga FROM transaksi INNER JOIN kelas ON transaksi.id_kelas=kelas.id_Kelas WHERE transaksi.keterangan='Lunas'");
        return $this->db->resultSet();
    }
}