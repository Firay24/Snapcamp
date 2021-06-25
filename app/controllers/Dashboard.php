<?php 

class Dashboard extends Controller{
    public function index()
    {
        $this->view('templates/header');
        $this->view('dashboard/index');
    }
}