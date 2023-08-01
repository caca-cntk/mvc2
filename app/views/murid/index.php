<div class="container mt-3">

  <div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>

  </div>

<div class="row">
  <div class="col-lg-6">
  <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
    Tambah Data Murid
  </button>
  <br><br>
    <h3>Daftar Murid</h3>
<ul class="list-group">
      <?php foreach( $data['murid'] as $murid) : ?>
        <li class="list-group-item"><?= $murid['nama']; ?>
        <a href="<?= BASEURL; ?>murid/hapus/<?= $murid['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>

        <a href="<?= BASEURL; ?>murid/ubah/<?= $murid['id']; ?>" class="badge badge-success float-right tampilModalUbah ml-2"  data-toggle="modal" data-target="#formModal" data-id="<?= $murid['id']; ?>">ubah</a>
        <!-- jadi nanti id nya kita tangkap pakai jquery, -->
        <!-- supaya jquery tau yg mau kita ambil itu murid dengan id berapa -->

        <a href="<?= BASEURL; ?>murid/detail/<?= $murid['id']; ?>" class="badge badge-primary float-right ml-2">detail</a>
      </li>
        <?php endforeach; ?>  
    </ul>
  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Murid</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php
      error_reporting (E_ALL ^ E_WARNING || E_NOTICE);
      ?>
        <form action="<?= BASEURL; ?>murid/tambah" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" id="id">
      
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="number" class="form-control" id="nip" name="nip">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select class="form-control" id="jurusan" name="jurusan">
            <option value="teknik">Teknik</option>
            <option value="farmasi">Farmasi</option>
            <option value="kimia">Kimia</option>
            <option value="fisika">Fisika</option>
            <option value="biologi">Biologi</option>
          </select>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


 