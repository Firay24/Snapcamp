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
        $data['judul'] = 'Daftar';
        $this->view('templates/header-user');
        $this->view('home/daftar');
        $this->view('templates/footer-home');
    }

    public function proses_daftar()
    {
        if ($_POST['password'] != $_POST['re_pass'])
        {
            Flasher:
        }
    }

    public function login()
    {
        $this->view('templates/header-user');
        $this->view('home/login');
        $this->view('templates/footer-home');
    }
}


