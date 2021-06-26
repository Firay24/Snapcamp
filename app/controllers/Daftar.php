<?php 
class Daftar extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar';
        $this->view('templates/header-user',$data);
        $this->view('daftar/index');
        $this->view('templates/footer-home');
    }
    
    public function proses_daftar()
    {
        if ($_POST['password'] != $_POST['konfirm'])
        {
            Flasher::setFlash('Konfirmasi password', 'Tidak sesuai', 'danger');
            header("Location: " . BASEURL . "/Daftar/index");
            exit;
        }

        if( $this->model('Akun_model')->addAkun($_POST) > 0)
        {
            Flasher::setFlash('Daftar', 'Berhasil', 'success');
            header("Location: " . BASEURL . "/login/index");
            exit;
        }
    }
    
}


?>