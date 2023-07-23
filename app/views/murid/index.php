<div class="container mt-5">
<div class="row">
  <div class="col-6">
    <h3>Daftar Murid</h3>
      <?php foreach( $data['murid'] as $murid) : ?>
        <ul>
          <li><?= $murid['nama']; ?></li>
          <li><?= $murid['nip']; ?></li>
          <li><?= $murid['email']; ?></li>
          <li><?= $murid['jurusan']; ?></li>
        </ul>
        <?php endforeach; ?>  
  </div>
</div>
</div>