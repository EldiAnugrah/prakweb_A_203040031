<div class="container mt-5">

<div class="row">
  <div class="col-">
    <h3>daftar mahasiswa </h3>
        <ul class="list-group">
          <h3>Nama</h3>
        <?php foreach($data['mhs'] as $mhs): ?>
          <li class="list-group-item d-flex justify-content-between align-items-center"> 
            <?= $mhs['nama']; ?> 
            <a href="<?= BASEURL;?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary ">Detail</a>
          </li>
          <?php endforeach; ?>
        </ul> 
  </div>
</div>

</div>