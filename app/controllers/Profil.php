<?php 

class profil extends Controller{
    public function index()
    {
        $this->view('templates/header');
        $this->view('profil/index');
    }
}