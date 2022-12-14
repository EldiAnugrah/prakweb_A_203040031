<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
        <?php flasher::flash(); ?>
    </div>
  </div>

<div class="row">
  <div class="col-lg-6">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
      Tambah Data Mahasiswa
    </button>

    <h3 class="mt-3">daftar mahasiswa </h3>
        <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs): ?>
          <li class="list-group-item "> 
            <?= $mhs['nama']; ?> 
            <a href="<?= BASEURL;?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-2"
            onclick="return confirm('yakin banh?')">Hapus</a>
            <a href="<?= BASEURL;?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ">Detail</a>
          </li>
          <?php endforeach; ?>
        </ul> 
  </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>mahasiswa/tambah" method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name= "nama" placeholder="Eldi Tampan">
          </div>
          <div class="form-group">
            <label for="nrp">nrp</label>
            <input type="number" class="form-control" id="nrp" name= "nrp" placeholder="203040031">
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name= "email" placeholder="elditamvan15@gmail.com">
          </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Industri">Teknik Industri</option> 
              <option value="Teknik Pangan">Teknik Pangan</option>
              <option value="Teknik Planologi">Teknik Planologi</option> 
              <option value="Teknik lingkungan">Teknik lingkungan</option> 
              <option value="Teknik Memakan Pisang">Teknik Memakan Pisang</option> 
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