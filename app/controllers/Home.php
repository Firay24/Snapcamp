<?php 

class Home extends Controller{
    public function index()
    {
        $this->view('templates/header-home');
        $this->view('home/index');
        $this->view('templates/footer-home');
    }
}
?>


