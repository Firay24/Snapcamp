<?php 

class Kelas extends Controller{
    public function index()
    {
        $this->view('templates/header');
        $this->view('kelas/index');
    }
}