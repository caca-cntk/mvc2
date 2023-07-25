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
            header('Location: ' . BASEURL . '/murid');
            exit;
        }
    }
}