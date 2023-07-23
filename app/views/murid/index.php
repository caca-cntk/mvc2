

<div class="container mt-5">

<div class="row">
  <div class="col-6">
    <h3>Daftar Murid</h3>


<ul class="list-group">
      <?php foreach( $data['murid'] as $murid) : ?>
        <li class="list-group-item"><?= $murid['nama']; ?></li>
        <?php endforeach; ?>  
    </ul>
  </div>
</div>
</div>


 