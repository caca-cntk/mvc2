<?php

class Murid_model {

        private $table = 'murid';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

    public function getAllMurid() 
        {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet(); //resultSet digunakan jika isinya banyak

        }  

    public function getMuridById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id'); //untuk menyimpan data yg akan kita binding
        $this->db->bind('id', $id);
        return $this->db->single(); //single digunakan jika isinya cuma 1
    }

    public function tambahDataMurid($data)
    {
        $query = "INSERT INTO murid
                    VALUES
                    ('', :nama, :nip, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMurid($id)
    {
        $query = "DELETE FROM murid WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMurid($data)
    {
        $query = "UPDATE murid SET
                    nama = :nama,
                    nip = :nip,
                    email = :email,
                    jurusan = :jurusan
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMurid()
    {
        $keyword = $_POST['keyword']; //ambil dulu keyword yg dikirim,
        $query = "SELECT * FROM murid WHERE nama LIKE :keyword"; //kita bikin querynya
        $this->db->query($query); //kita jalankan querynya
        $this->db->bind('keyword', "%$keyword%"); //kita binding keywordnya, diisi dengan %$keyword%
        return $this->db->resultSet();
    }
        
    
}