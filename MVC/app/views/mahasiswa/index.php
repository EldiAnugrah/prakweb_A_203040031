<div class="container mt-5">

<div class="row">
  <div class="col-">
    <h3>daftar mahasiswa </h3>

    
      <?php foreach($data['mhs'] as $mhs): ?>
        <ul>
          <li> <?= $mhs['nama']; ?></li>
          <li> <?= $mhs['nrp']; ?></li>
          <li> <?= $mhs['jurusan']; ?></li>
          <li> <?= $mhs['email']; ?></li>
        </ul>
      <?php endforeach; ?>
    
  </div>
</div>

</div>