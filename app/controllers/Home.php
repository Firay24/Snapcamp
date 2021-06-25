<?php 

class Home extends Controller{
    public function index()
    {
        $this->view('templates/header-home');
        $this->view('home/index');
        $this->view('templates/footer-home');
    }
    public function daftar()
    {
        $this->view('templates/header-user');
        $this->view('home/daftar');
        $this->view('templates/footer-home');
    }
    public function login()
    {
        $this->view('templates/header-user');
        $this->view('home/login');
        $this->view('templates/footer-home');
    }
}


