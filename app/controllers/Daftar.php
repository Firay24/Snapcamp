<?php 
class Daftar extends Controller{
    public function index()
    {
        $this->view('templates/header-user');
        $this->view('daftar/index');
        $this->view('templates/footer-home');
    }
}


?>