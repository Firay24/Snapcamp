<?php 

class Kelas_saya extends Controller{
    public function index()
    {
        $data['judul'] = 'Kelas Saya';
        $data['kelas'] = $this->model('Kelas_model')->tampilKelas();
        $this->view('templates/header', $data);
        $this->view('kelas_saya/index', $data);
    }
}