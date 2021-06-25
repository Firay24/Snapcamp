<?php

class Akun_model{
    private $table = 'pelanggan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function addAkun($data)
    {
        $query = "INSERT INTO pelanggan (nama, username, password, email, jenisKelamin, tempatLahir, tanggalLahir, alamat, noHP) VALUES (:nama, :username, :password, :email, :jenisKelamin, :tempatLahir, :tanggalLahir, :alamat, :noHP)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jenisKelamin', $data['jenisKelamin']);
        $this->db->bind('tempatLahir', $data['tempatLahir']);
        $this->db->bind('tanggalLahir', $data['tanggalLahir']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('noHP', $data['noHP']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}