<?php 

class Mekanisme extends Controller{
    public function index()
    {
        $this->view('templates/header');
        $this->view('mekanisme/index');
    }
}