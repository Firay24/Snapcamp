<?php 

class Kelas_saya extends Controller{
    public function index()
    {
        $this->view('templates/header');
        $this->view('kelas_saya/index');
    }
    public function belajar()
    {
        $this->view('templates/header');
        $this->view('kelas_saya/belajar');
    }
}