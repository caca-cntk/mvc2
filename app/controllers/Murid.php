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

    public function hapus($id)
    {
        if( $this->model('Murid_model')->hapusDataMurid($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/murid');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/murid');
            exit;
        }
    }

    public function getUbah()
    {
        //meminta data murid yg kita pilih
        echo json_encode($this->model('Murid_model')->getMuridById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Murid_model')->ubahDataMurid($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/murid');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/murid');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Murid';
        //ambil datanya
        $data['murid'] = $this->model('murid_model')->cariDataMurid();
        //kirimkan kesini
        $this->view('templates/header', $data);
        $this->view('murid/index', $data);
        $this->view('templates/footer');
    }
}