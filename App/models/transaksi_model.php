<?php

class transaksi_model extends Controller
{
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tampil()
    {
        $this->db->query("SELECT transaksi.id_transaksi, waktu, keterangan, kelas, harga FROM transaksi INNER JOIN kelas ON transaksi.id_kelas=kelas.id_Kelas");
        return $this->db->resultSet();
    }
    
}