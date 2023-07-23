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
}