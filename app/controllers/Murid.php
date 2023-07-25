<?php

class Murid extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Murid';
        //ambil datanya
        $data['murid'] = $this->model('murid_model')->getAllMurid();
        //kirimkan kesini
        $this->view('templates/header', $data);
        $this->view('murid/index', $data);
        $this->view('templates/footer');

    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Murid';
        $data['murid'] = $this->model('murid_model')->getMuridById($id);
        $this->view('templates/header', $data);
        $this->view('murid/detail', $data);
        $this->view('templates/footer');

    }

    public function tambah()
    {
        if( $this->model('Murid_model')->tambahDataMurid($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/murid');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/murid');
            exit;
        }
    }
}