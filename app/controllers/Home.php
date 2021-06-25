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
        $this->view('templates/header-user',$data);
        $this->view('home/daftar');
        $this->view('templates/footer-home');
    }

    public function proses_daftar()
    {
        if ($_POST['password'] != $_POST['re_pass'])
        {
            Flasher::setFlash('Konfirmasi Pssword', 'Tidak Sesuai', 'danger');
            header('location: ' . BASEURL . '/Home/daftar');
            exit;
        }

        if ($this->model('Akun_model')->addAkun($_POST) > 0)
        {
            Flasher::setFlash('Register', 'Berhasil', 'success');
            header('Location: ' . BASEURL . '/login');
        }
    }

    public function login()
    {
        $this->view('templates/header-user');
        $this->view('home/login');
        $this->view('templates/footer-home');
    }
}


