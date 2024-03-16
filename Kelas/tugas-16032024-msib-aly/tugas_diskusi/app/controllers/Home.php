<?php

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Utama';
        $data['Home'] = $this->model("Home_model")->getAllData();
        $this->view('home/index', $data);
    }

    public function tambah() {
        if($this->model('Home_model')->tambahPeserta($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');   
        }
        header('Location: ' . BASEURL . '/Home');
        exit;
    }

    public function hapus($id) {
        if($this->model('Home_model')->hapusData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');   
        }
        header('Location: ' . BASEURL . '/Home');
        exit;
    }
}
?>