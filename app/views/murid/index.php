

<div class="container mt-5">

<div class="row">
  <div class="col-6">
    <h3>Daftar Murid</h3>


<ul class="list-group">
      <?php foreach( $data['murid'] as $murid) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center"><?= $murid['nama']; ?>
        <a href="<?= BASEURL; ?>murid/detail/<?= $murid['id']; ?>" class="badge badge-primary">detail</a>
      </li>
        <?php endforeach; ?>  
    </ul>
  </div>
</div>
</div>


 