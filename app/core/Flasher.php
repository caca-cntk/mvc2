<?php

class Flasher {
    //$pesan adalah saat berhasil atau gagal 
    //$aksi ini saat kita melakukan apa, misal ditambah/diubah
    //$tipe dari kelas bootstrap mana yg akan kita pakai, misal warna kalau gagal merah, kalau hijau berhasil
    public static function setFlash($pesan, $aksi, $tipe)
    {
        //set sessionnya dengan
        //set dulu data flashnya mau seperti apa

        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];

    }

    public static function flash() //untuk menampilkan pesannya
    {
        if( isset($_SESSION['flash']) ) //cek dulu sessionnya ada/engga 
        {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert"> Data Murid
                    <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                unset($_SESSION['flash']);
        }

    }

}