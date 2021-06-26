<?php 
class Daftar extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar';
        $this->view('templates/header-user',$data);
        $this->view('daftar/index');
        $this->view('templates/footer-home');
    }
}


?>