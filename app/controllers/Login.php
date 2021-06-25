<?php 

class Login extends Controller{
    public function index()
    {
        $this->view('templates/header-user');
        $this->view('login/index');
        $this->view('templates/footer-user');
    }
}?>