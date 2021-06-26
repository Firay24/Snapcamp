<?php 

class Login extends Controller{
    public function index()
    {   
        $data['judul']='masuk';
        $this->view('templates/header-user', $data);
        $this->view('login/index');
        $this->view('templates/footer-user');
    }

    public function proses_masuk()
    {
        $data = $_POST;

        $credential = $this->model('Akun_model')->getCredential($data['username']);

        if ($credential['password'] == $data['password'])
        {
            $_SESSION['username'] == $data ['username'];
            header("Location: " . BASEURL . "/dashboard/index");
            exit;
        } else {
            Flasher::setFlash("Masuk", "Gagal", 'danger');
            header("Location: " . BASEURL ."/login");
            exit;
        }
    }

}?>