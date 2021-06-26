<?php 

class Dashboard extends Controller{
    public function index()
    {
        if ( !isset($_POST['username']) || !isset($_POST['password']))
        {
            header("Location: " . BASEURL . "/home");
        } else 
        {
            $data['judul'] = 'Dashboard';
            $this->view('templates/header',$data);
            $this->view('dashboard/index');
        }
    }
}