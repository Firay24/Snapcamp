<?php 

class Sertifikat extends Controller{
    public function index()
    {
        $this->view('templates/header');
        $this->view('sertifikat/index');
    }
}