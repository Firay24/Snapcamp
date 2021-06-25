<?php 

class Transaksi extends Controller{
    public function index()
    {
        $data['judul'] = 'Transaksi';
        $data['kelas'] = $this->model('transaksi_model')->tampil();
        $this->view('templates/header', $data);
        $this->view('transaksi/index', $data);
        $this->view('templates/footer');
    }
    public function pembayaran()
    {
        $this->view('templates/header');
        $this->view('transaksi/pembayaran');
        $this->view('templates/footer');
    }
    public function metode()
    {
        $this->view('templates/header');
        $this->view('transaksi/metode');
        $this->view('templates/footer');
    }
    public function detail()
    {
        $this->view('templates/header');
        $this->view('transaksi/detail');
        $this->view('templates/footer');
    }
    public function upload()
    {
        $this->view('templates/header');
        $this->view('transaksi/upload');
        $this->view('templates/footer');
    }
    public function informasi()
    {
        $this->view('templates/header');
        $this->view('transaksi/informasi');
        $this->view('templates/footer');
    }
}