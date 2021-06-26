<?php 

class Dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('templates/header',$data);
        $this->view('dashboard/index', $data);
        
        if ( !isset($_POST['username']) || !isset($_POST['password']))
        {
            header("Location: " . BASEURL . "/home");
            exit;
        } 
    }
}